<?php
class course Extends db
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
        
        /*** maybe set the course name here later ***/
    }
    
    /**
     *
     * Like the constructor, we make __clone private
     * so nobody can clone the instance
     *
     */
    private function __clone() {
    }
    
    static function insertCourse($form) {
        $conn = parent::getInstance()->prepare("INSERT INTO adm_course (title,description,creation_date,visible,max_attendees,deleted) VALUES (:title,:description,NOW(),:visible,:max_attendees,false)");
        $conn->bindValue(":title", $form['course_title']);
        $conn->bindValue(":description", $form['course_desc']);
        $conn->bindValue(":visible", $form['course_visible']);
        $conn->bindValue(":max_attendees", $form['course_max_attendees']);
        
        try {
            $conn->execute();
        }
        catch(Exception $e) {
            var_dump($e->getMessage());
            die();
        }
    }
    
    static function listcourses() {
        $conn = parent::getInstance()->prepare("SELECT 
                                                    adm_course.id, adm_course.title,adm_course.description,adm_course.creation_date,adm_course.visible,adm_course.max_attendees
                                                FROM
                                                    adm_course
                                                WHERE
                                                    adm_course.deleted = false ORDER BY adm_course.id ASC");
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }
    
    static function listAssociatedCourses($org_id) {
        $conn = parent::getInstance()->prepare("SELECT 
                                                    adm_organization_course.course_id
                                                FROM
                                                    adm_organization_course
                                                WHERE
                                                    adm_organization_course.org_id = :org_id
                                                ORDER BY adm_organization_course.course_id ASC");
        $conn->bindValue(":org_id", $org_id);
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }
    
     static function listAssociatedEditions($course_id) {
        try {
            $conn = parent::getInstance()->prepare("SELECT 
                                                    *
                                                FROM
                                                    adm_edition
                                                WHERE
                                                    adm_edition.deleted = false AND 
                                                    adm_edition.course_id=:course_id");
            $conn->bindValue(":course_id", $course_id);
            $conn->execute();
        }
        catch(Exception $e) {
            return "";
        }
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }

    static function listAvailableCourses($org_id) {
        $conn = parent::getInstance()->prepare("SELECT 
                                                    a.id, a.title,a.description,a.creation_date,a.visible,a.max_attendees
                                                FROM
                                                    adm_course a
                                                    
                                                WHERE
                                                    NOT EXISTS(SELECT * from adm_organization_course b WHERE a.id= b.course_id and b.org_id=:org_id)
                                                    AND a.deleted = false ORDER BY a.id ASC");
        
        $conn->bindValue(":org_id", $org_id);
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }
    
    static function listSpecificCourses($org_id, $list) {
        
        try {
            $conn = parent::getInstance()->prepare("SELECT 
                                                    adm_course.id, adm_course.title,adm_course.description,adm_course.creation_date,adm_course.visible,adm_course.max_attendees
                                                FROM
                                                    adm_course
                                                WHERE
                                                    adm_course.deleted = false AND 
                                                    adm_course.id IN (1,2,3) ORDER BY adm_course.id ASC");
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

