<?php
// Class JSON for Encrypted data
Class JsonClass{
	
    	var $dbname	=	" ";    
		var $dbhost	=	" ";    
		var $dbuser	=	" ";    
		var $dbpass	=	" ";
		
    		public function __Construct() {
	    
				define("SITEURL","http://".$_SERVER['HTTP_HOST']."/Filter_Search/");
				
				$db_val                           	 =  file_get_contents(SITEURL.'Config/db_ini.json');
				$array_json                      	 =  json_decode($db_val);
				$this->dbhost     =   $dbhost    	 =  base64_decode($array_json->host_name); // host_name JSON KEY
				$this->dbname     =   $dbname   	 =  base64_decode($array_json->db_name); // db_name JSON KEy
				$this->dbuser     =   $dbuser    	 =  base64_decode($array_json->user_name);// user_name JSON KEY
				$this->dbpass     =   $dbpass    	 =  base64_decode($array_json->password);// password JSON KEY
    }
// Close JSON Class    
}
// Class WebConfig extends JsonClass
class WebConfig extends JsonClass {       
  
		public function __Construct() {
			
				parent::__construct();
				
				define("IMG_PATH"		        ,	    SITEURL."/images/"	 );
				define("CSS_PATH"		        ,	    SITEURL."/css/"	     );
				define("JS_PATH"		        ,	    SITEURL."/js/"	     );
				define("AJAX_PATH"		        ,	    SITEURL."/ajax/"	 );
				define("CPANEL"		            ,	    SITEURL."/Config/"	 );
				define('MYSQLAPPNAME'		    ,	    'MySQL_class'	     );
				define('MYSQLDB_ADMINEMAIL'	    ,	    'php.net@outlook.in' );
				define('MYSQLDB_CHARACTERSET'   ,	    'utf8'		         );
				define('MYSQLDB_TIME_NAMES'     ,	    'de_DE'		         );
				define('DBOF_DEBUGOFF'		    ,	    (1 << 0)		     );
				define('DBOF_DEBUGSCREEN'	    ,	    (1 << 1)		     );
				define('DBOF_DEBUGFILE'         ,	    (1 << 2)		     );
				define('DBOF_SHOW_ALL_ERRORS'   ,	    1			         );
				define('DB_ERRORMODE'		    ,	    DBOF_SHOW_ALL_ERRORS );
				define('DBOF_SHOW_NO_ERRORS'	,	    0			         );
				define('DBOF_RETURN_ALL_ERRORS' ,	    2			         );
				define('MYSQLDB_SENTMAILONERROR',	    0			         );
				define('MYSQLDB_USE_PCONNECT'	,	    1			         );
				define("MYSQLDB_PORT"		    ,	    3306		         );
				define("MYSQLDB_DATABASE"	    ,	    $this->dbname	     );
				define("MYSQLDB_USER"		    ,	    $this->dbuser	     );
				define("MYSQLDB_PASS"		    ,	    $this->dbpass	     );
				define("MYSQLDB_HOST"		    ,	    $this->dbhost	     );
				define("SNAME"		            ,	    'HELPWEBTECH.COM'	 );				
				define("SESSION_NAME"		    ,	    SNAME       	     );
				session_start();
				error_reporting(0);
				ob_start(); 
		}
// Close 	WebConfig Class	
}
$connection_create = new WebConfig();
include("mysql.class.php");
