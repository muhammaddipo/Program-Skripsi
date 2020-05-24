<?php
require ('C:\xampp\htdocs\eLibrary\model\updateUser.php');
class UnitTesting extends \PHPUnit_Framework_TestCase{
/** @test */
public function unittest1(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=updateUser(56,'','','3','');
	$expected_result="Location:../pages/general/profile.php?statusUpdate=3";
	$this->assertEquals($actual_result->getUrl(),$expected_result);
}
/** @test */
public function unittest2(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=updateUser(56,'dipo','','','');
	$expected_result="Location:../pages/general/profile.php?statusUpdate=2";
	$this->assertEquals($actual_result->getUrl(),$expected_result);
}
/** @test */
public function unittest3(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=updateUser(56,'','dipo','','');
	$expected_result="Location:../pages/general/profile.php?statusUpdate=2";
	$this->assertEquals($actual_result->getUrl(),$expected_result);
}
/** @test */
public function unittest4(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=updateUser(56,'dipa','dipo','','');
	$expected_result="Location:../pages/general/profile.php?statusUpdate=1";
	$this->assertEquals($actual_result->getUrl(),$expected_result);
}
/** @test */
public function unittest5(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=updateUser(56,'dipo','dipo','1','salendro');
	$expected_result="Location:../pages/general/profile.php?statusUpdate=4";
	$this->assertEquals($actual_result->getUrl(),$expected_result);
}
}