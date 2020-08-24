
<?php
require '../db.php';

$data = $_POST['donne'];

$data = explode(",",$data);
$nom = $data[0];
$desc = $data[1];
$heure = $data[2];
$techno = $data[3];
$prix = $data[4];
$createur = $data[5];
$img = $data[6];

var_dump($data);





?>