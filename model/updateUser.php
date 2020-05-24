<?php
    include 'userClass.php';
    include 'libraries.php';
    include 'headerPlacing.php';
    // BIKIN CONVENTION SENDIRI
    //

    if(isset($_POST['submit'])){
        // if(!$_POST['password'] && !$_POST['confirm_Password']&& !$_POST['phone']&& !$_POST['address']){
        //         header("Location: ../pages/general/profile.php");
        // }
        $user=$_SESSION['user']->getId();
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_Password'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];

        $result=updateUser($user,$password,$confirm_password,$phone,$address);
        header($result->getURL());
    }
    function updateUser($user,$password,$confirm_password,$phone,$address){
        include 'db.php';
        $count = 0 ;
        $sql = "UPDATE anggota SET ";
        $pass = false; //buat cek ternyata mau update 
        //cek password
        if($password){
                if(!$confirm_password){
                    //header("Location: ../pages/general/profile.php?statusUpdate=1");
                    return new Redirect("Location:../pages/general/profile.php?statusUpdate=2");
                    exit(); // 1: dua duanya ga diisi
                }
        }
        //cek confirm password
        if($confirm_password){
            if(!$password){
                //header("Location: ../pages/general/profile.php?statusUpdate=1"); //1: salah satu dari password dan confirm password ga diisi 
                return new Redirect("Location:../pages/general/profile.php?statusUpdate=2");
                exit();
            }
            
            if($confirm_password != $password){
                    //header("Location: ../pages/general/profile.php?statusUpdate=2"); //2: password sama confirmed password ga sama       
                    return new Redirect("Location:../pages/general/profile.php?statusUpdate=1");
                    exit();        
            }else{
                    $sql.= "password=md5('$password') ";
                    $pass = true;
                    $count++;
            }
        }
        // cek phone
        if($phone){
            if($count > 0){
                $sql.= ", phone= '$phone' ";
                $count++;
                
            }else{
                $sql.= " phone= '$phone' ";
                $count++;
                
            }
        }
        //cek address
        if($address){
            if($count > 0){
                $sql.= ", address= '$address' ";
                $count++;
            }else{
            $sql.= "address= '$address' ";
            $count++;
                
            }
        }

        $sql.="WHERE id_Anggota=$user";
        $result = $mysqli->query($sql);
        if($result){
            //statusUpdate = 3 artinya berhasil update selain update password
            //statusUpdate = 4 artinya berhasil update password juga 
            if($pass){
                //header("Location: ../pages/general/profile.php?statusUpdate=4");
                return new Redirect("Location:../pages/general/profile.php?statusUpdate=4");
                exit();
                
            }else{
                //header("Location: ../pages/general/profile.php?statusUpdate=3");
                return new Redirect("Location:../pages/general/profile.php?statusUpdate=3");
                exit();
            }
        }
    }
?>