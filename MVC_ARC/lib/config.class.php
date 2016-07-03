<?php

class Config
{
    protected  static $settings = array();   // declare array() :  static $settings    
    
    /*<---------------------------------------Close protected static member variable Declaration name $settings ---------------------------------->*/
    
    public static function get($key) {  
        return  isset(self::$settings[$key]) ? self::$settings[$key] : NULL; // return $key values in the $settings array
    }
    
    /*<---------------------------------------Close get Function Declaration of Config Class---------------------------------->*/
    
    public static function set($key,$value) { 
        self::$settings[$key]=$value;      
    }
    
    /*<---------------------------------------Close set Function Declaration of Config Class---------------------------------->*/
}

?>