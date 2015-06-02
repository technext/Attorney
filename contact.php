<?php
	$to      = 'test@test.com';
	$email   = $_POST['email'];

	$name  = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['comments'];

	$headers = 'From: http://technext.github.io/Attorney/'. '<'.$email.'>' . "\r\n" .
		'Reply-To: '. $email . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	echo "<script>window.location.href = 'http://technext.github.io/Attorney/';</script>";
   
?>