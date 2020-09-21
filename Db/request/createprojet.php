
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

if($nom AND $desc AND $img AND $heure AND $techno AND $createur AND $prix !=""){
    $pdo = pdo_connect_mysql();

$stmt = $pdo->prepare('INSERT INTO projet (`nom`,`description`,`nomHeure`,`technoMaitriser`,`prix`,`creerPar`,`img`)
 VALUES (?, ?, ?, ?, ?, ?,?)');
$stmt->execute([$nom, $desc, $heure, $techno, $prix, $createur,$img]);
echo "<br>";
echo "le projet à bien été créer";
echo "<a href='dashboard.php'>retour</a>";
}else{
    echo "impossible d'ajouter un projet veuilliez remplire tous les champs";
    echo "<br>";
    echo "<a href='dashboard.php'>retour</a>";
    

}




?>