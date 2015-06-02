<?php

class SignupModel {
    
    private $id;
    private $username;
    private $email;
    private $password;
    private $created;
    private $admin;
    private $active;
       
    function getId() {
        return $this->id;
    }
    
    function getUserName(){
        return $this->username;
    }
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getCreated() {
        return $this->created;
    }
    
    function getAdmin() {
        return $this->admin;
    }

    function getActive() {
        return $this->active;
    }

    function setId($id) {
        $this->id = $id;
    }
    
    function setUserName(){
        $this->username;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setCreated($created) {
        $this->created = $created;
    }
    
    function setAdmin($admin) {
        $this->admin = $admin;
    }

    function setActive($active) {
        $this->active = $active;
    }

    
    public function map(array $values) {
        
        foreach ($values as $key => $value) {
           $method = 'set' . $key;
            if ( method_exists($this, $method) ) {
                $this->$method($value);
            }       
        } 
        return $this;
    }
    
    public function reset() {
        
        $class_methods = get_class_methods($this);

        foreach ($class_methods as $method_name) {
           if ( strrpos($method_name, 'set', -strlen($method_name)) !== FALSE ) {
               $this->$method_name('');
           }
            
        } 
         return $this;
    }

}