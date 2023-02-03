<?php
//1
function timeStampFormatMDY() {
    $d=mktime(9, 12, 2014);
    echo "1# Created date is " . date("m-d-y", $d);
}



//2
function timeStampFormatDMY() {
    $d=mktime(9, 12, 2014);
    echo "2# Created date is " . date("d-m-y", $d);

}



//3
//gets info from the form in the html page
$wordFromForm = $_POST["word"];
function numberOfCharInString($inString) {
    return strlen($inString);

}


//4
//gets info from the form in the html page
$phoneNumberFromForm = $_POST['phoneNumber'];
function formatPhoneNumber($inNumber) {
    $fisrtPart = substr($inNumber,0 , 3);

    $secondPart = substr($inNumber,3,3);

    $lastPart = substr($inNumber,6,4);

    $formatedPhoneNumber = "(" . $fisrtPart . ")" ."-". $secondPart . "-" . $lastPart;

    return $formatedPhoneNumber;

}


//5
//gets info from the form in the html page
$currencyFromForm = $_POST["currency"];
function formatCurrency($inCurrency) {

    $amount = intval($inCurrency);

    return number_format($amount, 2);


}

?>

<!DOCTYPE html>
<html>

<body style="background-color: darkslateblue;">

<form action="PHPFunctions.php" method="post">

<label for = "word">Enter word: </label>
<input type="text" name="word"><br>

<label for = "phoneNumber">Format Phone Number:</label>
<input type="text" name="phoneNumber"><br>

<label for = "currency">Format currency: </label>
<input type="text" name="currency"><br>




<input type="submit">
<input type="reset">

</form>
<h1>Your results!</h1> 
<?php timeStampFormatMDY();?>
<br>
<?php timeStampFormatDMY();?>
<p>#3 Your word has this many characters:  <?php echo numberOfCharInString($wordFromForm); ?> </p>
<p>#4 Formatted phone number:  <?php echo formatPhoneNumber($phoneNumberFromForm); ?> </p>
<p>#5 Formatted currency:  <?php echo "$".formatCurrency($currencyFromForm); ?> </p>

</body>
</html>
