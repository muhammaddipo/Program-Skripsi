<?php
    include 'db.php';
    include 'userClass.php';
    session_start();

    // BIKIN CONVENTION SENDIRI
    //
    
    $count = 0 ;

    if(isset($_POST['submit'])){
        // if(!$_POST['password'] && !$_POST['confirm_Password']&& !$_POST['phone']&& !$_POST['address']){
        //         header("Location: ../pages/general/profile.php");
        // }
        $sql = "UPDATE anggota SET ";
        $pass = false; //buat cek ternyata mau update 
      
        //cek password
       if($_POST['password']){
            
            if(!$_POST['confirm_Password']){
                header("Location: ../pages/general/profile.php?statusUpdate=1"); // 1: dua duanya ga diisi
            }
       }
       //cek confirm password
       if($_POST['confirm_Password']){
           if(!$_POST['password']){
               header("Location: ../pages/general/profile.php?statusUpdate=1"); //1: salah satu dari password dan confirm password ga diisi 
           }
           
           if($_POST['confirm_Password'] != $_POST['password']){
                header("Location: ../pages/general/profile.php?statusUpdate=2"); //2: password sama confirmed password ga sama               
           }else{
                $sql.= "password=md5('$_POST[password]') ";
                $pass = true;
                $count++;
           }
       }
       // cek phone
       if($_POST['phone']){
           if($count > 0){
             $sql.= ", phone= $_POST[phone] ";
            $count++;
             
           }else{
            $sql.= " phone= $_POST[phone] ";
            $count++;
               
           }
       }
       //cek address
       if($_POST['address']){
        if($count > 0){
            $sql.= ", address= '$_POST[address]' ";
            $count++;
          }else{
           $sql.= " address= '$_POST[address]' ";
           $count++;
              
          }
       }

       $sql.="WHERE id_Anggota=".$_SESSION['user']->getId();
       echo "$sql";
       $result = $mysqli->query($sql);
       if($result){
           //statusUpdate = 3 artinya berhasil update selain update password
           //statusUpdate = 4 artinya berhasil update password juga 
           if($pass){
            header("Location: ../pages/general/profile.php?statusUpdate=4");
            
           }else{
               header("Location: ../pages/general/profile.php?statusUpdate=3");

           }
       }
       


    }
?>