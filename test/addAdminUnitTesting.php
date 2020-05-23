<?php
require ('C:\xampp\htdocs\eLibrary\model\addAdmin.php');
    class UnitTesting extends \PHPUnit_Framework_TestCase{
        // #unit testing untuk check username sudah dipakai apa belum
        // public function testAddAdmin1(){
        //     require ('C:\xampp\htdocs\eLibrary\model\db.php');
        //     $actual_result=checkUsername('hasrul');
        //     $expected_result=false;
        //     $this->assertEquals($actual_result,$expected_result);
        // }
        #unit tetsing untuk check apakah fungsi add admin bisa dilakukan
        public function testAddAdmin1(){
            require ('C:\xampp\htdocs\eLibrary\model\db.php');
            addAdmin('nida',md5('nida'),'nida','nida@gmail.com','080808080','bandung');
            $sql="SELECT Count(id_anggota) FROM anggota where username='nida'";
            $actual_result=$mysqli->query($sql);
            $expected_result=1;
            $this->assertEquals($actual_result->num_rows,$expected_result);
        }
        #unit testing kalau username admin sudah terpakai
        public function testAddAdmin2(){
            require ('C:\xampp\htdocs\eLibrary\model\db.php');
            $actual_result=addAdmin('hasrul',md5('dipo'),'dipo','dipo@gmail.com','081320903964','salendro');
            $expected_result="Location: ../pages/admin/admList.php?status_Add=2";
            $this->assertEquals($actual_result->getUrl(),$expected_result);
        }
        public function testAddAdmin3(){
            require ('C:\xampp\htdocs\eLibrary\model\db.php');
            $actual_result=checkUsername('hasrul');
            $expected_result=false;
            $this->assertEquals($actual_result,$expected_result);
        }
    }

?>