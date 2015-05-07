<?php

Class languageController Extends baseController {

	public function index() 
	{

	}


	public function change() 
	{
			$parts = explode('/', $_GET['url']);
			$_SESSION['lang'] = $parts[1];
			header('Location: '.$_GET['url']); 
		    
	}

}
?>
