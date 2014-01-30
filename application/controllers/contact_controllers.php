<?PHP
Class contact_controllers extends BaseController{

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
     BaseController::$view->_sitename = SITE_NAME;
     BaseController::$view->_title = 'Contact Page';
     BaseController::$view->_meta_description = 'Meta Description goes here';
     BaseController::$view->_meta_keywords = 'Page Keywords goes here';
     BaseController::$view->_greeting = 'Hello World! Welcome to our contact page';
     BaseController::$view->display('contact/index');   
    }
      
}//END CLASS
