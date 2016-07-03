<?php

require_once(SITEPATH.DS.'config'.DS.'config.php'); 
    
    /*<---------------------------------------Start __autoload Function declaration ---------------------------------->*/
    
    function __autoload($class_name) {  // declare $x class 
       
       $lib_path = SITEPATH.DS.'lib'.DS.strtolower($class_name).'.class.php';
        
       $controllers_path = SITEPATH.DS.'controllers'.DS.str_replace('controller', '', strtolower($class_name)).'.controller.php'; 
       
       $model_path = SITEPATH.DS.'models'.DS.strtolower($class_name).'.php'; 
       
       /*<---------Start if for Check file_exists and Set Values--------->*/
        if(file_exists($lib_path)){
            
            require_once ("$lib_path"); // Call $lib_path variable
        }
        elseif (file_exists($controllers_path)){
            
            require_once ("$controllers_path"); // Call $controllers_path variable
        }
        elseif (file_exists($model_path)){
            
            require_once ("$model_path");  // Call $model_path variable
        }
        else {
            
            throw new Exception('Failed to include class :'.$class_name);
        }
        /*<---------END if for Check file_exists and Set Values--------->*/
    }
    
    /*<---------------------------------------End __autoload Function declaration---------------------------------->*/
    
     function __($key, $default_value = ""){
        return Lang::get($key, $default_value);   
    }
    
    /*<---------------------------------------Close __($key, $default_value = "") Function---------------------------------->*/

?>