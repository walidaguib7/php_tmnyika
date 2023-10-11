<?php

include '../connect.php';

$num_c = htmlspecialchars($_POST['num_c']);
$type_u = htmlspecialchars($_POST['type_u']);
$nom_u = htmlspecialchars($_POST['nom_u']);
$tab_u = htmlspecialchars($_POST['tab_u']);
$adress = htmlspecialchars($_POST['adress']);
$tel  = htmlspecialchars($_POST['tel']);
$email = htmlspecialchars($_POST['email']);
$num_mo = htmlspecialchars($_POST['num_mo']);

$query = $conn->prepare(
    'INSERT INTO contrat 
(num_c , type_u , nom_u , tab_u , adress , tel , email , num_mo   ) 
values (?,?,?,?,?,?,?,?)'
);

$query->execute(array($num_c, $type_u, $nom_u, $tab_u, $adress, $tel, $email, $num_mo));
