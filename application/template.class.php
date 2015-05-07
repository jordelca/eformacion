<?php

Class Template {

/*
 * @the registry
 * @access private
 */
private $registry;
private $language;
private $controller;

/*
 * @Variables array
 * @access private
 */
private $vars = array();

/**
 *
 * @constructor
 *
 * @access public
 *
 * @return void
 *
 */
function __construct($registry) {
	$this->registry = $registry;
	$this->language = new language($this->registry);
	

}


 /**
 *
 * @set undefined vars
 *
 * @param string $index
 *
 * @param mixed $value
 *
 * @return void
 *
 */
 public function __set($index, $value)
 {
        $this->vars[$index] = $value;
 }


function show($name) {

	if ((array_key_exists('USER', $_SESSION) && !empty($_SESSION['USER'])) || $name == "login_show") {

		$path = __SITE_PATH . '/views' . '/' . str_replace("_","/",$name) . '.php';
		if(substr($name, 0, strlen("error_")) === "error_" || substr($name, 0, strlen("login_")) === "login_"){
			$pathFrame = __SITE_PATH . '/views/externalFrame.php';
		}else{
			$pathFrame = __SITE_PATH . '/views/mainFrame.php';
		}
		

		if (file_exists($path) == false)
		{
			throw new Exception('Template not found in '. $path);
			return false;
		}

		// Load variables
		foreach ($this->vars as $key => $value)
		{
			$$key = $value;
		}

		
		include ($pathFrame);               
	} else {

        header('Location: /'.$_SESSION['lang'].LOGIN);
    }
}

function checkRoute($currentRoute,$route){
	if(explode("?",$currentRoute)[0] == $route){
		return "active";
	}
	return "";
}



function checkController($currentRoute,$controller){
	$parts = explode("/",$currentRoute);
	if($parts[2] == $controller){
		$controller = $controller."Controller";
		$this->controller = new $controller($this->registry);
		return "active";
	}
	return "";
}

}

?>
