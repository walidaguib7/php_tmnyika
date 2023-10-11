<?php

include '../connect.php';

$id_note = htmlspecialchars($_POST['id_note']);
$id_mada = htmlspecialchars($_POST['id_mada']);
$id_sm = htmlspecialchars($_POST['id_sm']);
$id_stagur = htmlspecialchars($_POST['id_stagur']);
$note1 = htmlspecialchars($_POST['note1']);
$note2      = htmlspecialchars($_POST['note2	']);
$ioxam = htmlspecialchars($_POST['ioxam']);
$ratrabage = htmlspecialchars($_POST['ratrabage']);
$moyen = htmlspecialchars($_POST['moyen']);


$query = $conn->prepare(
    'INSERT INTO note
(id_note , id_mada , id_sm ,
 id_stagur , note1 , note2	 , ioxam , ratrabage , moyen   ) 
values (?,?,?,?,?,?,?,?,?)'
);

$query->execute(array(
    $id_note, $id_mada, $id_sm,
    $id_stagur, $note1,
    $note2, $ioxam, $ratrabage, $moyen
));
