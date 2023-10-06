<?php

include '../connect.php';

$id_dip = htmlspecialchars($_POST['id_dip']);
$nom_dip = htmlspecialchars($_POST['nom_dip']);
$niveau = htmlspecialchars($_POST['niveau']);




$query = $conn->prepare('INSERT INTO dip (id_dip,nom_dip,niveau) values (?,?,?)');

$query->execute(array($id_dip, $nom_dip, $niveau));
