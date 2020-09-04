<?php 
session_start();
require '../db.php';
$pdo = pdo_connect_mysql();
if(isset($_POST['donne'])){
    $id = $_POST['donne'];



$sql1 =("SELECT * from formation WHERE id='$id'");
$req = $pdo->prepare('select * from formation where id =?');

$req->execute([$id]);
$achat=$req->fetchAll(PDO::FETCH_ASSOC); 
var_dump($achat);
foreach ($achat as $achat):   
$id= $achat['id'];
$Titre= $achat['libelle'];
$descriptions= $achat['libelleLong'];
$appartient= $achat['creerPar'];
$prix= $achat['prixFormation'];
$img = $achat['img'];
$perso = $_SESSION['email'];

$stmt = $pdo->prepare('INSERT INTO panier (`libelle`,`LibelleLong`,`prix`,`Appartient`,`img`,`type`)
 VALUES (?,?,?,?,?,?)');
 $stmt->execute([$Titre, $descriptions, $prix, $perso,$img,1]);
 echo "<br>";
echo "votre achat a bien été effectuer";
echo "<a href='dashboard.php'>retour</a>";

endforeach;
}else{
    echo $_POST['projet'];
 $id =$_POST['projet'];
$req = $pdo->prepare('select * from projet where id =?');
$req->execute([$id]);
$achat=$req->fetchAll(PDO::FETCH_ASSOC); 
var_dump($achat);
foreach ($achat as $achat):   
$id= $achat['id'];
$Titre= $achat['nom'];
$descriptions= $achat['description'];
$heur= $achat['nomHeure'];
$techno= $achat['technoMaitriser'];
$prix = $achat['prix'];
$perso = $_SESSION['email'];
$img = $achat['img'];


$stmt = $pdo->prepare('INSERT INTO panier (`libelle`,`LibelleLong`,`prix`,`Appartient`,`img`,`techno`,`heure`,`type`)
 VALUES (?,?,?,?,?,?,?,?)');
 $stmt->execute([$Titre, $descriptions, $prix, $perso,$img,$techno,$heur,2]);
 echo "<br>";
echo "<script>alert('votre achat a bien été effectuer');</script>";
echo "<a href='dashboard.php'>retour</a>";

endforeach;
}


?>