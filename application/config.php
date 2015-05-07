<?php 
define("DEFAULT_LANG", "cs");
define("MOODLE_URL", "http://moodle.eformacion.gva.com/");
define("LOGIN", "/login/show");
if(gethostname() === "EFOR_01"){
	define("ENVIRONMENT", "dev");	
}else{
	define("ENVIRONMENT", "gvHidra");
}



?>