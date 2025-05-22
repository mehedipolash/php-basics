<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
</head>
<body>
  <?php
    // -------------------------- While Loop Example --------------------------
    // $x = 10;
    // while ($x < 20):
    //   echo $x . " ";
    //   $x++;
    // endwhile;

    ///////////////////////////////////////////////////////

    // ------------------------- While Loop with Increment -------------------------
    // $x = 0;
    // while ($x < 100):
    //  // $x = $x + 10;
    //     $x++;
    //   echo $x . ' ';
     
    // endwhile;

    ///////////////////////////////////////////////////////
    
    // ------------------------ While Loop with Continue ------------------------
    // $i = 0;
    // while ($i < 6) {
    //   $i++;
    //   if ($i == 3) continue;  
    //   echo $i;
    // }

    ////////////////////////////////////////////////////////
    
    // ------------------------ Do-While Loop Example ------------------------
    // echo '<br><br><br>';
    // $i = 1;
    // do {
    //   echo $i;
    //   $i++;
    // } while ($i < 6);

    //////////////////////////////////////////////////////////

    // ----------------------- Do-While Loop with Break -----------------------
    // $i = 1;
    // do {
    //   if ($i == 3) break;
    //   echo $i;
    //   $i++;
    // } while ($i < 6); 

    //////////////////////////////////////////////////////////
        
    // -------------------- Foreach Loop with Continue Example --------------------
    // $colors = array("red", "green", "blue", "yellow");
    // foreach ($colors as $x) {
    //   if ($x == "blue") continue;
    //   echo "$x <br>";
    // }

    /////////////////////////////////////////////////////////

    // --------------------- Foreach Loop with Modification ---------------------
    // $colors = array("red", "green", "blue", "yellow");
    // foreach ($colors as $x) {
    //   if ($x == "blue") $x = "pink";
    // }
    // var_dump($colors);

    /////////////////////////////////////////////////////////

    // -------------------- Foreach Loop with Reference --------------------
    // $colors = array("red", "green", "blue", "yellow");
    // foreach ($colors as &$x) {
    //   if ($x == "blue") $x = "pink"; // Modify "blue" to "pink"
    // }
    // var_dump($colors); // Outputs the modified array

    //////////////////////////////////////////////////////////

    // --------------------------- Associative Array Example ---------------------------
    // $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    // foreach ($members as $x => $y) {
    //   echo "$x : $y <br>";
    // }

  ?>
</body>
</html>
