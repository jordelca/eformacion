<?php

class db{

/*** Declare instance ***/
private static $instance = NULL;

/**
*
* the constructor is set to private so
* so nobody can create a new instance using new
*
*/
private function __construct() {
  /*** maybe set the db name here later ***/
}

/**
*
* Return DB instance or create intitial connection
*
* @return object (PDO)
*
* @access public
*
*/
public static function getInstance() {

if (!self::$instance)
    {
    	if(ENVIRONMENT==="dev"){
    		self::$instance = new PDO("pgsql:dbname=moodleAdmin;host=localhost", "postgres", "root" ); 
    	}else{
			self::$instance = new PDO("pgsql:dbname=df030n4gnss92n;port=5432;host=ec2-54-197-241-64.compute-1.amazonaws.com", "mlbnszkfuplltb", "XOjqQUgAnLEejGCfrg98fDCTpn" ); 
    	}
    	
    
    self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
return self::$instance;
}

/**
*
* Like the constructor, we make __clone private
* so nobody can clone the instance
*
*/
private function __clone(){
}

} /*** end of class ***/

?>
