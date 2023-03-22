<?php 

include "Event.php";        //get the class

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
$sql = "SELECT name, description , presenter
        FROM wdv341_events";

//#3
$stmt = $conn->prepare($sql);

//#4
//no parameters to bind here

//#5

$stmt->execute();

//6
$stmt->setFetchMode(PDO::FETCH_ASSOC);     //set result as an associative array


$eventObject = new Event();  

echo "<br>";
while($row = $stmt ->fetch() ) { //start of loop
$eventObject->eventName = $row['name'];
$eventObject->eventDescription = $row['description'];
$eventObject->eventPresenter = $row['presenter'];

echo json_encode($eventObject);     //convert to JSON format and then echo to Response
}

?>