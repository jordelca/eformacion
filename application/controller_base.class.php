<?php

Abstract Class baseController {

/*
 * @registry object
 */
protected $registry;


function __construct($registry) {
	$this->registry = $registry;
	if (!headers_sent()) {
		header('Content-Type: text/html; charset=iso-8859-1');
	}
}

public function file_get_contents_wrapper($path, $include_path,$context){
	try{


		$request = file_get_contents($path,$include_path,$context);
	    
	    if(strpos($http_response_header[0], "404")!== false){
	        header('Location: /'.$_SESSION['lang'].'/error/notFound');
	    }else if(strpos($http_response_header[0], "500")!== false){
	    	header('Location: /'.$_SESSION['lang'].'/error/internalServerError');
	    }
    }catch (Exception $e){
    	header('Location: /'.$_SESSION['lang'].'/error/internalServerError');	
    }
	return $request;


}


/**
 * @all controllers must contain an index method
 */
abstract function index();
}




?>
