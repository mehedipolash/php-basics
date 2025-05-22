<?php

// Reading a file line by line
/*
$fptr = fopen("mehedi.txt", "r");
while($a=fgets($fptr)){
    echo $a;
}
echo "End of the file has been reached";
*/


// Reading a file character by character
/*
$fptr = fopen("mehedi.txt", "r");
while($a=fgetc($fptr)){
    echo $a;
    // break;
}
echo "End of the file has been reached";
*/


// Write a program which reads the content of a file until . has been encountered
/*
$fptr = fopen("mehedi.txt", "r");
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);

*/

?>