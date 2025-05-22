<?php

 //readfile("mehedi.txt");
// readfile("file.html");
//echo  readfile("mehedi.txt");
 
$fptr = fopen("mehedi.txt", "r");

 if (!$fptr) {
   die("please enter a valid filename");
 }
 else
 {
   $content= fread($fptr,filesize("mehedi.txt"));
    echo $content;
 }

 fclose($fptr);

?>