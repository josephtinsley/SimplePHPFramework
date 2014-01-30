<?php

class BaseView {

    public function display($name) {
        require_once 'application/views/'.$name.'.php';
    }
    
}

?>
