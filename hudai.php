<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hudai</title>
</head>
<body>

<?php

  echo str_word_count("Bangladesh is a beautiful country") . "<br/>";
  echo str_replace("beautiful", "wonderful", "Bangladesh is a beautiful country") . "<br/>";
  echo strlen("Mehedi") . "</br>";
  echo strpos("Mehedi hasan polash", "polash") . "<br/>"; 
  $x = "Hello World!";
  echo strtoupper($x);
  echo "</br>";
  echo strtolower($x);
  echo "</br>";
 echo str_replace("World", "Dolly", $x) . "<br/>";

  echo strrev($x);
  echo "<br>";




 // Case 1: Value with leading and trailing spaces
$x = "  Hello World!  ";

echo "<input value='" . $x . "'>"; // This will show '  Hello World!  '
echo "<br>";
echo "<input value='" . trim($x) . "'>"; // This will show 'Hello World!'
echo "<br><br>";

// Case 2: Value without leading and trailing spaces
$x = "Hello World!";

echo "<input value='" . $x . "'>"; // This will show 'Hello World!'
echo "<br>";
echo "<input value='" . trim($x) . "'>"; // This will also show 'Hello World!'
echo "<br>";

$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

echo "<br>";


$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;

echo "<br>";



$x = "Hello World!";
echo substr($x, 6, 5);
echo "<br><br>";
echo substr($x, 6);




?>

</body>
</html>
