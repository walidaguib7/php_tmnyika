<?php

include '../connect.php';

$id_tabrire = htmlspecialchars($_POST['id_tabrire']);
$id_abso = htmlspecialchars($_POST['id_abso']);
$sabbabe = htmlspecialchars($_POST['sabbabe']);




$query = $conn->prepare('INSERT INTO tabrire (id_tabrire,id_abso,sabbabe) values (?,?,?)');

$query->execute(array($id_tabrire, $id_abso, $sabbabe));
