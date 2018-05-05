<?php
    class User{
        public $name ; 
        public $username ; 

        function User($name , $username){
            $this->name = $name ; 
            $this->username = $username;
        }

        function getName(){
            return $this->name ; 

        }

        function getUsername(){
            return $this->username;
        }
    }


?>