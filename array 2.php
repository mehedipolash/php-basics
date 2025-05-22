<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sort, Multidimension & Function</title>
</head>
<body>
<?php
         //******* SORTING STARTS HERE ********/


// ==============================================
// SORTING STRING ARRAY IN ASCENDING ORDER
// ==============================================

/*
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
//echo $clength;

for ($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
*/

// ==============================================
// SORTING NUMERIC ARRAY IN ASCENDING ORDER
// ==============================================

/*
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
*/

// ==============================================
// SORTING STRING ARRAY IN DESCENDING ORDER
// ==============================================

/*
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
*/

// ==============================================
// SORTING NUMERIC ARRAY IN DESCENDING ORDER
// ==============================================

/*
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
*/

// ==============================================
// SORTING ASSOCIATIVE ARRAY BY VALUE (ASCENDING)
// ==============================================

/*
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
*/

// ==============================================
// SORTING ASSOCIATIVE ARRAY BY KEY (ASCENDING)
// ==============================================

/*
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
*/

// ==============================================
// SORTING ASSOCIATIVE ARRAY BY VALUE (DESCENDING)
// ==============================================

/*
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
*/

// ==============================================
// SORTING ASSOCIATIVE ARRAY BY KEY (DESCENDING)
// ==============================================

/*
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
*/

  //******* SORTING ENDS HERE ********//


        //******* MULTIDIMENSIONAL ARRAY STARTS HERE ********//


/* 
// ==============================================
// ACCESSING MULTIDIMENSIONAL ARRAY ELEMENTS
// ==============================================
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
*/

/* 
// ==============================================
// LOOPING THROUGH MULTIDIMENSIONAL ARRAY
// ==============================================
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
*/


        //******* MULTIDIMENSIONAL ARRAY ENDS HERE ********//

?>
</body>
</html>
