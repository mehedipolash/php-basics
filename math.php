<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <?php 
                   echo "<h1>Math built-in function of PHP</h1>";
      
                echo 'the value of pi is:'. pi() ."<br>";//value of pi
                echo pi()."<br>";
                echo min(100,24.80,-50,200)  ."<br>";//minimum value of list
                echo max(100,24.80,-50,200)  ."<br>";//maximum value of list
                echo abs(-10.5)."<br>";//absolute value
                echo sqrt(81)."<br>";//square root
                echo round(50.5)."<br>";//ceiling and flooring
                echo round(0.49)."<br>";
                echo rand()."<br>";//generate random number
                echo rand(25,90)."<br>";
                
      
      ?>    


</body>
</html>