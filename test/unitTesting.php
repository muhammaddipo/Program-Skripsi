<?php
require ('C:\xampp\htdocs\eLibrary\model\signUpUser.php');
require ('C:\xampp\htdocs\eLibrary\model\addBook.php');
require ('C:\xampp\htdocs\eLibrary\model\addAdmin.php');
class UnitTesting extends \PHPUnit_Framework_TestCase{
    public function testCheckUsername(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        $actual_result=checkUsername('hasrul');
        $expected_result=false;
        $this->assertEquals($actual_result,$expected_result);
    }
    
    public function testSignUp(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        signup('dipo',md5('dipo'),'dipo','dipo@gmail.com','dipo','081320903964','salendro');
        $sql="SELECT Count(id_Anggota) FROM anggota where username='dipo'";
        $actual_result=$mysqli->query($sql);
        $expected_result=1;
        $this->assertEquals($actual_result->num_rows,$expected_result);
        session_destroy();
    }

    public function testAddBook(){
        require ('C:\xampp\htdocs\eLibrary\model\db.php');
        insertBook('A1','Petualang','Dipo','2000','DipoInc','2');
        $sql="SELECT Count(id_Book) FROM book where code='A1'";
        $actual_result=$mysqli->query($sql);
        $expected_result=1;
        $this->assertEquals($actual_result->num_rows,$expected_result);
        session_destroy();
    }

    
}