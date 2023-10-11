<?php

include '../connect.php';

$id_proph = htmlspecialchars($_POST['id_proph']);
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$garde = htmlspecialchars($_POST['garde']);
$adrs = htmlspecialchars($_POST['adrs']);
$date_N  = htmlspecialchars($_POST['date_N']);
$ville_date_n = htmlspecialchars($_POST['ville_date_n']);


$query = $conn->prepare(
    'INSERT INTO proph
(id_proph , nom , prenom , garde , adrs , date_N , ville_date_n   ) 
values (?,?,?,?,?,?,?)'
);

$query->execute(array($id_proph, $nom, $prenom, $garde, $adrs, $date_N, $ville_date_n));
