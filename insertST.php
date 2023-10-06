<?php

include '../connect.php';

$id_mo = htmlspecialchars($_POST['id_mo']);
$typemo = htmlspecialchars($_POST['typemo']);




$query = $conn->prepare('INSERT INTO st (id_mo,typemo) values (?,?)');

$query->execute(array($id_mo, $typemo));
