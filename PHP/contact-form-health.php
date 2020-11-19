<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$number = $_POST['phone'];
$email_form = 'iamekke@yahoo.com';

$email_subject = "ახალი შეტყობინება";
$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"User Number: $number.\n"
				"User Message: $message.\n",
				.
$to = "allwinner1998@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header("Location:health.html")
?>