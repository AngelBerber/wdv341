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
<h1>Dear,  <?php echo $_POST["first_name"], " ",$_POST["last_name"]?></h1>


<p> Thank for you for your interest in DMACC.</p>
<p> We have you listed as a <?php echo $_POST["gradeLvl"] ?> student starting this fall. </p> 

<p> You have declared <?php echo $_POST["majors"] ?> as your major. </p> 

<p> Based upon your responses we will provide the following information in our confirmation email to you at <?php echo $_POST["email"]?>. </p>



<p> You have shared the following comments which we will review:
comments </p>



<?php


    echo "<table border='1'>";
    echo "<tr><th>Field Name</th><th>Value of Field</th></tr>";
    foreach($_POST as $key => $value)
    {
        echo '<tr>';
        echo '<td>',$key,'</td>';
        echo '<td>',$value,'</td>';
        echo "</tr>";
    }
    echo "</table>";
    echo "<p>&nbsp;</p>";


?>


</body>
</html>
