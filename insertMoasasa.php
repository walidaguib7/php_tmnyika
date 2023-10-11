<?php

include '../connect.php';

$nom_moasasa = htmlspecialchars($_POST['nom_moasasa']);
$type_moasasa = htmlspecialchars($_POST['type_moasasa']);
$adras_moasasa = htmlspecialchars($_POST['adras_moasasa']);
$tel_moasasa = htmlspecialchars($_POST['tel_moasasa']);
$fax_moasasa = htmlspecialchars($_POST['fax_moasasa']);
$baladia  = htmlspecialchars($_POST['baladia']);
$code_postale_moasasa = htmlspecialchars($_POST['code_postale_moasasa']);
$amail_moasasa = htmlspecialchars($_POST['amail_moasasa']);


$query = $conn->prepare(
    'INSERT INTO moasasa
(nom_moasasa , type_moasasa , adras_moasasa ,
 tel_moasasa , fax_moasasa , baladia , code_postale_moasasa , amail_moasasa   ) 
values (?,?,?,?,?,?,?,?)'
);

$query->execute(array(
    $nom_moasasa, $type_moasasa, $adras_moasasa,
    $tel_moasasa, $fax_moasasa, $baladia, $code_postale_moasasa, $amail_moasasa
));
