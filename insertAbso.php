<?php

include '../connect.php';

$id_abso = htmlspecialchars($_POST['id_abso']);
$id_st = htmlspecialchars($_POST['id_st']);
$id_programme = htmlspecialchars($_POST['id_programme']);
$date_abso = htmlspecialchars($_POST['date_abso']);






$query = $conn->prepare('INSERT INTO sm (id_abso,id_st,id_programme,date_abso)
 values (?,?,?,?)');

$query->execute(array($id_abso, $id_st, $id_programme, $date_abso));
