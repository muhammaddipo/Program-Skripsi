<?php
include 'headerPlacing.php';
include 'userClass.php';
include 'libraries.php';
if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $confirm_password=md5($_POST['confirm_Password']);
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];

      $result=signup($username,$password,$confirm_password,$name,$email,$phone,$address);
      if(is_array($result)){
        header($result[0]->getURL());
        $_SESSION['user'] = $result[1];
      }
      else if(!is_array($result)){
          header($result->getURL());
      }
}
function signup($username,$password,$confirm_password,$name,$email,$phone,$address){
  include 'db.php';
      if($password != $confirm_password){
        // echo "$_POST[password]  $_POST[confirm_Password]";
        // header("Location: ../pages/general/signUp.php?status_SignUp=1"); // 1 artinya password sama confirm ga sama 
        // exit();
        return new Redirect("Location:../pages/general/signUp.php?status_SignUp=1");
        exit();
        }
    
      $checkUsr = "SELECT username FROM anggota WHERE username='$username'";
      $hasil =   $mysqli->query($checkUsr); 

      if($hasil->num_rows == 1){
        return new Redirect("Location:../pages/general/signUp.php?status_SignUp=2");// 2 username sudah tersedia di database 
        exit();
      }

      $sql = "INSERT INTO anggota (username , password , name , email , phone , address , role) 
                VALUES ('$username' ,  '$password' , '$name' , '$email' , '$phone' , '$address' ,'user')";

      $result = $mysqli->query($sql);
      if($result){

            $sql2 = "SELECT * FROM anggota WHERE username='$username'";
            $result2 = $mysqli->query($sql2);

            if($result2 && $result2->num_rows > 0){
                $row2 = $result2->fetch_array();
                $id = $row2['id_Anggota'];
            }

            
            //$_SESSION['user'] = new User($name , $username , $id , 'user');
            // echo $_SESSION['user']->getUsername()." <br> ".$_SESSION['user']->getName()." <br>". $_SESSION['user']->getId();
            return [new Redirect("Location:../pages/general/signUp.php?status_SignUp=3"), new User($name , $username , $id , 'user')]; // 3 artinya berhasil sign up bakal munculin modal 
            exit();
      }
  }
?>