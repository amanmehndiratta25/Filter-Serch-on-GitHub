<?php
App::import('Model','Page');

class PagesController extends Controller{
     
     
    public function __construct( $data = array() ){
        parent::__construct($data);
        //$this->loadModel('Page');
        $this->model = new Page();
    }
    
    
    public function index(){
       
        
    }
    
    public function view(){
       /*  $params = App::getRouter()->getParams();
        
        if( isset($params[0] )){
            $alias=strtolower($params[0]);
            $this->data['page'] = $this->model->getByAlias($alias);
        } */
    } 
    
    public function about(){
        
        
    }
    
    public function help(){
       
    
    }
    
    public function services(){
     
    }

    public function contactus(){
        
    
    }
    
    public function gallery(){
       
    
    }
    
    
}

?>