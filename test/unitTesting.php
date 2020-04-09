<?php
require ('C:\xampp\htdocs\eLibrary\model\db.php');
require ('C:\xampp\htdocs\eLibrary\model\signUpUser.php');
class UnitTesting extends \PHPUnit_Framework_TestCase{
    public function testSignUp(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        signup('dipo','dipo','dipo','dipo@gmail.com','dipo','081320903964','salendro');
        $sql="SELECT Count(id_Anggota) FROM anggota where username='dipo'";
        $actual_result=$mysqli->query($sql);
        $expected_result=1;
        $this->assertEquals($actual_result->num_rows,$expected_result);
    }
}