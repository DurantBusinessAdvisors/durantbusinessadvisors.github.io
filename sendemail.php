<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
'message'=>'Thank you for contacting us. We will contact you as soon as possible. '
);

$firstname = @trim(stripslashes($_POST['first_name'])); 
$lastname = @trim(stripslashes($_POST['last_name'])); 
$email = @trim(stripslashes($_POST['email'])); 
$subject = "Website Contact Form Submission";
$message = @trim(stripslashes($_POST['message']));

$email_from = $email;
$email_to = 'info@durantbusinessadvisors.com';//replace with your email

$body = 'Name: ' . $firstname . $lastname . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

echo json_encode($status);
die;