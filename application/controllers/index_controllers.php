<?PHP
Class index_controllers extends BaseController{

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
     BaseController::$view->_sitename = SITE_NAME;
     BaseController::$view->_title = 'Home Page';
     BaseController::$view->_meta_description = 'Meta Description goes here';
     BaseController::$view->_meta_keywords = 'Page Keywords goes here';
     BaseController::$view->_greeting = 'Hello World! Welcome to our home page';

     BaseController::$view->display('index/index');   
    }

}//END CLASS
