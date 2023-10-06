<?php

include '../connect.php';

$id_alanmate = htmlspecialchars($_POST['id_alanmate']);
$nom_alanmate = htmlspecialchars($_POST['nom_alanmate']);




$query = $conn->prepare('INSERT INTO alanmate (id_alanmate,nom_alanmate) values (?,?)');

$query->execute(array($id_alanmate, $nom_alanmate));
