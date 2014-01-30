<?php

Class BaseController {
    CONST path = 'application/models/';
    Protected static  $view;
    Protected static  $Model;
    
    public function __construct() {
        self::$view = new BaseView();
    }
    
    public static function Model($name) {
        $file_name = self::path . $name.'_models.php';
        
        if (file_exists($file_name)) 
        {
            require_once "$file_name";
            
            $model_class_name = $name . '_models';
            self::$Model = new $model_class_name;
            return false;
        } else{
            return false;
        }       
    }   
    
}//END CLASS
?>