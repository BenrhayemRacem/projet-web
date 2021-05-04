<?php

session_start() ;
include_once 'autoLoad.php' ;

$email = $_POST["email"];
$password = $_POST["password"] ;
$studentsBD = new studentBD('students') ;

if ( ! $studentsBD->getStudentByEmail($email)) {
    header('location:login.php');
    $_SESSION['show'] = 1 ;
    exit;
}
elseif (! $studentsBD->signInVerification($email , $password)) {
    header('location:login.php');
    $_SESSION['show'] = 2 ;
    exit;
}
else {
    $_SESSION['user'] = $email ;



}



