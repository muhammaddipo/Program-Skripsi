<?php
require_once ('C:\xampp\htdocs\eLibrary\model\signUpUser.php');
require_once ('C:\xampp\htdocs\eLibrary\model\headerPlacing.php');
class UnitTesting extends \PHPUnit_Framework_TestCase{
    public function testSignUp1(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        signup('dipo',md5('dipo'),md5('dipo'),'dipo','dipo@gmail.com','081320903964','salendro timur');
        $sql="SELECT Count(id_Anggota) FROM anggota where username='dipo'";
        $actual_result=$mysqli->query($sql);
        $expected_result=1;
        $this->assertEquals($actual_result->num_rows,$expected_result);
        session_destroy();
    }
    public function testSignUp2(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        $actual_result=signup('dipo',md5('dipa'),md5('dipo'),'dipo','dipo@gmail.com','081320903964','salendro timur');
        $expected_result="Location: ../pages/general/signUp.php?status_SignUp=1";
        $this->assertEquals($actual_result->getUrl(),$expected_result);
        session_destroy();
    }
}
?>