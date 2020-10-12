
<?php
require '../db.php';

$data = $_POST['donne'];

$data = explode(",",$data);
$nom = $data[0];
$desc = $data[1];
$img = $data[2];
$heur = $data[3];
$prix= $data[4];
$createur = $data[5];

if($nom AND $desc AND $img AND $heur AND $prix !=""){
    $pdo = pdo_connect_mysql();

$stmt = $pdo->prepare('INSERT INTO formation (`libelle`,`libelleLong`,`img`,`creerPar`,`nomHeureFormation`,`prixFormation`)
 VALUES (?, ?, ?, ?, ?, ?)');
$stmt->execute([$nom, $desc, $img, $createur, $heur, $prix,]);

}




?>