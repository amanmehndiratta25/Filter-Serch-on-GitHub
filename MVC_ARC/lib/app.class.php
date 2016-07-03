<?php

class App
{
    protected static $router;
    
    public static $db;
    
    /*<---------------------------------------Close  static variable declaration of App Class---------------------------------->*/
    
    public static function getRouter(){
        return self::$router;
    }

    /*<---------------------------------------Close static getRouter Function Declaration---------------------------------->*/
    
    public static function run($uri){
        
        self::$router = new Router($uri);
        
        self::$db = new DB(Config::get('db.hostname'), Config::get('db.username'), Config::get('db.password'), Config::get('db.dbname'));
        
        Lang::load(self::$router->getLanguage());
        
        $controller_class = ucfirst( self::$router->getController() ).'Controller';
        $controller_method = strtolower( self::$router->getMethodPrefix().self::$router->getAction() );
        
      
        $controller_object = new $controller_class();
        
        /*<---------Start if for Check method_exists and Set Values--------->*/
        
        if ( method_exists( $controller_object, $controller_method ) ){
            
            // Controller's action may  a return a view path
            $view_path = $controller_object->$controller_method();
            
            $view_object = new View($controller_object->getData(), $view_path);
            
            $content = $view_object->render();
        }else {
            throw new Exception('Method '. $controller_method.' of class '. $controller_class .'  Does Not Exists');  
        }
        
        /*<---------End if for Check method_exists and Set Values--------->*/
        
        $layout = self::$router->getRoute();
        $layout_path = VIEWS_PATH.DS.$layout.'.html';
        $layout_view_object = new View(compact('content'), $layout_path);
        
        echo $layout_view_object->render(); // Echo render
                
    }
    
    /*<---------------------------------------Close static run Function Declaration---------------------------------->*/
    
    
    public static  function  import($type,$import_name){
            if($type !=''){
                $type = strtolower($type);
                switch ($type){
                    
                    case 'model':
                        $name  =  strtolower($import_name);
                        $real_model  = $name."s";
                        include '../models'.DS.$real_model.".php";
                        break;
                        
                    case 'controller':
                        $name  =  strtolower($import_name);
                        $real_model  = $name;
                        include '../controller'.DS.$real_model.".controller.php";
                        break;
                        
                    case 'helper':
                        $name  =  strtolower($import_name);
                        $real_model  = $name;
                        include '../views/helper'.DS.$real_model."Helper.php";
                        break;
                    
                    default:
                        echo "your query is not valid";
                        break;
                    
                }                
                 
            }         
           
    }
    
    /*<---------------------------------------Close static import Function Declaration for Import file in anywhere---------------------------------->*/
    
    
    public static  function pr($var){ 
            
            $template = PHP_SAPI !== 'cli' ? '<pre class="pr">%s</pre>' : "\n%s\n\n";
            printf( $template, trim( print_r( $var, true) ) );
    }
    
    /*<---------------------------------------Close static pr Function Declaration for Print_r()---------------------------------->*/
        
}


/*<---------------------------------------Close App Class Declaration ---------------------------------->*/

?>