<?php

class Helper
{
    protected $db;
    
    
    
    public function __construct( ) {
        $this->db = App::$db;
    
    }
}

?>