<?php
require ('C:\xampp\htdocs\eLibrary\model\updateUser.php');
    class UnitTesting extends \PHPUnit_Framework_TestCase{
        #unit testing update user berhasil tanpa update password
        /** @test */
        public function TestUpdateUser1(){
            require ('C:\xampp\htdocs\eLibrary\model\db.php');
            $actual_result=updateUser(56,'','','3','');
            $expected_result="Location: ../pages/general/profile.php?statusUpdate=3";
            $this->assertEquals($actual_result->getUrl(),$expected_result);
        }
        #unit testing jika password di isi tapi confirm password tidak
        /** @test */
        public function TestUpdateUser2(){
            require ('C:\xampp\htdocs\eLibrary\model\db.php');
            $actual_result=updateUser(56,'dipo','','','');
            $expected_result="Location: ../pages/general/profile.php?statusUpdate=2";
            $this->assertEquals($actual_result->getUrl(),$expected_result);
        }
        #unit testing jika password tidak di isi tapi confirm password iya
        /** @test */
        public function TestUpdateUser3(){
            require ('C:\xampp\htdocs\eLibrary\model\db.php');
            $actual_result=updateUser(56,'','dipo','','');
            $expected_result="Location: ../pages/general/profile.php?statusUpdate=2";
            $this->assertEquals($actual_result->getUrl(),$expected_result);
        }
        #unit testing jika password dan confirm pasword beda
        /** @test */
        public function TestUpdateUser4(){
            require ('C:\xampp\htdocs\eLibrary\model\db.php');
            $actual_result=updateUser(56,'dipa','dipo','','');
            $expected_result="Location: ../pages/general/profile.php?statusUpdate=1";
            $this->assertEquals($actual_result->getUrl(),$expected_result);
        }
        #unit testing jika semua kolom di isi
        /** @test */
        public function TestUpdateUser5(){
            require ('C:\xampp\htdocs\eLibrary\model\db.php');
            $actual_result=updateUser(56,'dipo','dipo','1','salendro timur');
            $expected_result="Location: ../pages/general/profile.php?statusUpdate=4";
            $this->assertEquals($actual_result->getUrl(),$expected_result);
        }
    }
?>