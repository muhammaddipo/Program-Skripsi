<?php
if(isset($_POST['login'])){
    login();
}
function login(){
  include 'db.php';
  include 'userClass.php';
  session_start();
 
   $usernameNow = $_POST['username'];
   $passwordNow = md5($_POST['password']);

   $sql = "SELECT * FROM anggota WHERE username='$usernameNow'";

   $result = $mysqli->query($sql);
   if($result && $result->num_rows > 0){
       $row = $result->fetch_array();
        if($passwordNow == $row['password']){
            // $_SESSION['user'] = new User($row['name'] , $row['username']);
            // echo $_SESSION['user']->getUsername();
            $_SESSION['user'] = new User($row['username'] , $row['name'] , $row['id_Anggota'] , $row['role']);
            
            if($row['role'] == 'user'){
                header("Location: ../pages/user/usr.php");
            }else{
                header("Location: ../pages/admin/adm.php");
            }
        }else{
            header("Location: ../pages/general/login.php?statusSalah=1");
            // echo "wrong password";
        }

   }else{
    header("Location: ../pages/general/login.php?statusSalah=2");
    //   echo "wrong username";
   }
}

?>  