<?php
require_once 'WebConfig.class.php';
require_once 'clsAlerts.php';
class Model {
    
    	private $username   =" "; 
    	private $password   =" "; 
    	private $name       =" "; 
    	private $uertype    =" "; 
    	private $UserStatus =" "; 
    	public  $dbcon      =" ";
    	var     $SQL	    =" ";	
    	var 	$RS 	    =" "; 
    	var 	$CONFIG	    =" ";
        var 	$clsAlert   =" ";
	
	public function __construct(){
            $this->clsAlert = new CustomAlerts();
	    $this->CONFIG = new db_MySQL();
	    $this->CONFIG->Connect();
	}
	
	public function exeQuery($sql){
		
	    $this->SQL  = $sql;
	    $this->RS   = mysql_query($this->SQL);
	    return $this->RS;
	}
	
	public function getvalueArray(){
		
	    $array =array();
	    while($row  = mysql_fetch_array($this->RS)){
	       $array[] = $row;
	    }
	    return $array;
	}
	            
	public function getvalueRow(){
		
	   $array =array();
	   while($row    = mysql_fetch_row($this->RS)){
	       $array[]  = $row;
	   }
	   return $array;
	}
	
	public function getvalueAssoc(){
		
	  $array =array();
	  while($row    = mysql_fetch_assoc($this->RS)){
	     $array[]   = $row;
	  }
	  return $array;
	}
	
	public function getvalueObject(){
		
	   $array =array();
	   while($row  = mysql_fetch_object($this->RS)){
	      $array[] = $row;
	   }
	   return $array;
	}
	
	public function getrowCheck(){
	    $Count_Row=mysql_num_rows($this->RS);
	    if ($Count_Row>0){
	        return 1;
	    }else {
                $message ="Check Your Username and Password";
                $msgg = $this->clsAlert->showError($message);	        
                return $msgg;
	    }
	    
	}
}
?>
