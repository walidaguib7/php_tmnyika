<?php

include '../connect.php';

$id_programme = htmlspecialchars($_POST['id_programme']);
$id_mada = htmlspecialchars($_POST['id_mada']);
$id_sm = htmlspecialchars($_POST['id_sm']);
$id_haojra = htmlspecialchars($_POST['id_haojra']);
$daye = htmlspecialchars($_POST['daye']);
$timed  = htmlspecialchars($_POST['timed']);
$moda = htmlspecialchars($_POST['moda']);


$query = $conn->prepare(
    'INSERT INTO programme
(id_programme , id_mada , id_sm , id_haojra , daye , timed , moda   ) 
values (?,?,?,?,?,?,?)'
);

$query->execute(array($id_programme, $id_mada, $id_sm, $id_haojra, $daye, $timed, $moda));
