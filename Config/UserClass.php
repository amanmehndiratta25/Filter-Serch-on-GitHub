<?php 
class User  extends Controller{ 
    public function __construct(){

        parent::__construct();
    } 
    public function checkUser($user,$pass){

        $sql  =  "SELECT * FROM user_info where uname='$user' and upass='$pass' "; 
        $this->DB->exeQuery($sql);
        $data['row'] = $this->DB->getvalueAssoc();        
        $data['final_rs']= $this->DB->getrowCheck();        
        return $data; 
    } 
    public function logout(){                                   
       unset($_SESSION['userActive']);
       session_unset(); 
       session_destroy();
       $msgg ="Successfully LogOut";
       return $msgg;
    } 
}
