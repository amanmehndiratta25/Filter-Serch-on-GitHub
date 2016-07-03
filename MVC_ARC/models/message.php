<?php
class Message extends Model {
    
    public function save( $data, $id=NULL ) {
        if ( !isset( $data['name']) || !isset($data['email']) || !isset($data['message']) ){
            return false;
        }
         
        // Initialize Some Variable
        $id = (int)$id;
        $name = $this->db->escape($data['name']);
        $email = $this->db->escape($data['email']);
        $message = $this->db->escape($data['message']); 
        
        if ( !$id){ // Add a new Record
            $sql= "            
               insert into messages 
                set name='{$name}', 
                    email='{$email}', 
                    message='{$message}'
                ";
        }
        else { // Update existing Record
            $sql= "
               update messages
                set name='{$name}', 
                    email='{$email}',
                    message='{$message}'
                where id= {$id};
                  
            ";
        }
        
        return $this->db->query($sql);
    
    }
}