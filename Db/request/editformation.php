<?php 
echo "editions";
$data = $_POST['donne'];
$data = explode(",",$data);
$nom = $data[0];
$desc = $data[1];
$img = $data[2];
$heur = $data[3];
$prix= $data[4];
var_dump($data);
?>