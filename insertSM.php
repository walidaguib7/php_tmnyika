<?php

include '../connect.php';

$id_sm = htmlspecialchars($_POST['id_sm']);
$date_dsm = htmlspecialchars($_POST['date_dsm']);
$date_fsm = htmlspecialchars($_POST['date_fsm']);
$nbr = htmlspecialchars($_POST['nbr']);
$id_seciton = htmlspecialchars($_POST['id_seciton']);





$query = $conn->prepare('INSERT INTO sm (id_sm,date_dsm,date_fsm,nbr,id_seciton)
 values (?,?,?,?,?)');

$query->execute(array($id_sm, $date_dsm, $date_fsm, $nbr, $id_seciton));
