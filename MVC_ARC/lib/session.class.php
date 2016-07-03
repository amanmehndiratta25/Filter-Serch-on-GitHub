<?php

class Session
{
    protected static $flash_message="";
    
    function __construct(){
        
    }
    
    public static  function setFlash($message){
        self::$flash_message = $message;
    }
    
    public  static function hasFlash(){
        return !is_null(self::$flash_message);
    }
    
    public  static function Flash(){
       echo self::$flash_message;
       self::$flash_message = NULL;
    }
}

?>