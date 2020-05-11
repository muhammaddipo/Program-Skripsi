<?php

    class Redirect{
        public $url="";

        function Redirect($url){
            $this->url=$url;
        }

        function getUrl(){
            return $this->url;
        }
    }

?>