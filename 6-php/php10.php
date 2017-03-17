<?php

$emailTo = "andras.komaromy@fu-berlin.de";
$subject = "I hope this works!";
$body = "I think you're great!";
$headers = "From: bobby@gugu.com";

if (mail($emailto, $subject, $body, $headers)) {
	echo "The mail was sent successfully.";
}else{
	echo "The email could not be sent.";
}

?>

