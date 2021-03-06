<?php
require ('C:\xampp\htdocs\eLibrary\model\loginVer.php');
class UnitTesting extends \PHPUnit_Framework_TestCase{
/** @test */
public function unittest1(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=login('dipo',md5('dipo'));
	$expected_result="Location:../pages/user/usr.php";
	$this->assertEquals($actual_result[0]->getUrl(),$expected_result);
}
/** @test */
public function unittest2(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=login('hasrul',md5('hasrul'));
	$expected_result="Location:../pages/admin/adm.php";
	$this->assertEquals($actual_result[0]->getUrl(),$expected_result);
}
/** @test */
public function unittest3(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=login('dipo',md5('dipa'));
	$expected_result="Location:../pages/general/login.php?statusSalah=1";
	$this->assertEquals($actual_result->getUrl(),$expected_result);
}
/** @test */
public function unittest4(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=login('dipa',md5('dipo'));
	$expected_result="Location:../pages/general/login.php?statusSalah=2";
	$this->assertEquals($actual_result->getUrl(),$expected_result);
}
}