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
?> 

    <!--#3--> 
<br>
<h2><?php echo $yourName;?> </h2>
<br>
<h2 id = "arrayResults"> </h2>
<h2 id = "arrayResults2"> </h2>
<h2 id = "arrayResults3"> </h2>


<script> 
<?php
//#6
//PHP and JS array
$myArray = ["'PHP'", "'HTML'", "'Javascript'"];

echo "let myArrayInJS =[];";

//loop pushing the values from the PHP array to JS
foreach ($myArray as $value) {
    
    echo "myArrayInJS.push($value);";
}


//displaying the values of the JS array 
echo "for(let i=0; i < myArrayInJS.length; i++){
      document.write(myArrayInJS[i]+ '<br>' ); }";

?>
</script>
</body>
</html>