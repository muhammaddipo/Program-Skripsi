<?php
include 'userClass.php';
include 'headerPlacing.php';
if(isset($_POST['login'])){
    include 'libraries.php';
    $usernameNow = $_POST['username'];
    $passwordNow = md5($_POST['password']);
    $_SESSION['user'] = new User($row['username'] , $row['name'] , $row['id_Anggota'] , $row['role']);
    $result=login($usernameNow,$passwordNow);
    header($result->getURL());
}
function login($usernameNow,$passwordNow){
    include 'db.php';
    $sql = "SELECT * FROM anggota WHERE username='$usernameNow'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_array();
    if($result && $result->num_rows > 0){
       //$row = $result->fetch_array();
        if($passwordNow == $row['password']){
            // $_SESSION['user'] = new User($row['name'] , $row['username']);
            // echo $_SESSION['user']->getUsername();
            //$_SESSION['user'] = new User($row['username'] , $row['name'] , $row['id_Anggota'] , $row['role']);
            
            if($row['role']  == 'user'){
                //header("Location: ../pages/user/usr.php");
                return new Redirect("Location: ../pages/user/usr.php");
                exit();
            }else{
                //header("Location: ../pages/admin/adm.php");
                return new Redirect("Location: ../pages/admin/adm.php");
                exit();
            }
        }else{
            //header("Location: ../pages/general/login.php?statusSalah=1");
            return new Redirect("Location: ../pages/general/login.php?statusSalah=1");
            exit();
             //echo "wrong password";
             
        }

   }else{
    //header("Location: ../pages/general/login.php?statusSalah=2");
    return new Redirect("Location: ../pages/general/login.php?statusSalah=2");
    exit();
    //   echo "wrong username";
   }
}

?>  