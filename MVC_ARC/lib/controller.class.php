<?php

class Controller
{
    protected $data;
    
    protected $model;
    
    protected $params;
    
    /*<---------------------------------------Close  protected variable  declaration of Controller Class---------------------------------->*/
    
    public function getData(){
        return $this->data;
    }
    
    /*<---------------------------------------Close getData Function Declaration---------------------------------->*/
    
    public function getModel(){
        return $this->model;
    }
    
    /*<---------------------------------------Close getModel Function Declaration---------------------------------->*/
    
    public function getParams(){
        return $this->params;
    }
    
    /*<---------------------------------------Close getParams Function Declaration---------------------------------->*/
    
    public function __construct( $data=array() ) {
        $this->data = $data;
        $this->params = App::getRouter()->getParams();
    }
    
    function loadModel($model){
        $name  =  strtolower($model);
        $real_model  = $name."s";
        include '../models/'.$real_model.".php";
        
    }
    /*<---------------------------------------Close Constructor Function Declaration---------------------------------->*/
}

?>