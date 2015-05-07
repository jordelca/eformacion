<?php
class user Extends db
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
    


    static function listUsers() {


        $conn = parent::getInstance()->prepare("SELECT 
                                                    id, dni, role, name, middle_name, first_surname, second_surname, addres, postal_code, city, country
                                                FROM
                                                    adm_users
                                                WHERE
                                                    adm_users.delete = false ORDER BY adm_users.id ASC");
        $conn->execute();
        return $conn->fetchAll(PDO::FETCH_ASSOC);
    }

    static function getUser($id) {

        $conn = parent::getInstance()->prepare("SELECT 
                                                    id, dni, role, name, middle_name, first_surname, second_surname, addres, postal_code, city, country, profile_picture
                                                FROM
                                                    adm_users
                                                WHERE
                                                    adm_users.delete = false and id=:id ORDER BY adm_users.id ASC"); 
        $conn->bindValue(":id", $id); 
        $conn->execute();
        return $conn->fetch(PDO::FETCH_ASSOC);
    }


}
 /*** end of class ***/
?>

