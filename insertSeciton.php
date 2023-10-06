<?php

include '../connect.php';

$id_se = htmlspecialchars($_POST['id_se']);
$date_d = htmlspecialchars($_POST['date_d']);
$date_f = htmlspecialchars($_POST['date_f']);
$ID_D = htmlspecialchars($_POST['ID_D']);
$num_spec = htmlspecialchars($_POST['num_spec']);
$id_proph  = htmlspecialchars($_POST['id_proph']);


$query = $conn->prepare(
    'INSERT INTO Seciton 
(id_se , date_d , date_f , ID_D , num_spec , id_proph    ) 
values (?,?,?,?,?,?)'
);

$query->execute(array($id_se, $date_d, $date_f, $ID_D, $num_spec, $id_proph));
