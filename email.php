<?php
	mail(
		/* to */ 'support@gene-eg.com',
		
		/* subject */ 'Testing emails',
		
		/* message */ "<b>Hello Abc,</b><br>" .
		"<i>This is just a test email.</i><br>" .
		"Regards.",
		
		/* headers */ "From: Bill Gates <billgates@microsoft.com>\r\n" .
		"MIME-Version: 1.0\r\n" .
		"Content-type: text/html; charset=iso-8859-1\r\n"
	);
	
	function send_mail($subject, $message){
		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'user@example.com';                 // SMTP username
		$mail->Password = 'secret';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('from@example.com', 'Mailer');
		$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
		$mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo('info@example.com', 'Information');
		$mail->addCC('cc@example.com');
		$mail->addBCC('bcc@example.com');

		$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = $subject;
		$mail->Body    = $message;
		$mail->AltBody = strip_tags($message);

		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Message has been sent';
		}
	}
	
	send_mail('Login alert', "$username signed in at $time.");
	
	