<?php

Class homeController Extends baseController {

public function index() 
{

}


public function show() {
	$this->registry->template->show("home_show");
}

}
?>
