<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>variable learning</title>
</head>
<body>

<?php

  $x=15;
  $y=20;

  function myTest()
  {
    $GLOBALS['z']= $GLOBALS['x'] + $GLOBALS['y'];
  }
  echo $y. "<br>";
  myTest();
  echo $z;


?>
  
</body>
</html>