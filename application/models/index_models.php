<?php

class index_models extends BaseModel {
    public function index(){
        return false;
    }  
    
    public static function get_profile_names(){ 
       $results = db::conn()->sql_query("SELECT", "SELECT f_name, l_name FROM profile");
       $rows    = db::conn()->query_rows($results);
       return ( count($rows) >0 )? $rows: false; 
    }     
}//END CLASS
