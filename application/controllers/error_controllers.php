<?PHP
Class error_controllers extends BaseController{

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
     BaseController::Model('error');
     BaseController::$view->_sitename = SITE_NAME;
     BaseController::$view->_title = 'Error Page';
     BaseController::$view->_meta_description = 'Meta Description goes here';
     BaseController::$view->_meta_keywords = 'Page Keywords goes here';
     
     BaseController::$view->_h1 = 'Error Page';
     BaseController::$view->_content = 'This is the error page';
     
     BaseController::$view->display('error/index');   
    }
    
    
}//END CLASS
