<?php
  include 'db.php';
 
   $usernameNow = $_POST['username'];
   $passwordNow = md5($_POST['password']);

   $sql = "SELECT * FROM anggota WHERE username='$usernameNow'";

   $result = $mysqli->query($sql);
   if($result && $result->num_rows > 0){
       $row = $result->fetch_array();
        if($passwordNow == $row['password']){
            echo "available";
        }else{
            echo "wrong password";
        }

   }else{
       echo "wrong username";
   }


?>