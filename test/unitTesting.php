<?php
require ('C:\xampp\htdocs\eLibrary\model\signUpUser.php');
require ('C:\xampp\htdocs\eLibrary\model\addBook.php');
require ('C:\xampp\htdocs\eLibrary\model\addAdmin.php');
require ('C:\xampp\htdocs\eLibrary\model\updateUser.php');
class UnitTesting extends \PHPUnit_Framework_TestCase{
    public function testCheckUsername(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        $actual_result=checkUsername('hasrul');
        $expected_result=false;
        $this->assertEquals($actual_result,$expected_result);
    }
    
 

    public function testAddBook(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        insertBook('A1','Petualang','Dipo','2000','DipoInc','2');
        $sql="SELECT Count(id_Book) FROM book WHERE code='A1'";
        $actual_result=$mysqli->query($sql);
        $expected_result=1;
        $this->assertEquals($actual_result->num_rows,$expected_result);
        session_destroy();
    }

    public function updateUser(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        updateUser(33,'','','081320903964','');
        $sql="SELECT phone FROM anggota WHERE id_Anggota=33";
        $actual_result=$mysqli->query($sql);
        $expected_result='081320903964';
        $this->assertEquals($actual_result,$expected_result);
        session_destroy();
    }
}