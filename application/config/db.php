<?PHP
Class DB {

    /* MAC CONFIG */
    const Server = 'localhost';
    const dbUser = "root";
    const dbPass = "DBUserPassword";
    const dbName = "spf";
    const SALT   = 'supercalifragilisticexpialidocious';

    private static $instance;
    
    private function __construct() { }  


    public static function conn()
    {   
        global $conne;
        if( !isset(self::$instance) ){
            $conne = mysql_connect(self::Server, self::dbUser, self::dbPass) or die("Could not connect to localhost");
             mysql_select_db(self::dbName, $conne) or die("Could not select database");
            self::$instance = new db();   
        }
         return self::$instance;
    }

    public function sql_query($sql_type, $sql)
    {

        switch (strtolower($sql_type))
        {
                case "delete" : $results = mysql_query($sql) or $this->_log_error( "Delete Error: ".mysql_error() ." SQL:->$sql"    );
                    return $results;
                    break;
                case "update" : $results = mysql_query($sql) or $this->_log_error( "Update Error: ".mysql_error() ." SQL:->$sql"    );
                    return $results;
                    break;
                case "insert" : $results = mysql_query($sql) or $this->_log_error( "Insert Error: ".mysql_error() ." SQL:->$sql"    );
                    return $results;
                    break;
                case "select" : $results = mysql_query($sql) or $this->_log_error( "Select Error: ".mysql_error() ." SQL:->$sql"    );
                    return $results;
                    break;
        }
    }

    public function query_rows($results)
    {
        $this->rows = null; // CLEARING OBJECT HERE.
        while ($row = mysql_fetch_array($results))
        {
        $this->rows[] = $row;
        }

        return $this->rows;
    }
    public function close_conn()
    {
        mysql_close();
    }
    public function mysql_free_result($results)
    {
        mysql_free_result($results);
    }
    public function _log_error($str)
    {   
        $timeStamp = date("Ydmhis"); 
        $fd = fopen(ROOT."_mysql_err_{$timeStamp}.txt", 'w');
        $out = print_r($str , true);
        fwrite($fd, $out);  
    }
    
    
} //END CLASS