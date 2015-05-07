<?php
Class errorController Extends baseController
{
    
    public function index() {
      
        $this->registry->template->show('error_notFound');
    }
    
    public function notFound() {
        $this->registry->template->show('error_notFound');
    }

    public function internalServerError() {
        $this->registry->template->show('error_internalServerError');
    }
}
?>
