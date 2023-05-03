


<?php 
            //requires file or will break 
            //require 'DatabaseConnectionString.php';
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
            $sql = "SELECT * FROM `Recipe_Items`";

            //#3
            $stmt = $conn->prepare($sql);

            //#4
            //no parameters to bind here

            //#5

            $stmt->execute();

            //6
            $stmt->setFetchMode(PDO::FETCH_ASSOC);     //set result as an associative array






		// Process honeypot
        $honeypot = $_POST["honeypot"];
        if ($honeypot != "") {
            // Honeypot detected, do not process form
            echo "<p>Form submission failed</p>";
        } else {


                //form info from the first form for the recipe
                $recipeName = $_POST['recipe-name'];

                $prep_time_hours = $_POST['prep-time-hours'];

                $prep_time_Minutes = $_POST['prep-time-Minutes'];

                $cook_time_hours = $_POST['cook-time-hours'];

                $cook_time_Minutes = $_POST['cook-time-Minutes'];

                $difficulty = $_POST['difficulty'];

                $serving_size = $_POST['serving-size'];

                $imageURL = $_POST['image-url'];
                //gets the total ingredients from the box
                $ingredients = $_POST['comment-box'];

                $instructions = $_POST["instructions"];

            $sql = "INSERT INTO Recipe_Items (name, image, prepTime, cookTime, servingSize, difficulty, ingredients, instructions, prepTimeHour, cookTimeHour) VALUES 
                                            ('$recipeName', '$imageURL', '$prep_time_Minutes','$cook_time_Minutes', '$serving_size', '$difficulty', '$ingredients','$instructions','$prep_time_hours', '$cook_time_hours')";


            if ($conn->query($sql) === TRUE) {
            echo "<p>Event data saved successfully</p>";
            
            } else {
            
            }

            
        }


//end of form info

/*
//date variable
$sentDate = date("m/j/Y");

//recipent confirmation email
    $to = $_POST['email'];	//pull email address from the form data

//my inbox email address 
    $toInboxEmail = 'angelgberbertmc@gmail.com';
    //$toInboxEmail = 'info@angelberber.com';		

//subject for user side email 
    $subject = "Thank you for your response";	//This is the message that will be sent back to the person who sent you a message from your contact form. 

//subject for inbox side email
    $inboxSubject = "Form response:" . $userServiceNeeded;

//headers
    $headers = "From: Sender <info@angelberber.com>\r\n";
    $headers .= "Reply-To: <info@angelberber.com>\r\n";
    $headers .="Content-type: text/html\r\n";


    $inboxHeaders = "From: Sender <info@angelberber.com>\r\n";
    $inboxHeaders .= "Reply-To: <info@angelberber.com>\r\n";
    $inboxHeaders .= "Content-type: text/html\r\n";





$fromEmail = "info@angelberber.com";		//Change the email address within the quotes to be YOUR host server email address.  



//Start of email body for the user side email
$emailBody = 
                "
                <div style ='width: 30%;
                height: 750px;
                border-radius: 25px;
                background-color: #537fe7;
                
                font-size: 18px; 
                color:black;'>
                    <h1>Hello, $recipeName</h1>

                    <b>We greatly appreciate you reaching out to us</b>
                        <p>We will review your form and will get back to you as soon as we can</p>

                        <p>Recipe name: '<b>' $recipeName '</b>' </p>

                        <p>Email address '<b>' $userEmail '</b>' </p>

                        <p>Services Needed '<b>' $userServiceNeeded '</b>' </p>

                        <p>Comments <?php echo '<b>' $userComments '</b>' </p>
                                
                        <p>If you have questions or need help, reach out at info@angelberber.com.</p>

                        <p>Date sent $sentDate</p>
                    <h3>Our regards,</h3>
                    <h3>Team</h3>
                </div>";
//end of email body


// start of inbox side email
$inboxEmailBody = 
                "<div style ='
                width: 30%;
                height: 750px;
                border-radius: 25px;
                background-color: #537fe7;
                font-size: 18px;
                color:black;'>


                <h1>Response form results</h1>

                <ul>
                <lable>User name </lable>
                <li> $userName</li>
                <br>

                <lable>User email </lable>
                <li> $userEmail</li>
                <br>

                <lable>Service needed from user </lable>
                <li> $userServiceNeeded</li>
                <br>

                <lable>User comments </lable>
                <li> $userComments </li>
                </ul>

                <p>Date sent $sentDate</p>

                </div>
                ";
//end of inbox side email

//THIS MAIL FUNCTIONS SENDS AN EMAIL TO OUR INBOX WITH THE FORM RESULTS
    mail($toInboxEmail,$inboxSubject,$inboxEmailBody,$inboxHeaders);

//SENDS EMAIL TO THE USER THAT FILLED OUT THE FORM
    mail($to,$subject,$emailBody,$headers);
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>

<link rel="stylesheet" type="text/css" href="pageCSS.css"/>
<style>


</style>


</head>


<body>
<div class = "formContainer"> <!--Start of container div-->
<h1>Thank you for your response</h1>


<p> We wil get back to you as soon as we can.</p>




<p> Based upon your responses we will provide the following information in our confirmation email to you at <?php echo "<b>" . $_POST["email"] . "</b>"?>. </p>




       
        <p style="border-bottom: 1px solid black; width: 450px;">Name <?php echo "<b>" . $userName . "</b>"?> </P>

        <p style="border-bottom: 1px solid black; width: 450px;">Email address <?php echo "<b>" . $userEmail. "</b>"?> </P>

        <p style="border-bottom: 1px solid black; width: 450px;">Services Needed <?php echo "<b>" . $userServiceNeeded . "</b>"?> </P>

        <p style="border-bottom: 1px solid black; width: 450px;">Comments <?php echo "<b>" . $userComments ."</b>"?> </P>

        

<span> <p>View your new recipe<a style = "color: white; text-decoration: none;"href="Recipes.php">here!</a></p></span>
<div> <!-- End of container-->
</body>

</html>
*/

