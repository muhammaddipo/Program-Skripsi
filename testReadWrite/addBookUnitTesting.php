<?php
require ('C:\xampp\htdocs\eLibrary\model\addBook.php');
class UnitTesting extends \PHPUnit_Framework_TestCase{
/** @test */
public function unittest1(){
	require ('C:\xampp\htdocs\eLibrary\model\db.php');
	addBook('A1','Pelangi','Dipo','2000','DipoInc','2');
	$sql="SELECT Count(id_book) FROM book where code='A1'";
	$actual_result=$mysqli->query($sql);
	$expected_result=1;
	$this->assertEquals($actual_result->num_rows,$expected_result);
}
}