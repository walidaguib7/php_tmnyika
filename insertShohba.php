<?php

include '../connect.php';

$id_sho = htmlspecialchars($_POST['id_sho']);
$nom_shohba = htmlspecialchars($_POST['nom_shohba']);
$code_shohba = htmlspecialchars($_POST['code_shohba']);




$query = $conn->prepare('INSERT INTO shohba (id_sho,nom_shohba,code_shohba) values (?,?,?)');

$query->execute(array($id_sho, $nom_shohba, $code_shohba));
