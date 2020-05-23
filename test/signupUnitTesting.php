<?php
require_once ('C:\xampp\htdocs\eLibrary\model\signUpUser.php');
require_once ('C:\xampp\htdocs\eLibrary\model\headerPlacing.php');
class UnitTesting extends \PHPUnit_Framework_TestCase{
    #unit testing signup
    public function testSignUp1(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        $actual_result=signup('dipo',md5('dipo'),md5('dipo'),'dipo','dipo@gmail.com','081320903964','salendro');
        $expected_result="Location:../pages/general/signUp.php?status_SignUp=3";
        $this->assertEquals($actual_result[0]->getUrl(),$expected_result);

    }
    #unit testing kalau signup password beda sama confirm password
    public function testSignUp2(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        $actual_result=signup('dipo',md5('dipa'),md5('dipo'),'dipo','dipo@gmail.com','081320903964','salendro timur');
        $expected_result="Location:../pages/general/signUp.php?status_SignUp=1";
        $this->assertEquals($actual_result->getUrl(),$expected_result);

    }
    #unit testing kalau username sudah dipakai
    public function testSignUp3(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        $actual_result=signup('arru',md5('dipo'),md5('dipo'),'dipo','dipo@gmail.com','081320903964','salendro timur');
        $expected_result="Location:../pages/general/signUp.php?status_SignUp=2";
        $this->assertEquals($actual_result->getUrl(),$expected_result);

    }
}
?>