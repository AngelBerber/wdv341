
<?php 

//form info
$userName = $_POST['name'];

$userEmail = $_POST['email'];


$userComments = $_POST["comment"];
//end of form info

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


//$fromEmail = "info@angelberber.com";		//Change the email address within the quotes to be YOUR host server email address.  

//Start of email body for the user side email
$emailBody = 
                "
                <div style ='width: 30%;
                height: 750px;
                border-radius: 25px;
                background-color: #537fe7;
                font-size: 18px; 
                color:black;'>
                    <h1>Hello, $userName</h1>

                    <b>We greatly appreciate you reaching out to us</b>
                        <p>We will review your form and will get back to you as soon as we can</p>

                        <p>Name '<b>' $userName '</b>' </p>

                        <p>Email address '<b>' $userEmail '</b>' </p>

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

                <lable>User comments </lable>
                <li> $userComments </li>
                </ul>

                <p>Date sent $sentDate</p>

                </div>
                ";
//end of inbox side email

//THIS MAIL FUNCTIONS SENDS AN EMAIL TO OUR INBOX WITH THE FORM RESULTS
    mail($toInboxEmail,$inboxSubject,$inboxEmailBody,$inboxHeaders);

//SENDS A CONFIRMATION EMAIL TO THE USER THAT FILLED OUT THE FORM
    mail($to,$subject,$emailBody,$headers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="CSSStyle.css">
    <link rel="stylesheet" type ="text/css" href="CSSStyle.scss">

    <link rel="stylesheet" type ="text/css" href="CSSStyleMidSized.css">
    <link rel="stylesheet" type ="text/css" href="CSSStyleMidSized.css">

    <link rel="stylesheet" type ="text/css" href="CSSStyleSmallSized.scss">
    <link rel="stylesheet" type ="text/css" href="CSSStyleSmallSized.css">


    <script src="JavaScriptFile.js"></script> 
    <title>Recipe Manager</title>
</head>

<body>

    <header>

      <img src="Images/Logo.png" alt = "logo" class = "logo">
        <nav class="navbar">
          
            <ul class="nav-list">
              <li class="nav-item -top"><a href="Home.html">Home</a></li>
              <li class="nav-item -top"><a href="Recipes.php">Recipes</a></li>
              <li class="nav-item -top"><a href="AddRecipeForm.html">Add Recipe</a></li>
              <li class="nav-item -top"><a href="Contact.html">Contact</a></li>
              <li class="nav-item -top"><a href="login.html">Login</a></li>
            </ul>
          </nav>
        
        
          <div class = "innerBigTextBox">
        <h1>Confirmation</h1>
          </div>

          <div class = "innerTextBox">
            
              
          </div>

        
            </header>

<h1 style="text-align: center;">Thank you for your response</h1>


<p style="text-align: center;"> We wil get back to you as soon as we can.</p>




<p style="text-align: center;"> A confirmation email will be sent to you at <?php echo "<b>" . $_POST["email"] . "</b>"?>. </p>

        
            <footer>
              <div>
                <a href="https://www.linkedin.com/"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn Logo" class="social-icons"></a>
                <a href="https://github.com/"><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Github Logo" class="social-icons"></a>
              </div>
            </footer>
</body>

</html>