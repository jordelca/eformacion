<?php
Class userController Extends baseController
{
    
    public function insertuser() {
        $this->registry->template->show('user_insertuser');
    }
    public function massregistration() {
        $this->registry->template->show('user_massregistration');
    }
    public function index() {
        $this->registry->template->show('user_list');
    }
    
    public function edit() {
        $this->registry->template->show('user_edit');
    }
    
    public function profile() {
        $this->registry->template->show('user_profile');
    }
    
    public function import() {
        $this->registry->template->show('user_import');
    }

    public function export() {
        $this->registry->template->show('user_export');
    }

    public function listUsers() {
            $this->registry->template->show('user_list');
    }

    public function getUsers() {
        return user::listUsers();
    }

    public function getUser() {
        echo json_encode(user::getUser($_POST['userId']));
    }
}
?>
