<?php
//honeypot value

$honey = $_POST['middle_name'];

//$honey = "hui";

$f_name = $_POST["first_name"];
$l_name = $_POST["last_name"];
$school = $_POST ["school_name"];
$grade = $_POST["gradeLvl"];
$major = $_POST["majors"];
$email = $_POST["email"];
$comments = $_POST["comments"];
$contactMe = $_POST["contactMe"];
//exiting page if honey trap is triggered
if(!empty($honey)) {
    echo "<h1> An error occurred </h1>";
    echo "<a href = 'HTML Form Processor.html'>Click here to go back to the form</a>";
    exit();
}//else if they pass the honey pot test then the rest of the page appears 
else{ ?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>


<style>

body {
 background:#793FEB;
 
 }

</style>


</head>


<body>
<h1>Dear,  <?php echo $f_name, " ", $l_name?></h1>


<p> Thank for you for your interest in DMACC.</p>
<p> We have you listed as a <?php echo $grade ?> student starting this fall. </p> 

<p> You have declared <?php echo $major?> as your major. </p> 

<p> Based upon your responses we will provide the following information in our confirmation email to you at <?php echo $email?>. </p>



<p> You have shared the following comments which we will review:
comments </p>



<?php

    echo "Thank you " , $f_name, " ", $l_name, "<br>";
  
    echo "School name: ", $school, "<br>";
    echo "Email : ", $email, "<br>";
    echo "Grade :  ", $grade, "<br>";
    echo "Major :  ", $major, "<br>";
    echo "Contact :  ", $contactMe, "<br>";
    echo "Comments:  ", $comments;
   

?>


</body>
</html>

<?php
}
?>
