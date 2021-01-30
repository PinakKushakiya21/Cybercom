<?php
	// video 99
	$to = 'princekushakiya610@gmail.com';
	$subject = 'This is an email';
	$body = 'This is a test email'. "\n\n".'HOpe you got it.';
	$headers = 'From : actorsstudiofilms2020@gmail.com';

	if (mail($to, $subject, $headers)) {
		echo "Email has been sent".$to;
	}
	else {
		echo "There was an error sending email.";
	}

?>