<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function</title>
</head>
<body>
  <?php    

   
    
    /////////////////////// Simple function to print a name ///////////////////////
    
    // function tbag() {
    //   echo "my name is: FUCKING BAGWELL T BAG THEODOR ";
    // }

    // tbag();


    //////////////////////////////////////////////////////////////////////////

    /////////////////////////// Function with one parameter ///////////////////////////

    // function familyName($fname) {
    //   echo "$fname Sarkar.<br>";
    // }

    // // Any type of value can be passed in function
    // familyName("Jani");
    // familyName("Hege");
    // familyName("Stale");
    // familyName("Kai Jim");
    // familyName("Borge");
    // familyName(123); 
    // familyName(45.67);

    //////////////////////////////////////////////////////////////////////////

    /////////////////////////// Function with two parameters ///////////////////////////

    // function familyFullName($fname, $year) {
    //   echo "$fname Refsnes. Born in $year <br>";
    // }

    // familyFullName("Hege","1975");
    // familyFullName("Stale","1978");
    // familyFullName("Kai Jim","1983");

    //////////////////////////////////////////////////////////////////////////

    /////////////////////// Function with a default parameter ///////////////////////

    // function setHeight($minheight = 10000000) {
    //   echo "The height is : $minheight <br>";
    // }

    // setHeight(350);
    // setHeight();
    // setHeight(135);
    // setHeight(80);

    //////////////////////////////////////////////////////////////////////////

    /////////////////////////// Function with return statement ///////////////////////////

    // function abc($x, $y) {
    //   $z = $x + $y;
    //   return $z;
    // }

    // echo "5 + 10 = " . abc(5,10) . "<br>";
    // echo "7 + 13 = " . abc(7,13) . "<br>";
    // echo "2 + 4 = " . abc(2,4);

    //////////////////////////////////////////////////////////////////////////

    ///////////////////////// Function with reference parameter /////////////////////////

    // function add_five(&$reference) {
    //   $reference += 10;
    // }

    // $x = 5;
    // add_five($x);
    // echo $x;

    //////////////////////////////////////////////////////////////////////////

  ?>
</body>
</html>
