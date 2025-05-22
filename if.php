<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALl about if statement in php</title>
</head>
<body>
  <?php
    $x = 80;
    if ($x > 90) {
      echo 'Hello';
    } else {
      echo 'barar bal' . '<br>';
    }

    ////////////////////////////////////////

    $x = 100.00;
    $y = 100;

    if ($x === $y) {
      echo "$x is identical to $y" . '<br>';
    }

    ////////////////////////////////////////

    $x = 100;
    $y = 100;

    if ($x != $y) {
      echo "$x is not equal to $y" . '<br>';
    }
    else
    {
            echo "$x is  equal to $y" . '<br>';

    }

    ////////////////////////////////////////

    $x = 100;
    // $y = 50;  //check it also
     $y = 100;

    if ($x !== $y) {
      echo "$x is not identical to $y" . '<br>';
    }
    else
    {
      echo "They are identical.<br>";
    }

    ////////////////////////////////////////

    $a = 200;
    $b = 33;
    $c = 100;

    if ($a > $b && $a < $c) {
      echo "Both conditions are true" . '<br>';
    } else {
      echo 'not true' . '<br>';
    }

    ////////////////////////////////////////

    $a = 5;

    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
      echo "$a is a number between 2 and 7";
    }
  ?>
</body>
</html>
