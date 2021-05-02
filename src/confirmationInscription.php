<?php


include_once  'autoLoad.php' ;

$email = $_GET['email'] ;
$code_unique = $_GET['code_unique'] ;
$connexionAvecStudentBD = new studentBD('students') ;
if($connexionAvecStudentBD->getStudentByEmailAndCode($email , $code_unique)) {
    $connexionAvecStudentBD->setConfirmation($email , $code_unique) ;
    header('location:GoAccountConfirmed.php') ;
}
else {
    header('location:GoCheckcredentials.php');
}
