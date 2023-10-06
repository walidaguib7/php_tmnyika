<?php

include '../connect.php';

$id_users = htmlspecialchars($_POST['id_users']);
$name_users = htmlspecialchars($_POST['name_users']);
$password_users = htmlspecialchars($_POST['password_users']);
$num_sire_disk_dure = htmlspecialchars($_POST['num_sire_disk_dure']);





$query = $conn->prepare('INSERT INTO users (id_users,name_users,password_users,num_sire_disk_dure)
 values (?,?,?,?)');

$query->execute(array($id_users, $name_users, $password_users, $num_sire_disk_dure));
