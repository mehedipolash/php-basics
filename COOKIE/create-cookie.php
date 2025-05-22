<?php
$cookie_name = "user";
$cookie_value = "Mehedi";


                // cookie syntax
//setcookie(name, value, expire, path, domain, secure, httponly);

setcookie($cookie_name,$cookie_value,time() + (86400 * 30), "/");
?>

<html>
<body>
   <?php

       if(!isset($_COOKIE[$cookie_name])) 

       {

         echo "the cookie is not set properly!";


       }

       else
       {

            echo $_COOKIE[$cookie_name];  

       }

   ?>



</body>



</html>