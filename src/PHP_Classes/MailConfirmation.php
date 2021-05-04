<?php
use PHPMailer\PHPMailer\PHPMailer;


class MailConfirmation
{
    private $_code_unique;
    private $_email;
    private $_subjectOfMessage = "confirmation du compte";
    private $_message;


   

    public function __construct($email, $code_unique)
    {
        $this->_code_unique = $code_unique;
        $this->_email = $email;
    }

    public  function  setMessage() {
       $this->_message= '
      
        Confirmation de votre inscription.
        merci pour ne pas répondre à cet email.
        pour confirmer votre inscription veuillez cliquer sur lien ci-dessous
       http://localhost:63342/projetweb/src/confirmationInscription.php?email='
           . $this->_email.'&code_unique='.$this->_code_unique.'
       

       
      
    
    
    
';
    }
    public function sendEmail() {
        $this->setMessage();
        $mail = new PHPMailer() ;
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        /*
         * username and password cant be showen
         *
         */
        $mail->Username = 'ltconlineschool@gmail.com';
        $mail->Password = '*************';
        $mail->setFrom('ltconlineschool@gmail.com', 'Learn_To_Create');
        $mail->addAddress($this->_email);
        $mail->Subject = $this->_subjectOfMessage;
        $mail->Body = $this->_message ;
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            header('hello');
            header('location:GoCheckEmail.php');
        }

    }



}


