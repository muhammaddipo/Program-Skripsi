<?php
 include 'db.php';
 session_start();

 if(isset($_POST['submit'])){
     if($_POST['password'] != $_POST['confirm_Password']){
         header("Location: ../pages/general/signUp.php?status_SignUp=1"); // 1 artinya password sama confirm ga sama 
      }

      $checkUsr = "SELECT username FROM anggota WHERE username='$_POST[username]'";
      $hasil =   $mysqli->query($checkUsr);

      if($hasil->num_rows == 1){
         header("Location: ../pages/general/signUp.php?status_SignUp=2"); // 2 username sudah tersedia di database 
            
      }


      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];

      echo "$username <br> $password <br> $name <br> $email <br> $phone <br> $address";

      $sql = "INSERT INTO anggota (username , password , name , email , phone , address) 
                VALUES ('$username' ,  '$password' , '$name' , '$email' , '$phone' , '$address')";

      $result = $mysqli->query($sql);
      if($result){
            include 'userClass.php';
            $_SESSION['user'] = new userClass($name , $username);

            echo "$_SESSION[user]->username";
            // header("Location: ../pages/general/signUp.php?status_SignUp=3"); // 3 artinya berhasil sign up bakal munculin modal 
      }
    }
 



?>