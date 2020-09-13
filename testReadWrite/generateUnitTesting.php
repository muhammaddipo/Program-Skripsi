<?php
$fileRead = fopen("C:\\xampp\\htdocs\\eLibrary\\scenario\\login.txt",'r');
$fileWrite = fopen(__DIR__ . "/loginUnitTesting2.php",'w');
fwrite($fileWrite,"<?php\n");
$banyakTest=1;

$feature="";
$method="";
$table="";
$page="";
$status="";

$username="";
$password="";
$confirm_password="";
$email="";
$name="";
$phone="";
$address="";
$user="";
$code="";
$title="";
$author="";
$publication_year="";
$publisher="";
$theme="";

//test
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
                if($username=="kosong"){
                    $username="";
                }
            }
            if($words[$i]=="password" && $words[$i-1]!="confirm"){
                $password=$words[$i+2];
                if($password=="kosong"){
                    $password="";
                }
            }
            if($method=="signup" || $method=="addAdmin" || $method=="updateUser"){
                if($words[$i]=="confirm" && $words[$i+1]=="password"){
                    $confirm_password=$words[$i+3];    
                    if($confirm_password=="kosong"){
                        $confirm_password="";
                    }
                }
                if($words[$i]=="email"){
                    $email=$words[$i+2];
                    if($email=="kosong"){
                        $email="";
                    }
                }
                if($words[$i]=="name"){
                    $name=$words[$i+2];
                    if($name=="kosong"){
                        $name="";
                    }
                }
                if($words[$i]=="phone"){
                    $phone=$words[$i+2];
                    if($phone=="kosong"){
                        $phone="";
                    }
                }
                if($words[$i]=="address"){
                    $address=$words[$i+2];
                    if($address=="kosong"){
                        $address="";
                    }
                }
                if($words[$i]=="user"){
                    $user=$words[$i+2];
                }
            }
            if($method=="addBook"){
                if($words[$i]=="code"){
                    $code=$words[$i+2];
                }
                if($words[$i]=="title"){
                    $title=$words[$i+2];
                }
                if($words[$i]=="author"){
                    $author=$words[$i+2];
                }
                if($words[$i]=="publication" && $words[$i+1]=="year"){
                    $publication_year=$words[$i+3];
                }
                if($words[$i]=="publisher"){
                    $publisher=$words[$i+2];
                }
                if($words[$i]=="theme"){
                    $theme=$words[$i+2];
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
                        if($method=="addAdmin"){
                            if($status=="gagal"){
                                fwrite($fileWrite,"\t\$actual_result=".$method."('".$username."',md5('".$password."'),'".$name."','".$email."','".$phone."','".$address."');\n");
                                fwrite($fileWrite,"\t\$expected_result=".$page.";\n");
                                fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result->getUrl(),\$expected_result);\n}");
                            }
                        }
                        if($method=="updateUser"){
                            if($status=="berhasil"){
                                fwrite($fileWrite,"\t\$actual_result=".$method."(".$user.",'".$password."','".$confirm_password."','".$phone."','".$address."');\n");
                                fwrite($fileWrite,"\t\$expected_result=".$page.";\n");
                                fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result->getUrl(),\$expected_result);\n}");
                            }
                            if($status=="gagal"){
                                fwrite($fileWrite,"\t\$actual_result=".$method."(".$user.",'".$password."','".$confirm_password."','".$phone."','".$address."');\n");
                                fwrite($fileWrite,"\t\$expected_result=".$page.";\n");
                                fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result->getUrl(),\$expected_result);\n}");
                            }
                        }          
                    }
                    if($words[$j]=="tabel"){
                        $table=$words[$j+1];
                        if($method=="addAdmin"){
                            if($status=="berhasil"){
                                fwrite($fileWrite,"\t".$method."('".$username."',md5('".$password."'),'".$name."','".$email."','".$phone."','".$address."');\n");
                                fwrite($fileWrite,"\t\$sql=\"SELECT Count(id_".$table.") FROM ". $table." where username='".$username."'\";\n");
                                fwrite($fileWrite,"\t\$actual_result=\$mysqli->query(\$sql);\n");
                                fwrite($fileWrite,"\t\$expected_result=1;\n");
                                fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result->num_rows,\$expected_result);\n}");
                            }
                        }
                        if($method=="addBook"){
                            fwrite($fileWrite,"\t".$method."('".$code."','".$title."','".$author."','".$publication_year."','".$publisher."','".$theme."');\n");
                                fwrite($fileWrite,"\t\$sql=\"SELECT Count(id_".$table.") FROM ". $table." where code='".$code."'\";\n");
                                fwrite($fileWrite,"\t\$actual_result=\$mysqli->query(\$sql);\n");
                                fwrite($fileWrite,"\t\$expected_result=1;\n");
                                fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result->num_rows,\$expected_result);\n}");
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
    echo "file tidak bisa dibaca";
} 

?>