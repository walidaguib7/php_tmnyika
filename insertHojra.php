<?php

include '../connect.php';

$id_num = htmlspecialchars($_POST['id_num']);
$mon_hojra = htmlspecialchars($_POST['mon_hojra']);





$query = $conn->prepare('INSERT INTO hojra (id_num,mon_hojra) values (?,?)');

$query->execute(array($id_num, $mon_hojra));
