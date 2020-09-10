<?php 
require '../db.php';

echo "editions";
$data = $_POST['donne'];
$data = explode(",",$data);
$id = $data[0];
$nom = $data[1];
$desc = $data[2];
$heur = $data[3];
$technos = $data[4];
$prix= $data[5];
$img = $data[6];

echo $id;
echo "<br>";
echo $id;
echo "<br>";echo $nom;
echo "<br>";echo $desc;
echo "<br>";echo $heur;
echo "<br>";echo $technos;
echo "<br>";echo $prix;
echo "<br>";echo $img;
echo "<br>";
var_dump($data);
$pdo = pdo_connect_mysql();

$sql1 =("UPDATE `projet` SET `nom`='$nom',`description`='$desc',`nomHeure`=$heur,`technoMaitriser`='$technos',`prix`=$prix,`img`='$img' WHERE `id`=$id");
$stmt= $pdo->prepare($sql1);
$stmt->execute();

          echo "good";
           ?>
           
           
   