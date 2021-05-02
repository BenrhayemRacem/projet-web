<?php

session_start() ;
include_once 'autoLoad.php' ;
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

$email = $_POST['email'] ;
$firstName = $_POST['firstName'] ;
$lastName = $_POST['lastName'] ;
$password = $_POST['password'] ;



$connexionWithStudentBD = new studentBD("students") ;

$unique_code = uniqid() ;
$succesInscription = $connexionWithStudentBD->signUp($email , $unique_code, $firstName , $lastName , $password  ) ;

if($succesInscription) {
    $mailDeConfirmation = new MailConfirmation($email, $unique_code);
    $mailDeConfirmation->sendEmail();
}
else {

    header('location:pageInscription.php')  ;
    $_SESSION["show"] = 1 ;
    exit ;

}