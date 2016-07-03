<?php

class CommonHelper extends Helper
{
    public function __construct($data = array() ) {
       parent::__construct($data);
       $this->model = new Page();
    }
    
    function getMenu(){
       $rs =  $this->model->getList();
       return $rs;
    }
}

?>