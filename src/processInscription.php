<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
/*
 * $email = $_POST['email'] ;
$firstName = $_POST['firstName'] ;
$lastName = $_POST['lastName'] ;
$password = $_POST['password'] ;

$connexionWithStudentBD = new studentBD("students") ;
$unique_code = uniqid() ;
$succesInscription = $connexionWithStudentBD->signUp($email , $unique_code, $firstName , $lastName , $password  ) ;
if($succesInscription) {
    $mailDeConfirmation = new MailConfirmation($email, $unique_code);
    $mailDeConfirmation->sendMail();
}

$mail = new PHPMailer() ;
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";

// optional
// used only when SMTP requires authentication
$mail->SMTPAuth = true;
$mail->Username = 'ltconlineschool@gmail.com';
$mail->Password = 'learntocreate';
$mail->setFrom('ltconlineschool@gmail.com', 'First Last');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('racembenrhayem@insat.u-carthage.tn', 'John Doe');
//Set the subject line
$mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('Acceuil.html') , false);
//Replace the plain text body with one created manually
$mail->Body = '<html> <h1>helloo</h1></html>';
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

*/