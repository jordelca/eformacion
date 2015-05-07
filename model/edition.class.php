<?php
class edition Extends db
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
        
        /*** maybe set the edition name here later ***/
    }
    
    /**
     *
     * Like the constructor, we make __clone private
     * so nobody can clone the instance
     *
     */
    private function __clone() {
    }
    
    static function insertedition($form) {
        $conn = parent::getInstance()->prepare("INSERT INTO adm_edition (title,description,creation_date,visible,max_attendees,deleted) VALUES (:title,:description,NOW(),:visible,:max_attendees,false)");
        $conn->bindValue(":title", $form['edition_title']);
        $conn->bindValue(":description", $form['edition_desc']);
        $conn->bindValue(":visible", $form['edition_visible']);
        $conn->bindValue(":max_attendees", $form['edition_max_attendees']);
        
        try {
            $conn->execute();
        }
        catch(Exception $e) {
            var_dump($e->getMessage());
            die();
        }
    }
    
    static function listeditions() {
        $conn = parent::getInstance()->prepare("SELECT 
                                                    adm_edition.id,adm_edition.course_id,adm_edition.title,adm_edition.description,adm_edition.start_date_edition,adm_edition.end_date_edition,adm_edition.students,adm_edition.groups,adm_edition.waiting,adm_edition.active,adm_edition.visible
                                                FROM
                                                    adm_edition
                                                WHERE
                                                    adm_edition.deleted = false ORDER BY adm_edition.id ASC");
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }

     static function listAssociatedGroups($edition_id) {
        try {
            $conn = parent::getInstance()->prepare("SELECT 
                                                    *
                                                FROM
                                                    adm_group
                                                WHERE
                                                    adm_group.deleted = false AND 
                                                    adm_group.edition_id=:edition_id");
            $conn->bindValue(":edition_id", $edition_id);
            $conn->execute();
        }
        catch(Exception $e) {
            return "";
        }
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }

   
  
}

/*** end of class ***/
?>

