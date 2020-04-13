<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
try {
        // Instantiation and passing `true` enables exceptions
	    $mail = new PHPMailer(true);
	    //Server settings
	    $mail->SMTPDebug = 0;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'ishimweyvan90@gmail.com';                     // SMTP username
	    $mail->Password   = 'yvanbigjoe';                               // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('ishimweyvan90@gmail.com', 'Yvan');
	    $mail->addAddress('ishimweyvan90@gmail.com');     // Add a recipient
	    $mail->addReplyTo('ishimweyvan90@gmail.com', 'Yvan');

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'watafaka mwa):';
	    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    echo '<p>Message has been sent to ' . $row->email . '</p>';
	} catch (Exception $e) {
	    echo "<p>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>";
	}
    
    