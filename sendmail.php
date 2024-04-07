<?php
$to_email = "ajaysarasaniya11@gmail.com ";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by ajaysarasaniya";
$headers = "From:asarasaniya375@rku.ac.in";

// mail($to_email, $subject, $body, $headers);
// echo "mail sent.";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>



<div><p><?php  echo $_SESSION['msg'];  ?></p></div>


