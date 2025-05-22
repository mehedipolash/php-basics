<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date and Time</title>
</head>
<body>
   
            <?php

                 /*
                 echo "Today is  " .date("y/m/d") ."<br>";
                 echo "Today is  " .date("y-m-d") ."<br>";
                 echo "Today is  " .date("y.m.d") ."<br>";
                 echo "Today is  " .date("l") ."<br>";
                 */
                     
                        //  current time 
                    /*
                    date_default_timezone_set("Asia/Dhaka");
                    echo "The time is " . date("h:i:sa"); 
                     */
                    
                
                   // for custom time --- mktime(hour, minute, second, month, day, year)
                    /*
                    $d=mktime(11, 14, 54, 8, 12, 2014);
                    echo "Created date is " . date("Y-m-d h:i:sa", $d);
                    */


                  //convert a human readable date string into a Unix timestamp
                  
                  /*
                    $d=strtotime("10:30pm April 15 2014");
                    echo "Created date is " . date("Y-m-d h:i:sa", $d);
                  */

                  
                  //PHP is clever.check the following code

                  $d=strtotime("tomorrow");
                  echo date("Y-m-d h:i:sa", $d) . "<br>";

                  $d=strtotime("next Saturday");
                  echo date("Y-m-d h:i:sa", $d) . "<br>";

                  $d=strtotime("+3 Months");
                  echo date("Y-m-d h:i:sa", $d) . "<br>";
                
            ?>
            
                        
                       


</body>
</html>