<html>
<head>
<title>PHP Basics</title>
<script> 
let myJSArray = [];

</script>
</head>

<body>

   
<?php 
//#1-2
$yourName = "Angel Berber";
echo "<h1>", $yourName, "</h1>";

//#4-5
$number1 = 5;
$number2 = 10;
$total = $number1 + $number2;
echo "<p>Total value of two numbers: </p>", $total, "<br>";

//#6
$myArray = ["'PHP'", "'HTML'", "'Javascript'"];

foreach ($myArray as $value) {
    echo "<script> myJSArray[$value] </script>";
    //echo "myJSArray[$value]";
   // echo json_encode($value);
   // echo $value;
}


?> 

    <!--#3--> 
<br>
<h2><?php echo $yourName;?> </h2>
<br>
<h2 id = "arrayResults"> </h2>
<h2 id = "arrayResults2"> </h2>
<h2 id = "arrayResults3"> </h2>


<script> 
document.querySelector("#arrayResults").innerHTML = myJSArray[0];
document.querySelector("#arrayResults2").innerHTML = myJSArray[1];
document.querySelector("#arrayResults3").innerHTML = myJSArray[2];

</script>
</body>
</html>