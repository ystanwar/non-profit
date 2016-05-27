<?php


require_once 'PHPMailer/PHPMailerAutoload.php';
require 'PHPMailer/class.phpmailer.php';
$mail = new PHPMailer;
$mail->SMTPDebug = 1;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host ='smtp.gmail.com'   ;	                      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password

//$email=$_POST["email"];
//$pass=$_POST["password"];
 //echo $email;
 //echo $pass;

//$mail->Username ='$email';
//$mail->Password ='&pass';
$mail->SMTPSecure = 'tsl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('14bce138@nirmauni.ac.in', 'Mailer');
$mail->addAddress('14bce133@nirmauni.ac.in', 'harsh');     // Add a recipient
$mail->addAddress('14bce126@nirmauni.ac.in');               // Name is optional
$mail->addReplyTo('14bce138@nirmauni.ac.in', 'Information');
$mail->addCC('14bce138@nirmauni.ac.in');
$mail->addBCC('14bce138@nirmauni.ac.in');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'automated mail generator in PHP';
$mail->Body    = 'Pls ignore previous mail';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


?>
