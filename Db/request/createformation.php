
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
echo $nom;
echo "<br>";
echo $heur;
echo "<br>";
echo $prix;
echo "<br>";
echo $createur;
echo "<br>";
echo $desc;
echo "<br>";
echo $img;


if($nom AND $desc AND $img AND $heur AND $prix !=""){
    $pdo = pdo_connect_mysql();

$stmt = $pdo->prepare('INSERT INTO formation (`libelle`,`libelleLong`,`img`,`creerPar`,`nomHeureFormation`,`prixFormation`)
 VALUES (?, ?, ?, ?, ?, ?)');
$stmt->execute([$nom, $desc, $img, $createur, $heur, $prix,]);
echo "<br>";
echo "<a href='dashboard.php'>retour</a>";
}else{
    echo "impossible d'ajouter une nouvelle formations veuilliez remplire tous les champs";
    echo "<br>";
    echo "<a href='dashboard.php'>retour</a>";

}




?>