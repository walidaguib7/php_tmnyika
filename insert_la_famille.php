<?php

include '../connect.php';

$id_lafami = htmlspecialchars($_POST['id_lafami']);
$dernier_etab = htmlspecialchars($_POST['dernier_etab']);
$mihnat_pere = htmlspecialchars($_POST['mihnat_pere']);
$mihnat_mere = htmlspecialchars($_POST['mihnat_mere']);
$nom_pere = htmlspecialchars($_POST['nom_pere']);
$nom_mere  = htmlspecialchars($_POST['nom_mere']);
$nbr_frr = htmlspecialchars($_POST['nbr_frr']);
$ordre_frr = htmlspecialchars($_POST['order_frr']);

$query = $conn->prepare(
    'INSERT INTO la_famelle 
(id_lafami , dernier_etab , mihnat_pere , mihnat_mere , nom_pere , nom_mere , nbr_frr , ordre_frr   ) 
values (?,?,?,?,?,?,?,?)'
);

$query->execute(array($id_lafami, $dernier_etab, $mihnat_pere, $mihnat_mere, $nom_pere, $nom_mere, $nbr_frr, $ordre_frr));
