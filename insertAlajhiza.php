<?php

include '../connect.php';

$id_elajhiza = htmlspecialchars($_POST['id_elajhiza']);
$nom_elajhiza = htmlspecialchars($_POST['nom_elajhiza']);
$id_alanmate = htmlspecialchars($_POST['id_alanmate']);




$query = $conn->prepare('INSERT INTO alajhiza (id_elajhiza,nom_elajhiza,id_alanmate) values (?,?,?)');

$query->execute(array($id_elajhiza, $nom_elajhiza, $id_alanmate));
