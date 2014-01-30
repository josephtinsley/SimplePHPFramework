<?php

class BaseModel {

    function __construct() {
         db::conn();        //MYSQL DATABASE
    }
}
?>