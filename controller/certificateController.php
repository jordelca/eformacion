<?php
Class certificateController Extends baseController
{
    
    public function index() {
    	$this->registry->template->show('certificate_generate');
    }

    public function generate() {
        $this->registry->template->show("certificate_generate");
    }
}
?>

