<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Greeting</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 0;
      color: teal;
    }
  </style>
</head>
<body>
 <?php
date_default_timezone_set("Asia/Dhaka");

$t = date("h:i A"); 
$hour = date("H"); 
$date = date("l, F j, Y"); 

if ($hour < 12) {
  echo "Good morning! The current date is $date, and the time is $t.";
} elseif ($hour < 18) {
  echo "Good afternoon! The current date is $date, and the time is $t.";
} else {
  echo "Good evening! The current date is $date, and the time is $t.";
}

echo '<br>';

////////////////////////////////////////////////////////////////////////////////

$a = 5;

if ($a < 10) $b = "Mehedi";   //shorthand if

echo $b.'<br>';

////////////////////////////////////////////////////////////////////////////////



$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";  //shorthand if..else(ternary operation)

echo $b;
?>
</body>
</html>
