<?php

include '../connect.php';

$num_spec = htmlspecialchars($_POST['num_spec']);
$ID_sp = htmlspecialchars($_POST['ID_sp']);
$nom_sp = htmlspecialchars($_POST['nom_sp']);
$duree = htmlspecialchars($_POST['duree']);
$shorote = htmlspecialchars($_POST['shorote']);
$id_dip  = htmlspecialchars($_POST['id_dip']);
$id_sho = htmlspecialchars($_POST['id_sho']);
$id_elajhiza = htmlspecialchars($_POST['id_elajhiza']);

$query = $conn->prepare(
    'INSERT INTO spec 
(num_spec , ID_sp , nom_sp , duree , shorote , id_dip , id_sho , id_elajhiza   ) 
values (?,?,?,?,?,?,?,?)'
);

$query->execute(array($num_spec, $ID_sp, $nom_sp, $duree, $shorote, $id_dip, $id_sho, $id_elajhiza));
