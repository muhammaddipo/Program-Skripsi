<?php
require ('C:\xampp\htdocs\eLibrary\model\signUpUser.php');
class UnitTesting extends \PHPUnit_Framework_TestCase{
/** @test */
public function unittest1(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=signup('dipo',md5('dipo'),md5('dipo'),'dipo','dipo@gmail.com','081320903964','salendro');
	$expected_result="Location:../pages/general/signUp.php?status_SignUp=3";
	$this->assertEquals($actual_result[0]->getUrl(),$expected_result);
}
/** @test */
public function unittest2(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=signup('dipo',md5('dipo'),md5('dipa'),'dipo','dipo@gmail.com','081320903964','salendro');
	$expected_result="Location:../pages/general/signUp.php?status_SignUp=1";
	$this->assertEquals($actual_result->getUrl(),$expected_result);
}
/** @test */
public function unittest3(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	$actual_result=signup('arru',md5('dipo'),md5('dipo'),'dipo','dipo@gmail.com','081320903964','salendro');
	$expected_result="Location:../pages/general/signUp.php?status_SignUp=2";
	$this->assertEquals($actual_result->getUrl(),$expected_result);
}
}