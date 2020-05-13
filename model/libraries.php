<?php

session_start();

$mysqli = new mysqli("localhost" , "root" , "" , "elibrary");
if($mysqli->connect_errno){
    echo "Failed to connect to MySQL: (".
                $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{

    // echo "Successfully connected";
}
?>
