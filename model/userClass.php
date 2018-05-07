<?php
    class User{
        public $name ; 
        public $username ; 
        public $id_Anggota;

        function User($name , $username , $id_Anggota){
            $this->name = $name ; 
            $this->username = $username;
            $this->id_Anggota = $id_Anggota;
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
    }


?>