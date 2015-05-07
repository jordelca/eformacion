<?php
Class courseController Extends baseController
{
    
    public function index() {

        $this->registry->template->show('course_list');
    }
    
    public function show() {
        $this->registry->template->show('course_list');
    }

    public function create() {
        $this->registry->template->show('course_create');
    }

    public function upload() {
        $this->registry->template->show('course_upload');
    }

    public function submitupload() {

        var_dump($_POST);
        var_dump($_FILES);die();
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

/*
        $result = $this->submit_upload_file($_POST,$_SESSION['token']);
        var_dump($result);die;
*/
        
        header('Location: /'.$_SESSION['lang'].'/course/upload');
    }

    public function listcourses() {
        $this->registry->template->show('course_list');
    }

    public function insertCourse() {
        
        if(ENVIRONMENT === "dev"){
            course::insertCourse($_POST);
        }else{
            $this->create_moodle_courses($_POST,$_SESSION['token']);        
        }
        
        


        header('Location: /'.$_SESSION['lang'].'/course/listcourses');
    }

    public function getCourses() {
        if(ENVIRONMENT === "dev"){
            return $this->get_moodle_courses($_SESSION['token']);
        }else{
            return course::listCourses();
        }
        

        
    }

    public function getAssociatedEditions() {
        echo json_encode(course::listAssociatedEditions($_POST['course_id']));
    }


    public function get_moodle_courses($token){

        $postdata = http_build_query(array("wstoken" => $token, "wsfunction" => "core_course_get_courses", 'moodlewsrestformat'=>'json'));
        $opts = array('http' => array('method' => 'POST', 'header' => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
        $context = stream_context_create($opts);
        $result = parent::file_get_contents_wrapper(MOODLE_URL.'/webservice/rest/server.php', false, $context);

        $resultArray = json_decode( $result );
        return $resultArray;
  
    }

    public function create_moodle_courses($data, $token){
        

        $Moodle_course = new stdClass();
        $Moodle_course->fullname = $data['course_title'];
        $Moodle_course->shortname = uniqid();
        $Moodle_course->categoryid = 2;
        $Moodle_course->summary = $data['course_desc'];
        $Moodle_course->summaryformat = 0;
        $Moodle_course->format = 'topics';
        $Moodle_course->showgrades = 1;
        $Moodle_course->newsitems = 0;
        $Moodle_course->startdate = strtotime("now");
        $Moodle_course->numsections = 10;
        $Moodle_course->maxbytes = 20971520;
        $Moodle_course->showreports = 1;
        $Moodle_course->visible = 1;
        $Moodle_course->groupmode = 1;
        $Moodle_course->groupmodeforce = 0;
        $Moodle_course->defaultgroupingid = 0;
        $Moodle_course->enablecompletion = 1;
        $Moodle_course->completionnotify = 1;
        $MoodleCourses = array($Moodle_course);
        $params = array('courses'=> $MoodleCourses);


        $postdata = http_build_query(array("wstoken" => $token, "wsfunction" => "core_course_create_courses", 'moodlewsrestformat'=>'json','courses'=>$MoodleCourses));
        $opts = array('http' => array('method' => 'POST', 'header' => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
        $context = stream_context_create($opts);
        $result = parent::file_get_contents_wrapper(MOODLE_URL.'/webservice/rest/server.php', false, $context);
        
        $resultArray = json_decode( $result );

        return $resultArray;
                
        
   
    }    


    public function submit_upload_file($data, $token){
        
        

        $file = new stdClass();
        $file ->contextid = 1;
        $file ->component = 'test';
        $file ->filearea = 'filearea';
        $file ->itemid = 1;
        $file ->filepath = 'filepath';
        $file ->filename = $data['course_upload'];
        $file ->url = 'url';
        $params = array($file);

        $postdata = http_build_query(array("wstoken" => $token, "wsfunction" => "core_files_upload", 'moodlewsrestformat'=>'json','file'=>$file));
        $opts = array('http' => array('method' => 'POST', 'header' => 'Content-type: application/x-www-form-urlencoded', 'content' => $postdata));
        $context = stream_context_create($opts);
        $result = parent::file_get_contents_wrapper(MOODLE_URL.'/webservice/rest/server.php', false, $context);
        
        $resultArray = json_decode( $result );

        return $resultArray;
                
        
   
    }
}
?>
