<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magic constants</title>
</head>
<body>
           <?php
                  define('Hello','Hello world');
                  echo Hello;
                  echo'<br>';
                  define('MEHEDI',['mehedi',10.99,100]);
                 // echo MEHEDI[]; this will show an error! php is not allow this!

                 foreach(MEHEDI as $element)
                 {
                  echo $element."<BR>";
                 }
                 echo __FILE__.'<br>';// this magic constant will show the file location.
                 //echo __LINE__;//this will show the current line no.
                 //echo __DIR__;
                 //echo PHP_VERSION;//this is not a magic constant.it is predefined constant.
                 


           ?> 
</body>
</html>