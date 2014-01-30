<?PHP
require_once 'application/config/config.php';
require_once 'application/route.php';

function __autoload($class_name) {
    require_once 'application/config/'.$class_name.'.php';
}


route::getRoute();
