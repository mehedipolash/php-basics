<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Details</title>
</head>
<body>

  <p style="color:Navy; text-align: center; font-size: 15px;">
    In PHP, there are three types of arrays:
    <br><br>
    1. Indexed arrays - Arrays with a numeric index<br>
    2. Associative arrays - Arrays with named keys<br>
    3. Multidimensional arrays - Arrays containing one or more arrays
  </p>

  <pre>
    <?php

    ////////// DIFFERENT WAY OF ARRAY CREATION STARTS HERE ////////////////////////

    ////////////////////// Indexed Array Using array() Syntax ////////////////////
    /*
       $cars = array("Volvo", "BMW", "Toyota");
       var_dump($cars);
    */

    ////////////////////// Indexed Array Using [] Syntax /////////////////////////
    /*
       $cars = ["Volvo", "BMW", "Toyota"];
       var_dump($cars);
    */

    ////////////////// Indexed Array with Elements on New Lines //////////////////
    /*
       $cars = [
         "Volvo",
         "BMW",
         "Toyota"
       ];
       var_dump($cars);
    */

    ////////////////// Indexed Array with Trailing Comma /////////////////////////
    /*
       $cars = [
         "Volvo",
         "BMW",
         "Toyota",
       ];
       var_dump($cars);
    */

    ////////////////// Indexed Array with Explicit Keys /////////////////////////
    /*
       $cars = [
         0 => "Volvo",
         1 => "BMW",
         2 => "Toyota"
       ];
       var_dump($cars);
    */

    ////////////////// Associative Array with Named Keys /////////////////////////
    /*
       $myCar = [
         "brand" => "Ford",
         "model" => "Mustang",
         "year" => 1964
       ];
       var_dump($myCar);
    */

    ////////// Indexed Array Populated After Declaration ////////////////////////
    /*
       $cars = [];
       $cars[0] = "Volvo";
       $cars[1] = "BMW";
       $cars[2] = "Toyota";
       var_dump($cars);
    */

    ///////// Associative Array Populated After Declaration /////////////////////
    /*
       $myCar = [];
       $myCar["brand"] = "Ford";
       $myCar["model"] = "Mustang";
       $myCar["year"] = 1964;
       var_dump($myCar);
    */

    ////////////// Mixed Indexed and Associative Array //////////////////////////
    /*
       $myArr = [];
       $myArr[0] = "apples";
       $myArr[1] = "bananas";
       $myArr["fruit"] = "cherries";
       var_dump($myArr);
    */

                   // DIFFERENT WAY OF ARRAY CREATION ENDS HERE //

                   

    //////////////////// INDEXED ARRAY starts here //////////////////////////////

    ////////////////// Basic Array Declaration and Debugging ////////////////////
    /*
       $cars = array("Mercedes", "Toyota", "BMW");
       var_dump($cars);
    */

    ////////////////// Calling a Function Stored in an Array ////////////////////
    /*
       function myFunction() {
         echo "This text comes from a function";
       }

       $myArr = array("Volvo", 15, ["apples", "bananas"], "myFunction");
       call_user_func($myArr[3]);
    */

    ////////////////// Accessing and Printing an Array Element //////////////////
    /*
       $cars = array("Volvo", "BMW", "Toyota");
       var_dump($cars);
       echo $cars[0];
    */

    ///////////////////////// Modifying an Array Element ////////////////////////
    /*
       $cars = array("Volvo", "BMW", "Toyota");
       $cars[1] = "Ford";
       var_dump($cars);
    */

    ////////////////// Iterating Through an Array with foreach //////////////////
    /*
       $cars = array("Volvo", "BMW", "Toyota");

       foreach ($cars as $x) {
         echo "$x <br>";
       }
    */

    ////////////////// Adding Elements to an Array Using array_push /////////////
    /*
       $cars[0] = "Volvo";
       $cars[1] = "BMW";
       $cars[2] = "Toyota";

       array_push($cars, "Ford");
       array_push($cars, "Honda");
       var_dump($cars);
    */

    ////// Adding Elements with Specific Indexes and Using array_push ///////////
    /*
       $cars[5] = "Volvo";
       $cars[7] = "BMW";
       $cars[14] = "Toyota";

       array_push($cars, "Ford");
       var_dump($cars);
    */

    //////////////////// INDEXED ARRAY ends here ////////////////////////////////

    //////////////////// ASSOCIATIVE ARRAY starts here //////////////////////////

    //////// Associative Array Declaration and Debugging ////////////////////////
    /*
       $cars = array("brand" => "toyota", "model" => "corolla", "year" => "2006");
       var_dump($cars);
    */

    ///////// Accessing an Associative Array Element ////////////////////////////
    /*
       echo $cars["year"];
    */

    ///////// Modifying an Associative Array Element ////////////////////////////
    
      /* $cars = array("brand" => "toyota", "model" => "corolla", "year" => "2006");
       $cars["year"] = 2000;
       var_dump($cars); */
    

    ////// Iterating Through an Associative Array with foreach //////////////////
    /*
       $cars = array("brand" => "toyota", "model" => "corolla", "year" => "2006");

       foreach ($cars as $x => $y) {
         echo "$x: $y <br>";
       }
    */

    //////////////////// ASSOCIATIVE ARRAY ends here ////////////////////////////

    ?>
  </pre>

</body>
</html>
