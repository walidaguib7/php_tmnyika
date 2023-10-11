<?php

include '../connect.php';

$id_mada = htmlspecialchars($_POST['id_mada']);
$nom_mada = htmlspecialchars($_POST['nom_mada']);
$coef = htmlspecialchars($_POST['coef']);
$id_proph = htmlspecialchars($_POST['id_proph']);
$num_spec = htmlspecialchars($_POST['num_spec']);



$query = $conn->prepare(
    'INSERT INTO mada
(id_mada , nom_mada	 , coef , id_proph , num_spec ) 
values (?,?,?,?,?)'
);

$query->execute(array($id_mada, $nom_mada, $coef, $id_proph, $num_spec));
