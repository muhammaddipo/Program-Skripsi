<?php
include 'userClass.php';
include 'headerPlacing.php';
include 'libraries.php';
if(isset($_POST['login'])){
    
    $usernameNow = $_POST['username'];
    $passwordNow = md5($_POST['password']);
    $result=login($usernameNow,$passwordNow);
    if(is_array($result)){
        header($result[0]->getURL());
        $_SESSION['user'] = $result[1];
    }
    else if(!is_array($result)){
        header($result->getURL());
    }

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
                return [new Redirect("Location:../pages/user/usr.php"),new User($row['username'] , $row['name'] , $row['id_Anggota'] , $row['role'])];
                exit();
            }else{
                //header("Location: ../pages/admin/adm.php");
                
                return [new Redirect("Location:../pages/admin/adm.php"),new User($row['username'] , $row['name'] , $row['id_Anggota'] , $row['role'])];
                exit();
            }
        }else{
            //header("Location: ../pages/general/login.php?statusSalah=1");
            return new Redirect("Location:../pages/general/login.php?statusSalah=1");
             //echo "wrong password";
             exit();
        }

   }else{
    //header("Location: ../pages/general/login.php?statusSalah=2");
    return new Redirect("Location:../pages/general/login.php?statusSalah=2");
    exit();
    //   echo "wrong username";
   }
}

?>  