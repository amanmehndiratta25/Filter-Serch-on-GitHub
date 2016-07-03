<?php
class DB{ // declare DB Class
    protected $connection;
    protected $select_db;
    protected $from;
    protected $where;
    protected $row;
    
    /*<---------------------------------------Close  protected variable  declaration of DB Class---------------------------------->*/
    
    public function __construct( $host, $user, $pass, $dbname ) { // using Constructor for call mysqli function for create a DB Connection 
        
        $this->connection=new mysqli($host, $user, $pass, $dbname);  
        
        if(mysqli_connect_errno()){  
            throw new Exception('Could not be connected'); 
        }
        
        
    }
    
    /*<----------------------------------Close Constructor Function----------------------------->*/
    
    public function query( $sql ) {
        
        if (!$this->connection){
            return false;
        } // Check Connection when false then return false
        
        $result = $this->connection->query($sql);  
        
        if(mysqli_errno( $this->connection ) ){            
            throw new Exception( mysqli_errno( $this->connection ) );
        }
        
        if(is_bool( $result ) ){
            return $result;
        }
        
        
        $data = array();
        while ( $this->row = mysqli_fetch_assoc( $result ) ) {
            $data[] = $this->row; 
            
        }
        
        return $data; // Finally successfully return all fetch data which is store $data[] array variable
    }
    
    /*<---------------------------------------Close Query Function---------------------------------->*/
    
    public function escape($str) {
        
        return mysql_escape_string( $this->connection, $str ); 
      
    }
    
    /*<---------------------------------------Close escape Function---------------------------------->*/
    
    public function select($select){
        
       if($select == '*'){
            $this->select_db = '*'; // when field select is * then set * otherwise set parameter value directly
      }else{
            $this->select_db = $select;  
        }     
    }
    
    /*<---------------------------------------Close select Function---------------------------------->*/
    
    public function from($from){
        
        $this->from= $from;  // set tablename in sqlQuery
    }
    
    /*<---------------------------------------Close from Function---------------------------------->*/
    
    public function where($where){
        $this->where= $where; // set Where condition 
    }
    
    /*<---------------------------------------Close where Function---------------------------------->*/
    
    public function getQuery(){
        $where = '';  
         if($this->where !=''){  // if where condition is not active 
             $where  = " where ".$this->where; 
         }
        return  "select ".$this->select_db." from  ". $this->from.$where; // return all sql query includeing all class member 
    }
    
    /*<---------------------------------------Close getQuery Function---------------------------------->*/
}