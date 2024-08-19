<?php
	$to = "youremail here";  // Your email here
	$from = $_REQUEST['email'];
	$headers = "From: $from";
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];
	$subject = "Contact Form from Child Website";

	$fields = array();
	$fields{"email"} = "Your Email";

	$body = "Here is what was sent, form 'NEWSLETTER SIGNUP':\n\n";
	foreach($fields as $a => $b){
		$body .= sprintf("%20s:%s\r\n",$b,$_REQUEST[$a]);
	}
	$send = mail($to, $subject, $body, $headers);
?>

