<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constant</title>

  <style>
    h1{
      color: red;
    }

    h3{
      color: green;
    }
  </style>
</head>
<body>
  <?php

     echo "<h1>constant name must be string</h1>";
    // Constant for greeting message
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING."<br>"; //here doesn't need any $ sign as it is a constant.

    // Constant for car brand
    define("MYCAR", "Volvo");
    echo MYCAR."<br>";

    // Array constant for car brands
    define("CARS", [
      "Alfa Romeo",
      "BMW",
      "Toyota"
    ]);
    echo CARS[0]."<br>";

    // Function to display greeting message
    function myTest() {
      echo GREETING;
    }
 
    myTest();
    echo"<br>";


    define("MIXED_ARRAY", [
  10,
  "string",
  10.5
]);
echo MIXED_ARRAY[0];  // Outputs: 10
echo "<br>";
echo MIXED_ARRAY[1];  // Outputs: string
echo "<br>";
echo MIXED_ARRAY[2];  // Outputs: 10.5

//at a time all array index print

    echo'<h3>whole array at a time print</h3>';
  
     foreach(MIXED_ARRAY as $mehedi)
     {
      echo $mehedi.'<br>';
     }
 
  ?> 
</body>
</html>
