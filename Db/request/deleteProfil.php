<?php 
require '../db.php';

$id = $_POST['donne'];

$pdo = pdo_connect_mysql();


$sql1 =("UPDATE user SET token='Hjkslp56', isEmailConfirmed= 0 where id='$id'");
$stmt= $pdo->prepare($sql1);
$stmt->execute();


?>
