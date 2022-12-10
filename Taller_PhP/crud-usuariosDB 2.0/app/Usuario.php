<?php
// Los campos tienen que ser los mismos que los de la base de datos para que se rellenen automáticamente

class Usuario {

    public $id;
    public $first_name;
    public $last_name;	
    public $email;	
    public $gender;
    public $ip_address;
    public $telefono;
    

    
    function __set($name, $value)
   {
    if ( property_exists($this,$name)){
        $this->$name = $value;
    }
   }

   function __get($name)
   {
       if ( property_exists($this,$name)){
           return $this->$name;
       }
   }

}