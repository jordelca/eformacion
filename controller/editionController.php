<?php
Class editionController Extends baseController
{
    
    public function index() {
        $this->registry->template->show('edition_show');
    }
    
    public function show() {
        $this->registry->template->show('edition_show');
    }

    public function create() {
        $this->registry->template->show('edition_create');
    }
    
    public function listeditions() {
        $this->registry->template->show('edition_list');
    }

    public function getEditions() {
        return edition::listEditions();
    }

    public function getAssociatedGroups() {
        echo json_encode(edition::listAssociatedGroups($_POST['edition_id']));
    }

}
?>
