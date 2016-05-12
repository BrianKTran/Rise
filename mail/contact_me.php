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
// Check for empty fields
if(empty($_POST['name'])        ||
   empty($_POST['email'])       ||
   empty($_POST['phone'])       ||
   empty($_POST['message']) ||
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
$to = 'brianktran810@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address"; 
mail($to,$email_subject,$email_body,$headers);
return true;      
*/      
?>)
