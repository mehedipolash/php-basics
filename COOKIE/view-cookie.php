<?php
     //view cookie from different page(was set in create-cookie.php file)
     echo "Cookie value : ". $_COOKIE["user"];  

     // delete cookie which was previously set
    setcookie("user", "", time() - (86400 * 30), "/");



?>