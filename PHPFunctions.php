<?php
//1

  //1 formats into mm/dd/yyyy format
  function timeStampFormatMDY($inDate) {
    echo "#1 ". date("m/d/Y", strtotime($inDate) );
  }

  //2 formats into dd/mm/yyyy 
  function timeStampFormatDMY($inDate) {
    echo "#2 ".date("d/m/y", strtotime($inDate) );
  }


//3
//gets info from the form in the html page and formats it in this big method..
$wordFromForm = $_POST["word"];
function numberOfCharInString($inString) {
    $numberOfChar = strlen($inString);

    $trimedString = trim($inString);

    $lowerCase = strtolower($inString);

    $containsDMACC = "";

    if (str_contains($inString, "DMACC") ==true or str_contains($inString,"dmacc") == true) {

        $containsDMACC = "True";
    }
    else{
        $containsDMACC = "Does not contain DMACC";
    }

    $returnString =  "Number of char: " . $numberOfChar. " ". " Lower cased word: " . $lowerCase. " Contains DMACC: " . $containsDMACC;

    return $returnString;

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
<?php timeStampFormatMDY("now");?>
<br>
<?php timeStampFormatDMY("today");?>
<p>#3 Formated word:  <?php echo numberOfCharInString($wordFromForm); ?></p>
<p>#4 Formatted phone number:  <?php echo formatPhoneNumber($phoneNumberFromForm); ?> </p>
<p>#5 Formatted currency:  <?php echo "$".formatCurrency($currencyFromForm); ?> </p>

</body>
</html>
