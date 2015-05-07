<?php
Class loginController Extends baseController
{
    
    public function index() {
        
        if (array_key_exists('USER', $_SESSION) && !empty($_SESSION['USER'])) {
            header('Location: /'.$_SESSION['lang'].'/home/show');
        } else if (empty($_SERVER['REQUEST_URI']) || $_SERVER['REQUEST_URI'] == "/") {
            header('Location: /'.$_SESSION['lang'].'/login/show');
        } else {

            $this->registry->template->show('login_show');
        }
    }
    
    public function show() {
             
        if (array_key_exists('USER', $_SESSION) && !empty($_SESSION['USER'])  && isset($_SESSION['USER']->id) && $_SESSION['USER']->id!=0) {
            header('Location: /'.$_SESSION['lang'].'/home/show');
        } else if (empty($_SERVER['REQUEST_URI']) || $_SERVER['REQUEST_URI'] == "/") {
            header('Location: /'.$_SESSION['lang'].'/login/show');
        } else {
            
            $this->registry->template->show('login_show');
        }
    }
    
    public function login() {
        if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
            if(ENVIRONMENT === "dev"){
                $postdata = http_build_query(array("service" => "moodle_webservice", "username" => $_POST['username'], "password" => $_POST['password']));
                
                $opts = array('http' => array('method' => 'POST', 'header' => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
                
                $context = stream_context_create($opts);

                $result = json_decode(parent::file_get_contents_wrapper(MOODLE_URL.'login/token.php', false, $context), true);

                if (array_key_exists('token', $result) && !empty($result['token'])) {

                    $_SESSION['USER'] = $this->get_moodle_user($result['token'], $_POST['username'],$_POST['password']);
                    if(!isset($_SESSION['USER']->firstname) && isset($_SESSION['USER']->fullname)){
                        $parts = explode(" ", $_SESSION['USER']->fullname);
                        $_SESSION['USER']->firstname = $parts[0];
                        $_SESSION['USER']->lastname = $parts[1];
                        $_SESSION['SESSION_ORG']->lastname = $parts[1];
                        $_SESSION['SESSION_COURSE'] = 0;
                        $_SESSION['SESSION_EDITION'] = 0;
                        $_SESSION['SESSION_COURSE'] = 0;
                        
                        
                    }
                    $_SESSION['token'] = $result['token'];
                    header('Location: /'.$_SESSION['lang'].'/home/show');
                } else {
                    $this->registry->template->show('login_show');
                }
            }else{
                include 'application/session.php';
                header('Location: /'.$_SESSION['lang'].'/home/show');
            }
        } else {
            $this->registry->template->show('login_show');
        }
    }
    


    public function get_moodle_user($token, $username, $password){
        $postdata = http_build_query(array("wstoken" => $token, "wsfunction" => "core_user_get_users_by_field", "field" => "username", "values[0]"=>$username,'moodlewsrestformat'=>'json'));
        $opts = array('http' => array('method' => 'POST', 'header' => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
        $context = stream_context_create($opts);
        $result = parent::file_get_contents_wrapper(MOODLE_URL.'/webservice/rest/server.php', false, $context);
        $resultArray = json_decode($result);
        if(isset($resultArray[0]->id) && $resultArray[0]->id!=0){
            return $resultArray[0];   
        }else{
            return 0;    
        }
        
   
    }

    public function logout() {
        unset($_COOKIE['MoodleSession']);
        
        session_destroy();
        header('Location: /'.$_SESSION['lang'].'/login/show');
    }
}
?>
