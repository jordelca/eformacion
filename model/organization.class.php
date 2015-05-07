<?php
class organization Extends db
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
        
        /*** maybe set the organization name here later ***/
    }
    
    /**
     *
     * Like the constructor, we make __clone private
     * so nobody can clone the instance
     *
     */
    private function __clone() {
    }
    
    static function getOrganizations() {
        $conn = parent::getInstance()->prepare("SELECT 
                                                *
                                            FROM
                                                adm_organization
                                            WHERE
                                                deleted = false");
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }

    static function getCategoryTree($id){
    	$conn = parent::getInstance()->prepare("select category_tree from adm_organization where id=:id");
        $conn->bindValue(":id", $id);
        try{
            $conn->execute();
            $result = ($conn->fetch(PDO::FETCH_ASSOC));
            return $result["category_tree"];
        }catch (Exception $e){
            var_dump($e->getMessage());die();
        }
    }

    static function updateTree($id,$tree){
    	$conn = parent::getInstance()->prepare("UPDATE adm_organization SET category_tree=:tree where id=:id");
        $conn->bindValue(":tree", $tree);
        $conn->bindValue(":id", $id);
        
        try{
            $conn->execute();
        }catch (Exception $e){
            var_dump($e->getMessage());die();
        }
    }

    static function listOrganizations() {
        $conn = parent::getInstance()->prepare("SELECT 
                                                    adm_organization.id,adm_organization.name,adm_organization.description,adm_organization.address,adm_organization.postcode,adm_organization.country,adm_organization.town,adm_organization.county,adm_organization.email,adm_organization.visible,adm_organization.creationdate,adm_organization.licensekey,adm_organization.logo
                                                FROM
                                                    adm_organization
                                                WHERE
                                                    adm_organization.deleted = false ORDER BY adm_organization.id ASC");
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }


    static function addCourseToOrg($org_id,$course_id,$cat_id){
                try{
         
        $conn = parent::getInstance()->prepare("INSERT INTO adm_organization_course (org_id,course_id,category_id) VALUES (:org_id,:course_id,:cat_id)");
        $conn->bindValue(":org_id", $org_id);
        $conn->bindValue(":course_id", $course_id);
        $conn->bindValue(":cat_id", $cat_id);
        $conn->execute();
         
        }catch (Exception $e){
            var_dump($e->getMessage());
        }
        return $conn->fetchAll(PDO::FETCH_ASSOC);

    }

    static function listAssociatedCourses($org_id) {
        try{
        $conn = parent::getInstance()->prepare("SELECT 
                                                    *
                                                FROM
                                                    adm_organization_course a
                                                    LEFT JOIN adm_course  b on a.course_id = b.id
                                                WHERE
                                                    a.org_id = :org_id
                                                ORDER BY a.course_id ASC");
        $conn->bindValue(":org_id", $org_id);
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

