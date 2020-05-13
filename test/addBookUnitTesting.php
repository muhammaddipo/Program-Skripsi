<?php
require ('C:\xampp\htdocs\eLibrary\model\addBook.php');
    class UnitTesting extends \PHPUnit_Framework_TestCase{
        #unit testing untuk add book 
        /** @test */
        public function testAddBook1(){
            require ('C:\xampp\htdocs\eLibrary\model\db.php');
            insertBook('A1','Pelangi','Dipo','2000','DipoInc','2');
            $sql="SELECT Count(id_Book) FROM book where code='A1'";
            $actual_result=$mysqli->query($sql);
            $expected_result=1;
            $this->assertEquals($actual_result->num_rows,$expected_result);
        }
    }

?>