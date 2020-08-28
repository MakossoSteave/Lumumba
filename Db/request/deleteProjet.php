<?php 
require '../db.php';

$id = $_POST['donne'];

$pdo = pdo_connect_mysql();

$sql1 =("DELETE  from projet WHERE id='$id'");
$stmt= $pdo->prepare($sql1);
$stmt->execute();
?>