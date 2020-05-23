<?php
$fileRead = fopen("C:\\xampp\\htdocs\\eLibrary\\scenario\\signup.txt",'r');
$fileWrite = fopen(__DIR__ . "/signupUnitTesting.php",'w');
fwrite($fileWrite,"<?php\n");
$banyakTest=1;
$feature="";
$method="";
$username="";
$password="";
$page="";
$status="";
$confirm_password="";
$email="";
$name="";
$phone="";
$address="";
if ($fileRead) {
    while (($line = fgets($fileRead)) !== false) {
        $words = preg_split('/\s+/',$line,-1,PREG_SPLIT_NO_EMPTY);
        for($i=0;$i<count($words);$i++){
            if($words[$i]=="Feature:"){
                $words[$i+1]=$words[$i+1];
                fwrite($fileWrite,"require ('C:\\xampp\\htdocs\\eLibrary\\model\\".$words[$i+1].".php');\n");
                fwrite($fileWrite,"class UnitTesting extends \\PHPUnit_Framework_TestCase{");
            }
            if($words[$i]=="Scenario:"){
                fwrite($fileWrite,"\n/** @test */\n");
                fwrite($fileWrite,"public function unittest".$banyakTest."(){\n");
                fwrite($fileWrite,"\trequire ('C:\\xampp\\htdocs\\eLibrary\\model\\db.php');");
                $banyakTest=$banyakTest+1;
                fwrite($fileWrite,"\n");
                $status=$words[$i+2];
                
            }
            
            if($words[$i]=="When"){
                for($j=0;$j<count($words);$j++){
                    if($words[$j]=="tombol"){
                        $method=$words[$j+1];
                    }
                }
            }
            if($words[$i]=="username"){
                $username=$words[$i+2];
            }
            if($words[$i]=="password" && $words[$i-1]!="confirm"){
                $password=$words[$i+2];
            }
            if($method=="signup"){
                if($words[$i]=="confirm" && $words[$i+1]=="password"){
                    $confirm_password=$words[$i+3];
                    
                }
                if($words[$i]=="email"){
                    $email=$words[$i+2];
                    
                }
                if($words[$i]=="name"){
                    $name=$words[$i+2];
                    
                }
                if($words[$i]=="phone"){
                    $phone=$words[$i+2];
                    
                }
                if($words[$i]=="address"){
                    $address=$words[$i+2];
                    
                }
            }
            if($words[$i]=="Then"){
                for($j=0;$j<count($words);$j++){
                    if($words[$j]=="halaman"){
                        $page=$words[$j+1];
                        if($method=="login"){
                            if($status=="berhasil"){

                                fwrite($fileWrite,"\t\$actual_result=".$method."('".$username."',md5('".$password."'));\n");
                                fwrite($fileWrite,"\t\$expected_result=".$page.";\n");
                                fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result[0]->getUrl(),\$expected_result);\n}");
                            }
                            if($status=="gagal"){

                                fwrite($fileWrite,"\t\$actual_result=".$method."('".$username."',md5('".$password."'));\n");
                                fwrite($fileWrite,"\t\$expected_result=".$page.";\n");
                                fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result->getUrl(),\$expected_result);\n}");
                            }   
                        }   
                        if($method=="signup"){
                            if($status=="berhasil"){
                                fwrite($fileWrite,"\t\$actual_result=".$method."('".$username."',md5('".$password."'),md5('".$confirm_password."'),'".$name."','".$email."','".$phone."','".$address."');\n");
                                fwrite($fileWrite,"\t\$expected_result=".$page.";\n");
                                fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result[0]->getUrl(),\$expected_result);\n}");
                            }
                            if($status=="gagal"){
                                fwrite($fileWrite,"\t\$actual_result=".$method."('".$username."',md5('".$password."'),md5('".$confirm_password."'),'".$name."','".$email."','".$phone."','".$address."');\n");
                                fwrite($fileWrite,"\t\$expected_result=".$page.";\n");
                                fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result->getUrl(),\$expected_result);\n}");
                            }
                        }          
                    }
                }
            }
            
        } 
    }
    fwrite($fileWrite,"\n}");
    fclose($fileRead);
    fclose($fileWrite);
} else {
    // error opening the file.
} 

?>