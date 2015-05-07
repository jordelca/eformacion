<?php
class router
{
    
    /*
     * @the registry
    */
    private $registry;
    private $language;
    
    /*
     * @the controller path
    */
    private $path;
    
    private $args = array();
    
    public $file;
    
    public $controller;
    
    public $action;
    
    function __construct($registry) {
        $this->registry = $registry;
        $this->language = new language($this->registry);
        $this->controller = $this->getController();
    }
    
    /**
     *
     * @set controller directory path
     *
     * @param string $path
     *
     * @return void
     *
     */
    function setPath($path) {
        
        /*** check if path i sa directory ***/
        if (is_dir($path) == false) {
            throw new Exception('Invalid controller path: `' . $path . '`');
        }
        
        /*** set the path ***/
        $this->path = $path;
    }
    
    /**
     *
     * @load the controller
     *
     * @access public
     *
     * @return void
     *
     */
    public function loader() {

        $lang = $this->getLanguage();


        if (!$this->language->checkAvailableLanguages($lang)) {
            
            header('Location:' . $this->language->changeLanguage($_SERVER['REQUEST_URI'], DEFAULT_LANG));

        }else if(sizeof(explode('/', $_GET['rt'])) > 2){
            $route = (empty($_GET['rt'])) ? '' : $_GET['rt'];
            $parts = explode('/', $route);
            header('Location:/' . $_SESSION['lang'] ."/".$parts[1]."/".$parts[2]);
        } else {
                           
            /*** check the route ***/
            $this->getController();
            
            $class = $this->controller . 'Controller';
            $this->file = $this->path . '/' . $class . '.php';
            
            /*** if the file is not there diaf ***/
            if (is_readable($this->file) == false || !file_exists($this->file)) {
                $this->file = $this->path . '/errorController.php';
                $this->controller = 'error';
            }
            
            /*** include the controller ***/
            include $this->file;
            
            /*** a new controller class instance ***/
            $class = $this->controller . 'Controller';
            $controller = new $class($this->registry);
            
            /*** check if the action is callable ***/
            
            if (is_callable(array($controller, $this->action)) == false) {
                if (empty($this->action)) {
                    header('Location:' . $_SERVER['REQUEST_URI'] . "/error");
                }

                if ($this->controller != "error") {
                    $this->file = $this->path . '/errorController.php';
                    $this->controller = 'error';
                    
                    /*** include the controller ***/
                    include $this->file;
                    
                    /*** a new controller class instance ***/
                    $class = $this->controller . 'Controller';
                    $controller = new $class($this->registry);
                }
                
                $action = 'index';
            } else {

                
                if (empty($this->action)) {

                    header('Location:' . $_SERVER['REQUEST_URI'] . "/index");
                }

                $action = $this->action;
            }
            
            /*** run the action ***/
            $controller->$action();
        }
    }
    
    /**
     *
     * @get the controller
     *
     * @access private
     *
     * @return void
     *
     */
    public function getController() {
        
        /*** get the route from the url ***/
        $route = (empty($_GET['rt'])) ? '' : $_GET['rt'];
        
        if (empty($route)) {
            $route = '/login/show';
        } else {
            
            /*** get the parts of the route ***/
            $parts = explode('/', $route);
            $this->controller = $parts[0];
            if (isset($parts[1])) {
                $this->action = $parts[1];
            }
        }
         
        if (empty($this->controller) && empty($this->action)) {
            $this->controller = 'login';
            $this->action = 'show';
            header('Location:' . "/" . $_SESSION['lang'] . "/" . $this->controller . "/" . $this->action);
        }
        
        /*** set the file path ***/
        $this->file = $this->path . '/' . $this->controller . 'Controller.php';

    }
    
    /**
     *
     * @get the language
     *
     * @access private
     *
     * @return void
     *
     */
    private function getLanguage() {
        
        /*** get the route from the url ***/

        if(isset($_GET['lang']) && !empty($_GET['lang'])){
            $_SESSION['lang'] = $_GET['lang'];
        }else if(empty($_SESSION['lang'])){
            $_SESSION['lang'] = DEFAULT_LANG;
        }
             
        return $_SESSION['lang'];
    }
}
?>
