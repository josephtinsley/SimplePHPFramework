<?PHP
Class route {
    
    private static $default_request = 'index';
    private static $request;
    public  static $route;
    
    /* MAY HAVE TO USE $_SERVER['ORIG_PATH_INFO'] INSTEAD OF $_SERVER['PATH_INFO'] */
    private static function setRequest()
    {   
        self::$request = ( isset($_SERVER['PATH_INFO']) )? trim($_SERVER['PATH_INFO'],'/'): self::$default_request;
    }

    public static function getRoute()
    { 
        global $params, $controller_class_name, $controller;
        
        self::setRequest();
        
        if( self::$request === self::$default_request )
        {
            self::$request = self::$default_request; 
        }

        
        if( self::$request[0] == '_' )
        {
            self::$request = str_replace('/','_',self::$request);
        }
        
        
        $params = explode('/',self::$request);

        if( file_exists( CONTROLLER. $params[0] . '_controllers.php' ) )
        {
            require_once CONTROLLER. $params[0] . '_controllers.php';
            $controller_class_name = $params[0]."_controllers"; 
        }else 
        {
            require_once CONTROLLER. 'error_controllers.php';
            $controller_class_name = "error_controllers"; 
        }
        

        /* CALL CONTROLLER CLASS  */
        $controller = new $controller_class_name; 
        $controller->index(); 

        self::$route =  str_replace('/', '_',self::$request); 
        

    }
    
}//END CLASS