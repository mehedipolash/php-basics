<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARRAY 1</title>
</head>
<body>
  <?php  

    ///////////////// Access array starts here //////////////////////

    ////////////////// Accessing Indexed Array by Index /////////////////////////
    /*
      $cars = array("Volvo", "BMW", "Toyota");
      echo $cars[2];
    */

    ////////////////// Accessing Associative Array by Key ///////////////////////
    /*
      $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
      echo $cars["year"];
    */

    ////////////////// Accessing Associative Array with Different Key Syntax //////////////////
    /*
      $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
      echo $cars["model"];
      echo "<br>";
      echo $cars['brand'];
    */

    ////////////////// Calling a Function Stored in an Indexed Array //////////////////
    /*
      function myFunction() {
        echo "I come from a function!";
      }

      $myArr = array("Volvo", 15, "myFunction");
      $myArr[2]();
      //call_user_func($myArr[2]);
    */

    ////////////////// Calling a Function Stored in an Associative Array //////////////////
    /*
      function myFunction() {
        echo "I come from a function!";
      }

      $myArr = array("car" => "Volvo", "age" => 15, "message" => "myFunction");
      $myArr["message"]();
    */

    ////////////////// Iterating Through an Associative Array with foreach //////////////////
    /*
      $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
      foreach ($car as $x => $y) {
        echo "$x: $y <br>";
      }
    */

    ////////////////// Iterating Through an Indexed Array with foreach //////////////////
    /*
      $cars = array("Volvo", "BMW", "Toyota");
      foreach ($cars as $x) {
        echo "$x <br>";
      }
    */

    ///////////////// Access array ends here //////////////////////

    //////////////// Update array items starts here //////////////////

    ////////////////// Updating Indexed Array Element by Index //////////////////
    /*
      $cars = array("Volvo", "BMW", "Toyota");
      $cars[1] = "Ford";
      var_dump($cars);
    */

    ////////////////// Updating Associative Array Element by Key //////////////////
    /*
      $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
      $cars["year"] = 2024;
      var_dump($cars);
    */

    /////////// Updating All Elements in Indexed Array with foreach ///////////////
    /*
      $cars = array("Volvo", "BMW", "Toyota");
      foreach ($cars as &$x) {
        $x = "Ford";
      }
      unset($x);
      var_dump($cars);
    */

    ////////////////// Modifying Array After Unset //////////////////
    /*
      $cars = array("Volvo", "BMW", "Toyota");
      foreach ($cars as &$x) {
        $x = "Ford";
      }
      unset($x);
      $x = "ice cream";
      var_dump($cars);
    */
    /* That means when we use unset then all modification stops, 
       but before all elements are changed either we use unset or not. */

    ////////////////// Using unset to Reset Reference after foreach //////////////////
    /*
      $cars = array("Volvo", "BMW", "Toyota");
      foreach ($cars as &$x) {
        $x = "Ford";
      }

      $x = "ice cream";
      var_dump($cars);
    */
    // &$x indicates the last element.

    //////////////// Update array items ends here //////////////////

    ////////////////// Add array items starts here ///////////////////////////

    ////////////////// Adding an item to an indexed array //////////////////
    /*
      $fruits = array("Apple", "Banana", "Cherry");
      $fruits[] = "Orange";
      var_dump($fruits);
    */

    ////////////////// Adding an item to an associative array //////////////////
    /*
      $cars = array("brand" => "Ford", "model" => "Mustang");
      $cars["color"] = "Red";
      var_dump($cars);
    */

    ////////////////// Using array_push to add multiple items to an indexed array //////////////////
    /*
      $fruits = array("Apple", "Banana", "Cherry");
      array_push($fruits, "Orange", "Kiwi", "Lemon");
      var_dump($fruits);
    */

    ////////////////// Using array_merge to add elements to an associative array //////////////////
    /*
      $cars = array("brand" => "Ford", "model" => "Mustang");
      $cars += ["color" => "red", "year" => 1964];
      var_dump($cars);
    */

    ////////////////// Add array items ends here ///////////////////////////



    //////////////////////// Remove array items starts here //////////////////////



    //////////////////////// Remove multiple items using array_splice //////////////////
    
    /*
      $cars = array("Volvo", "BMW", "Toyota");
      array_splice($cars, 1, 2);
      var_dump($cars);
      unset($cars[0]);        // unset=delete  
      echo "<br>";            // splice=remove
      var_dump($cars);
    */

    //////////////////////// Remove multiple items using unset //////////////////////
    
    /*
      $cars = array("Volvo", "BMW", "Toyota");
      unset($cars[0], $cars[1]);
      var_dump($cars);
    */

    //////////////////////// Remove item by key using unset //////////////////////
    
    /*
      $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
      unset($cars["model"]);
      var_dump($cars);
    */

    //////////////////// Remove specific values using array_diff //////////////////////
    
    /*
      $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
      $newarray = array_diff($cars, ["Mustang", 1964]);
      var_dump($newarray);
    */

    // The array_diff() function takes values as parameters, and not keys.

    //////////////////////// Remove last item using array_pop //////////////////////
    
    /*
      $cars = array("Volvo", "BMW", "Toyota");
      array_pop($cars);
      var_dump($cars);
    */

    //////////////////////// Remove first item using array_shift //////////////////////
    
    /*
      $cars = array("Volvo", "BMW", "Toyota");
      array_shift($cars);
      var_dump($cars);
    */

   //////////////////////// Remove array items ends here //////////////////////
  ?>
</body>
</html>
