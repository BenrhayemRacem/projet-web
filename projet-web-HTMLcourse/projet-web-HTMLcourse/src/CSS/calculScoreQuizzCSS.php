<?php

$score = 0 ;
$question1 = $_GET['question1'] ;
$question2 = $_GET['question2'] ;
$question3 = $_GET['question3'] ;
$question4 = $_GET['question4'] ;
$question5 = $_GET['question5'] ;
if ($question1== 'option3') $score++ ;
if ($question2== 'option2') $score++ ;
if ($question3== 'option3') $score++ ;
if ($question4== 'option1') $score++ ;
if ($question5== 'option2') $score++ ;


$moyenne= "votre score est {$score}/5   et";
echo $moyenne ;

$pourcentage = ($score *20) ;
echo " votre resultat est ".$pourcentage."%" ;


