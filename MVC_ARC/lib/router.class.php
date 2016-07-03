<?php

class Router // declare Router class 
{
    protected $uri;  // all member variables is declare is protected of Route Class
    
    protected $controller;
    
    protected $action;
    
    protected $params;
    
    protected $route;
    
    protected $method_prefix;
    
    protected $language;
    
    /*<---------------------------------------Close variable declaration of Route Class---------------------------------->*/
    
    public function getUri() { // getUri use for  the set URl path
        
        return $this->uri;
    }
    
    /*<---------------------------------------Close getUri Function Declaration---------------------------------->*/
    
    public function getController() { //  getController use for  the set controller
        
        return $this->controller;
    }
    
    /*<---------------------------------------Close getController Function Declaration---------------------------------->*/
    
    public function getAction() { //  getAction  use for  the set action
        
        return $this->action;
    }
    
    /*<---------------------------------------Close getAction Function Declaration---------------------------------->*/
    
    public function getParams() {  //  getParams use for  the set params
        
        return $this->params;
    }
    
    /*<---------------------------------------Close getParams Function Declaration---------------------------------->*/
    
    public function getRoute() { //  getRoute use for  the set route
        
        return $this->route;
    }
    
    /*<---------------------------------------Close getRoute Function Declaration---------------------------------->*/
    
    public function getMethodPrefix() { // methodPrefix use for  the set method_prefix
        
        return $this->method_prefix;
    }
    
    /*<---------------------------------------Close getMethodPrefix Function Declaration---------------------------------->*/
    
    public function getLanguage() { //  language use for  the set  language
        
        return $this->language;
    }
    
    /*<---------------------------------------Close getLanguage Function Declaration---------------------------------->*/
    
    
    /*<---------------------------------------Start Constructor Function Declaration of Route lass---------------------------------->*/
    
    public function __construct($uri){ 
        
        $this->uri=urldecode(trim($uri,'/')); 
        // Get Defaults route path  
        $routes = Config::get('routes'); 
        
        $this->route = Config::get('default_route'); 
        $this->method_prefix = isset( $routes[$this->route]) ? $routes[$this->route] : '';  
        $this->language = Config::get('default_language'); 
        $this->controller = Config::get('default_controller'); 
        $this->action = Config::get('default_action'); 
       
       
        $uri_parts = explode('?', $this->uri);  
        
        //Get Path  like  /lng/controller/action/param1/param2/.../.../
        
        /*<---------Start if for Check Server Type and Set Values--------->*/
        if($_SERVER['HTTP_HOST'] =='localhost' || $_SERVER['HTTP_HOST']=='127.0.0.0' ){ 
             
             // Local Configuration
             $path = $uri_parts[0];
             $req_uri =  explode("/",$_SERVER['REQUEST_URI']);
             $replace_uri  =  isset($req_uri[1])?$req_uri[1]:'';
             $path =  str_replace($replace_uri,'', $path);
             $path_parts = explode('/', $path);
             unset($path_parts[0]);
         
        }else{
             
             // Server Configuration             
             $path = $uri_parts[0];
             $path_parts = explode('/', $path);             
        }
         /*<---------End if for Check Server Type and Set Values--------->*/
         
        /*<---------Start if for count($path_parts) and Set Values--------->*/
        if (count($path_parts)){
            
                // For the Get route or language at first element            
                if( in_array( strtolower( current( $path_parts ) ), array_keys($routes) ) ){
                    
                    $this->route = strtolower( current( $path_parts ) ); 
                    $this->method_prefix = isset($routes[$this->route]) ? $routes[$this->route] : '';
                    array_shift($path_parts);
                    
                }elseif ( in_array( strtolower( current($path_parts) ), Config::get('languages') ) ) {
                     
                    $this->language = strtolower(current($path_parts));
                    array_shift($path_parts);
                }            
                            
                // For the Get controller -next element of Array            
                if ( current($path_parts) ){
                   
                    $this->controller = strtolower(current($path_parts));
                    array_shift($path_parts);
                }
                
                // For the Get action -next element of Array
                
                if ( current($path_parts) ){
                    $this->action = strtolower(current($path_parts));
                    array_shift($path_parts);
                }
                
                // For the Get params - all the rest
                $this->params = $path_parts;
            
        }
        /*<---------End if for count($path_parts) and Set Values--------->*/
       
    }
    
    /*<---------------------------------------Close Query Class---------------------------------->*/
}

?>