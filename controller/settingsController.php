<?php
Class settingsController Extends baseController
{
    
    public function index() {
        $this->registry->template->show('settings_translation');
    }
    
    public function translation() {
        $this->registry->template->show('settings_translation');
        
    }
    
    public function preferences() {
        $this->registry->template->show('settings_preferences');

    }
    
    public function addTranslation() {
        $data = new stdClass();
        if (array_key_exists('USER', $_SESSION) && !empty($_SESSION['USER'])) {
            try {
                $conn = $this->registry->db->prepare("UPDATE adm_translation SET translation=:translation WHERE translation_key = :key and lang_code=:lang");
                $conn->bindValue(":key", $_POST['translation_key']);
                $conn->bindValue(":lang", $_POST['lang_code']);
                $conn->bindValue(":translation", utf8_decode($_POST['translation']));
                $conn->execute();
                
                $data->result="OK";
                $data->key  = $_POST['translation_key'];
                $data->lang = $_POST['lang_code'];
                $data->translation  = utf8_decode($_POST['translation']);
                echo json_encode( $data );
                
            }
            catch(Exception $e) {   
                $data->result="ERROR";
                echo json_encode( $data );
            }
        } else {
            header('Location: /'.$_SESSION['lang'].'/login/show');
        }
    }
}
?>
