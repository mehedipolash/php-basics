<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP GLOBALS</title>
</head>
<body>
  <?php

    //////// GLOBAL VARIABLES AND SUPERGLOBALS EXAMPLES /////////////////

    /*
    Example: Accessing a Global Variable using $GLOBALS
    ----------------------------------------------------
    */
    /*
    $x = 75;
    
    function myfunction() {
        echo $GLOBALS['x']; // Accessing the global variable $x using $GLOBALS superglobal.
    }
    myfunction();
    */

    /*
    Example: Accessing a Global Variable using the global Keyword
    --------------------------------------------------------------
    */
    /*
    $x = 80;

    function abcd()
    {
        global $x; // Declaring the variable $x as global inside the function to access it.
        echo $x;
    }
    abcd();
    */

    /*
    Example: Printing Global Variables Directly
    -------------------------------------------
    */
    /*
    $x = 100;

    echo $GLOBALS['x']; // Accessing $x using $GLOBALS.
    echo $x;            // Accessing $x directly.
    */

    /*
    Example: Modifying a Global Variable within a Function
    -------------------------------------------------------
    */
    /*
    function myfunction()
    {
        $GLOBALS["x"] = 100; // Setting the global variable $x using $GLOBALS inside the function.
    }

    myfunction();

    echo $GLOBALS["x"]; // Printing the value of $x using $GLOBALS.
    echo $x;            // Printing the value of $x directly.
    */

    /*
    Example: Displaying Server Information using $_SERVER
    ------------------------------------------------------
    */
    /*
    echo "<p>" . $_SERVER['PHP_SELF'] . "</p>";          // Current script filename.
    echo "<p>" . $_SERVER['SERVER_NAME'] . "</p>";      // Server's name.
    echo "<p>" . $_SERVER['HTTP_HOST'] . "</p>";        // Host header from the current request.
    echo "<p>" . $_SERVER['HTTP_REFERER'] . "</p>";     // Referrer URL (if available).
    echo "<p>" . $_SERVER['HTTP_USER_AGENT'] . "</p>";  // User-agent details.
    echo "<p>" . $_SERVER['SCRIPT_NAME'] . "</p>";      // Path of the current script.
    */

    /*
    Superglobals: Description and Usage
    ------------------------------------
    A reference guide for common $_SERVER variables:
    - $_SERVER['PHP_SELF']: Returns the filename of the currently executing script.
    - $_SERVER['SERVER_NAME']: Name of the host server (e.g., www.example.com).
    - $_SERVER['HTTP_REFERER']: Referring URL (not always reliable).
    - $_SERVER['HTTP_USER_AGENT']: Information about the user-agent (browser, device).
    - $_SERVER['REMOTE_ADDR']: IP address of the client accessing the script.
    - $_SERVER['SCRIPT_NAME']: The path of the current script.
    - $_SERVER['REQUEST_METHOD']: Method used to access the page (e.g., GET, POST).
    */
  ?>
</body>
</html>
