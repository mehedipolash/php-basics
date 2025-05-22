<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Learning</title>
</head>
<body>
    <?php
        $t = 10;
        echo "<p>The value of t is: $t</p>";

        function myTest() {
            echo "<p>Variable t inside function is: $t</p>";
            //there will be a error
        }

        myTest();

        echo "<p>Variable t outside function is: $t</p>";
    ?>
</body>
</html>
