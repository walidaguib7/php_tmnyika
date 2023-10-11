<?php

include '../connect.php';

$id_satage = htmlspecialchars($_POST['id_satage']);
$tarik_satarte = htmlspecialchars($_POST['tarik_satarte']);
$tarik_fani = htmlspecialchars($_POST['tarik_fani']);
$nom_de_tarboossee = htmlspecialchars($_POST['nom_de_tarboossee']);
$makane_tarboossee = htmlspecialchars($_POST['makane_tarboossee']);
$noute_de_stage  = htmlspecialchars($_POST['noute_de_stage']);
$id_st = htmlspecialchars($_POST['id_st']);


$query = $conn->prepare(
    'INSERT INTO satage
(id_satage , tarik_satarte , tarik_fani , nom_de_tarboossee , makane_tarboossee , noute_de_stage , id_st   ) 
values (?,?,?,?,?,?,?)'
);

$query->execute(array($id_satage, $tarik_satarte, $tarik_fani, $nom_de_tarboossee, $makane_tarboossee, $noute_de_stage, $id_st));
