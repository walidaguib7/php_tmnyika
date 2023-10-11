<?php

include '../connect.php';

$ID_D = htmlspecialchars($_POST['ID_D']);
$anne = htmlspecialchars($_POST['anne']);
$moi = htmlspecialchars($_POST['moi']);
$day_mokabla = htmlspecialchars($_POST['day_mokabla']);
$day_exam = htmlspecialchars($_POST['day_exam']);
$day_start  = htmlspecialchars($_POST['day_start']);
$day_resultat = htmlspecialchars($_POST['day_resultat']);


$query = $conn->prepare(
    'INSERT INTO dawra
(ID_D , anne , moi , day_mokabla , day_exam , day_start , day_resultat   ) 
values (?,?,?,?,?,?,?)'
);

$query->execute(array($ID_D, $anne, $moi, $day_mokabla, $day_exam, $day_start, $day_resultat));
