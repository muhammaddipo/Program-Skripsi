<?php
class UnitTesting extends \PHPUnit_Framework_TestCase{
    public function testSignUp(){
        require loginVer.php;
        $actual_result=//cari halaman saat ini;
        $expected_result="usr.php";
        $this->assertEqual($actual_result,$expected_result)
    }
}