<?php

session_start();

$_SESSION["favcolor"] = "Red";  // you can change session value any time!

if(isset($_SESSION["favcolor"]))
{
 echo "session variable is set.";
}

?>