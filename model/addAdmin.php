<?php
    include 'db.php';

    function checkUsername(){
        global $mysqli;
        $command = "SELECT username FROM anggota WHERE username='$_POST[username]'";

        $hasil = $mysqli->query($command);
        if($hasil && $hasil->num_rows > 0){
            return false;
        }else{
            return true;
        }
    }
    
    if(isset($_POST['add'])){
        $usernameNew = $_POST['username'];
        $nameNew = $_POST['name'];
        $emailNew = $_POST['email'];
        $phoneNew = $_POST['phone'];
        $addressNew = $_POST['address'];

        if(!checkUsername()){
            header("Location: ../pages/admin/admList.php?status_Add=2"); //STATUS ADD 2= username udah ada 
        }
        // -------------------------------GENERATE PASSWORD 
        $characters = '0a1q2Ep4hbK56F7ec8L9idUMoxyNgzXAnBCwrfDYTGsvkHItJOhPQujmRlvwsz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for($i= 0 ; $i < 8 ; $i++){
            $randomString .= $characters[rand(0,$charactersLength-1)];
        }
        $passwordNew = $randomString;
        echo " $passwordNew";

        // --------------------------------------

        $sql = "INSERT INTO anggota (username , name , email , password , phone , address ,role) 
                VALUES ('$usernameNew','$nameNew','$emailNew', md5('$passwordNew') , '$phoneNew' ,'$addressNew' , 'admin')";

        $result = $mysqli->query($sql);
        if($result){
            header("Location: ../pages/admin/admList.php?status_Add=1&passwordNew=".$passwordNew); //STATUS ADD 1= admin berhasil di register            
        }
        
        
    }

?>