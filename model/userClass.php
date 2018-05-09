<?php
    class User{
        public $name ; 
        public $username ; 
        public $id_Anggota;
        public $role; 

        function User($name , $username , $id_Anggota , $role){
            $this->name = $name ; 
            $this->username = $username;
            $this->id_Anggota = $id_Anggota;
            $this->role = $role;
        }

        function getName(){
            return $this->name ; 

        }

        function getUsername(){
            return $this->username;
        }

        function getId(){
            return $this->id_Anggota;
        }

        function getRole(){
            return $this->role;
        }
    }


?>