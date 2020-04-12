<?php
    include 'db.php';

    function checkUsername($username){
        global $mysqli;
        $command = "SELECT username FROM anggota WHERE username='$username'";

        $hasil = $mysqli->query($command);
        if($hasil && $hasil->num_rows > 0){
            return false;
        }else{
            return true;
        }
    }
    
    if(isset($_POST['add'])){
        $usernameNew = $_POST['username'];
        $passwordNew = $_POST['password'];
        $nameNew = $_POST['name'];
        $emailNew = $_POST['email'];
        $phoneNew = $_POST['phone'];
        $addressNew = $_POST['address'];

        addAdmin($usernameNew,$passwordNew,$nameNew,$emailNew,$phoneNew,$addressNew);
    }

    function addAdmin($usernameNew,$passwordNew,$nameNew,$emailNew,$phoneNew,$addressNew){
        include 'db.php';
            if(!checkUsername($usernameNew)){
                header("Location: ../pages/admin/admList.php?status_Add=2"); //STATUS ADD 2= username udah ada 
            }
            // -------------------------------GENERATE PASSWORD 
            // $characters = '0a1q2Ep4hbK56F7ec8L9idUMoxyNgzXAnBCwrfDYTGsvkHItJOhPQujmRlvwsz';
            // $charactersLength = strlen($characters);
            // $randomString = '';
            // for($i= 0 ; $i < 8 ; $i++){
            //     $randomString .= $characters[rand(0,$charactersLength-1)];
            // }
            // $passwordNew = $randomString;
            // echo " $passwordNew";

            // --------------------------------------

            $sql = "INSERT INTO anggota (username , name , email , password , phone , address ,role) 
                    VALUES ('$usernameNew','$nameNew','$emailNew', md5('$passwordNew') , '$phoneNew' ,'$addressNew' , 'admin')";

            $result = $mysqli->query($sql);
            if($result){
                header("Location: ../pages/admin/admList.php?status_Add=1"); //STATUS ADD 1= admin berhasil di register            
            }
        
    }
    

?>