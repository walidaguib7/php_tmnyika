<?php

include '../connect.php';

$ID_wali = htmlspecialchars($_POST['ID_wali']);
$nom_wali = htmlspecialchars($_POST['nom_wali']);
$prenom_wali = htmlspecialchars($_POST['prenom_wali']);
$nom_wali_fr = htmlspecialchars($_POST['nom_wali_fr']);
$prenom_wali_fr = htmlspecialchars($_POST['prenom_wali_fr']);
$code_poustale  = htmlspecialchars($_POST['code_poustale']);
$baladia = htmlspecialchars($_POST['baladia']);
$tel_wali = htmlspecialchars($_POST['tel_wali']);
$amail_wali = htmlspecialchars($_POST['amail_wali']);
$adrass_wali = htmlspecialchars($_POST['adrass_wali']);


$query = $conn->prepare(
    'INSERT INTO moasasa
(ID_wali , nom_wali , prenom_wali ,
 nom_wali_fr , prenom_wali_fr , code_poustale , baladia , tel_wali , amail_wali , adrass_wali    ) 
values (?,?,?,?,?,?,?,?)'
);

$query->execute(array(
    $ID_wali, $nom_wali, $prenom_wali,
    $nom_wali_fr, $prenom_wali_fr, $code_poustale, $baladia, $tel_wali, $amail_wali, $adrass_wali
));
