<?php 

//requires file or will break 
require 'DBConnecttionStringHostSite.php';

//database work flow
//1. connect to the database
//2. create your SQL statement
//3. prepare the statement
//4. bind any parameters as needed
//5. execute your sql command/prepared statement
//6. process your result-set/object


//#1 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//#2
$sql = "SELECT * FROM wdv341_events WHERE presenter = 'Jeff'"; 

//#3
$stmt = $conn->prepare($sql);

//#4
//no parameters to bind here

//#5

$stmt->execute();

//6
$stmt->setFetchMode(PDO::FETCH_ASSOC);     //set result as an associative array



echo "<table>";
while($row = $stmt->fetch() ){
    
        echo "<tr>";

            echo "<th> ID </th>";
            echo "<th> Name </th>";
            echo "<th> Description </th>";
            echo "<th> Presenter </th>";
            echo "<th> Date </th>";
            
        echo "</tr>";

        echo "<tr>";
            echo "<td>" . $row ["id"] . "</td>";
            echo "<td>" . $row ["name"] . "</td>";
            echo "<td>" . $row ["description"] . "</td>";
            echo "<td>" . $row ["presenter"] . "</td>";
            echo "<td>" . $row ["date"] . "</td>";
        echo "</tr>";
    
}
echo "</table>";

?>



 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

table, th, td {
  border: 1px solid black;
  
}

        </style>
</head>
<body>

</body>
</html>