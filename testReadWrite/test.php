<?php
    $fileRead = fopen("C:\\xampp\\htdocs\\eLibrary\\scenario\\login.txt",'r');
    $fileWrite = fopen(__DIR__ . "/write.php",'w');

    // while(!feof($fileRead)){
    //     fwrite($fileWrite,fread($fileRead,1024));
    // }
    fwrite($fileWrite,"<?php\n");
    $banyakTest=1;
    $feature="";
    $method="";
    $username="";
    $password="";
    $page="";
    $status="";
    $angka=0;
    while (!feof($fileRead)) {
        if ($s = fgets($fileRead,1048576)) {
            $words = preg_split('/\s+/',$s,-1,PREG_SPLIT_NO_EMPTY);
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
                    $angka++;
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
                if($words[$i]=="password"){
                    $password=$words[$i+2];
                }
                if($words[$i]=="halaman"){
                    $page=$words[$i+1];
                    if($method=="login" && $status="berhasil"){
                        fwrite($fileWrite,$status."\n".$angka."\n");
                        // fwrite($fileWrite,"\t\$actual_result=".$method."('".$username."',md5('".$password."'));\n");
                        // fwrite($fileWrite,"\t\$expected_result=".$page.";\n");
                        // fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result[0]->getUrl(),\$expected_result);\n}");
                    }
                    if($method=="login" && $status="gagal"){
                        fwrite($fileWrite,$status."\n".$angka."\n");
                        // fwrite($fileWrite,"\t\$actual_result=".$method."('".$username."',md5('".$password."'));\n");
                        // fwrite($fileWrite,"\t\$expected_result=".$page.";\n");
                        // fwrite($fileWrite,"\t\$this->assertEquals(\$actual_result->getUrl(),\$expected_result);");
                    }                
                }
                
            } 
        }
        fwrite($fileWrite,"\n");
    }
    
    fwrite($fileWrite,"}\n?>");
    fclose($fileRead);
    fclose($fileWrite);
?>
 