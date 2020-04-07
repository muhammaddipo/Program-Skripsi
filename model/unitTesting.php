<?php
include 'db.php';
require 'signUpUser.php';
class UnitTesting extends \PHPUnit_Framework_TestCase{
    public function testSignUp(){
        signup('dipo','dipo','dipo','dipo@gmail.com','dipo','081320903964','salendro');
        $sql="SELECT Count(id_Anggota) FROM anggota where username='dipo'";
        $actual_result=$mysqli->query($sql);
        $expected_result=1;
        $this->assertEqual($actual_result,$expected_result);
    }
}