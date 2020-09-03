<?php 
session_start();
require '../db.php';

$id = $_POST['donne'];

$pdo = pdo_connect_mysql();

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

$stmt = $pdo->prepare('INSERT INTO panier (`libelle`,`LibelleLong`,`prix`,`Appartient`,`img`)
 VALUES (?,?,?,?,?)');
 $stmt->execute([$Titre, $descriptions, $prix, $perso,$img]);
 echo "<br>";
echo "votre achat a bien été effectuer";
echo "<a href='dashboard.php'>retour</a>";

endforeach;

?>