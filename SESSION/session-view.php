<?php
session_start();
// View previously created session
print_r($_SESSION);
echo "<br>";
?>

<html>
<body>
  <?php
     if(isset($_SESSION["favcolor"])) {
      echo "Favourite color: " . $_SESSION["favcolor"];
     }
  ?>
</body>
</html>
