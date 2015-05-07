<?php
Class groupController Extends baseController
{
    
    public function index() {
        $this->registry->template->show('group_show');
    }
    
    public function show() {
        $this->registry->template->show('group_show');
    }

    public function create() {
        $this->registry->template->show('group_create');
    }

    public function listgroups() {
        $this->registry->template->show('group_list');
    }
    
    public function getGroups() {
        return group::listGroups();
    }

}
?>
