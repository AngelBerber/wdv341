<!DOCTYPE html>
<html>
<head>
	<title>Event Form</title>
</head>
<body>
	<h1>Event Form</h1>

	<?php
        //requires file or will break 
        require 'DBConnecttionStringHostSite.php';

		// Define variables and set to empty values
		$name = $date = $location = "";
		$honeypot = "";


        if(isset($_POST['submit'] ) ) {

            echo "<h2> Your form has been sent </h2>";
        }



		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			// Process honeypot
			$honeypot = $_POST["honeypot"];
			if ($honeypot != "") {
				// Honeypot detected, do not process form
				echo "<p>Form submission failed</p>";
			} else {


				// Process form data
				$name = test_input($_POST["name"]);
				$description = test_input($_POST["description"]);
				$presenter = test_input($_POST["presenter"]);

				$sql = "INSERT INTO wdv341_events (name, description, presenter) VALUES ('$name', '$description', '$presenter')";


				if ($conn->query($sql) === TRUE) {
				echo "<p>Event data saved successfully</p>";
                
				} else {
				
				}

				
			}
		}

		// Sanitize user input
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

	<form method="post" action="Self Posting.php">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>

		<label for="description">Description:</label>
		<input type="text" id="description" name="description" required><br><br>

		<label for="presenter">Presenter:</label>
		<input type="text" id="presenter" name="presenter" required><br><br>

		<!-- Honeypot field -->
		<div style="display:none">
			<label for="honeypot">Leave this field blank:</label>
			<input type="text" id="honeypot" name="honeypot">
		</div>
        <!-- Honeypot field end -->

		<input type="submit" name ="submit" value="Submit">
        <input type ="reset">
	</form>

</body>
</html>
