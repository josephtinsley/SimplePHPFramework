<?PHP
Class about_controllers extends BaseController{

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
     BaseController::$view->_sitename = SITE_NAME;
     BaseController::$view->_title = 'About Page';
     BaseController::$view->_meta_description = 'Meta Description goes here';
     BaseController::$view->_meta_keywords = 'Page Keywords goes here';
     BaseController::$view->_greeting = 'Hello World! Welcome to our about page';
     BaseController::$view->_profile_names = $this->show_profile_names(); 
     BaseController::$view->_sample_form = $this->show_sample_form(); 
     BaseController::$view->display('about/index');  
    }
    
    private function show_profile_names() { 
        BaseController::Model('about');
        
        $retVal = about_models::get_profile_names();
        
        $html ='<ul>'."\n";
        for ($x = 0; $x < count($retVal); $x++)
        {
            $html .='<li>'.$retVal[$x]['f_name'] .':'.$retVal[$x]['l_name'].'</li>'."\n";
        }
        $html .='</ul>'."\n";
        return $html;
    }
    
    private function show_sample_form() {
        require_once CLASSES.'ClassSampleForm.php';
        return SampleForm::form();
    }


}//END CLASS