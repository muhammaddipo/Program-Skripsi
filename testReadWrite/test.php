<?php
    $fileRead = fopen('read.txt','r');
    $fileWrite= fopen('write.txt','w');

    while(!feof($fileRead)){
        $string=fread($fileRead,1024);
        fwrite($fileWrite,$string);
    }
    fclose($fileRead);
    fclose($fileWrite);
?>