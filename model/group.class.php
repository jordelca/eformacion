<?php
class group Extends db
{
    
    /*** Declare instance ***/
    private static $instance = NULL;
    
    /**
     *
     * the constructor is set to private so
     * so nobody can create a new instance using new
     *
     */
    private function __construct() {
        
        /*** maybe set the group name here later ***/
    }
    
    /**
     *
     * Like the constructor, we make __clone private
     * so nobody can clone the instance
     *
     */
    private function __clone() {
    }
    
    static function insertgroup($form) {
        $conn = parent::getInstance()->prepare("INSERT INTO adm_group (title,description,creation_date,visible,max_attendees,deleted) VALUES (:title,:description,NOW(),:visible,:max_attendees,false)");
        $conn->bindValue(":title", $form['group_title']);
        $conn->bindValue(":description", $form['group_desc']);
        $conn->bindValue(":visible", $form['group_visible']);
        $conn->bindValue(":max_attendees", $form['group_max_attendees']);
        
        try {
            $conn->execute();
        }
        catch(Exception $e) {
            var_dump($e->getMessage());
            die();
        }
    }
    
    static function listGroups() {
        $conn = parent::getInstance()->prepare("SELECT 
                                                    adm_group.id, adm_group.edition_id,adm_group.name,adm_group.description,adm_group.type,adm_group.max_students
                                                FROM
                                                    adm_group
                                                WHERE
                                                    adm_group.deleted = false ORDER BY adm_group.id ASC");
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }
    
    static function listAssociatedgroups($org_id) {
        $conn = parent::getInstance()->prepare("SELECT 
                                                    adm_organization_group.group_id
                                                FROM
                                                    adm_organization_group
                                                WHERE
                                                    adm_organization_group.org_id = :org_id
                                                ORDER BY adm_organization_group.group_id ASC");
        $conn->bindValue(":org_id", $org_id);
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }
    
    static function listAvailablegroups($org_id) {
        $conn = parent::getInstance()->prepare("SELECT 
                                                    a.id, a.title,a.description,a.creation_date,a.visible,a.max_attendees
                                                FROM
                                                    adm_group a
                                                    
                                                WHERE
                                                    NOT EXISTS(SELECT * from adm_organization_group b WHERE a.id= b.group_id and b.org_id=:org_id)
                                                    AND a.deleted = false ORDER BY a.id ASC");
        
        $conn->bindValue(":org_id", $org_id);
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }
    
    static function listSpecificgroups($org_id, $list) {
        
        try {
            $conn = parent::getInstance()->prepare("SELECT 
                                                    adm_group.id, adm_group.title,adm_group.description,adm_group.creation_date,adm_group.visible,adm_group.max_attendees
                                                FROM
                                                    adm_group
                                                WHERE
                                                    adm_group.deleted = false AND 
                                                    adm_group.id IN (1,2,3) ORDER BY adm_group.id ASC");
            //$conn->bindValue(":list", $list);
            $conn->execute();
        }
        catch(Exception $e) {
            var_dump($e->getMessage());
            die();
        }
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }
}

/*** end of class ***/
?>

