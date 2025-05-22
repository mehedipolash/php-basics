<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Break & continue</title>
</head>
<body>
  <?php
    // For loop demonstration
    for($x = 0; $x < 10; $x++) {
      if($x == 5) {
        echo "The number is : $x";
        break; // Exits the loop when $x is 5
      }
      echo "The number is : $x <br>";
    }
      
    echo '<br><br><br>';
    //////////////////////////////////////////////////////////////

    // While loop demonstration
    $a = 8;
    while($a < 15) {
      if($a == 12) {
        echo "The number is : $a <br>";
        break; // Exits the loop when $a is 12
      }
      echo "The number is : $a <br>";
      $a++;
    }

    echo '<br><br><br>';

    ///////////////////////////////////////////////////////////////

    // Foreach loop demonstration with an array
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
      if ($x == "blue") break; // Exits the loop when the color is blue
      echo "$x <br>";
    }

  ?>
</body>
</html>
