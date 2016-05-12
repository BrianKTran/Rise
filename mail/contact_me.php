<?php

$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
   {
   ?>
   <form  action="" method="POST" enctype="multipart/form-data">
   <input type="hidden" name="action" value="submit">
   Your name:<br>
   <input name="name" type="text" value="" size="30"/><br>
   Your email:<br>
   <input name="email" type="text" value="" size="30"/><br>
   Your message:<br>
   <textarea name="message" rows="7" cols="30"></textarea><br>
   <input type="submit" value="Send email"/>
   </form>
   <?php
   } 
else                /* send the submitted data */
   {
   $name=$_REQUEST['name'];
   $email=$_REQUEST['email'];
   $message=$_REQUEST['message'];
   if (($name=="")||($email=="")||($message==""))
       {
       echo "All fields are required, please fill <a href=\"\">the form</a> again.";
       }
   else{        
       $from="From: $name<$email>\r\nReturn-path: $email";
       $subject="Message sent using your contact form";
       mail("brianktran810@gmail.com", $subject, $message, $from);
       echo "Email sent!";
       }
   }  
/*
=======
<<<<<<< HEAD
>>>>>>> nirav
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'brian@hookipapro.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
<<<<<<< HEAD
return true;      
   
?>)
=======
return true;			
=======
if($_POST) {

    $to_Email = "inf.fiction@rocketmail.com"; //Replace with recipient email address
   
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
   
        //exit script outputting json data
        $output = json_encode(
        array(
            'type'=> 'error',
            'text' => 'Request must come from Ajax'
        ));
       
        die($output);
    }
   
    //check $_POST vars are set, exit if any missing
    if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userSubject"]) || !isset($_POST["userMessage"])) {
        $output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
        die($output);
    }
   
    //additional php validation
    if(empty($_POST["userName"])) {
        $output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
        die($output);
    }
    if(!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
        die($output);
    }
    if(strlen($_POST["userMessage"])<5) {
        $output = json_encode(array('type'=>'error', 'text' => 'Too short message! Please enter something.'));
        die($output);
    }
   
    //proceed with PHP email.
    $headers = 'From: '.$_POST["userEmail"].'' . "\r\n" .
    'Reply-To: '.$_POST["userEmail"].'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
   
        // send mail
    $sentMail = @mail($to_Email, $_POST["userSubject"], $_POST["userMessage"] .'  -'.$_POST["userName"], $headers);
   
    if(!$sentMail) {
        $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
        die($output);
    } else {
        $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$_POST["userName"] .' Thank you for your email'));
        die($output);
    }
}
*/   

?>

