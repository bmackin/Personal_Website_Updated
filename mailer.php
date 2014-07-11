<?php
if(isset($_POST['submit'])) {

	$to = "mackin.beth@gmail.com";
	$subject = "New form submission";

	//data the visitor provided
	$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$email_field = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
	$message_field = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

	//construct message
	$body = "A visitor of www.elizabethmackin.ca has sent the following message:\n\n From: $name_field\n\n Email: $email_field\n\n Comment/Enquiry:\n\n $message_field";

	//mail to
	mail($to, $subject, $body);

	//redirect to confirmation
	header('Location: confirmation.html');
}
// 	else {

// }
?>
