<?php

use function PHPSTORM_META\type;

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
foreach ($achat as $achat):   
$id= $achat['id'];
$Titre= $achat['nom'];
$descriptions= $achat['description'];
$heur= $achat['nomHeure'];
$techno= $achat['technoMaitriser'];
$prix = $achat['prix'];
$perso = $_SESSION['email'];
$img = $achat['img'];
$nom = $achat['creerPar'];
 
$data = explode(" ",$nom);
$nom=$data[0];
$prenom=$data[1];

echo "<br>";
$utilisateur = $pdo->prepare('select email from user where nom =? AND prenom =?');
$utilisateur->execute([$nom,$prenom]);
$utilisateurs=$utilisateur->fetchAll(PDO::FETCH_ASSOC); 
foreach($utilisateurs as $user):
    $mailing = $user['email'];
endforeach;
$checking = $pdo->prepare('select * from panier');
$checking->execute();
$check=$checking->fetchAll(PDO::FETCH_ASSOC);

if(empty($check)){
echo "check vide";
$stmt = $pdo->prepare('INSERT INTO panier (`libelle`,`LibelleLong`,`prix`,`Appartient`,`img`,`techno`,`heure`,`type`,`proprio`)
 VALUES (?,?,?,?,?,?,?,?,?)');
 $stmt->execute([$Titre, $descriptions, $prix, $perso,$img,$techno,$heur,2,$mailing]);
 echo "<br>";
 echo "votre achat a bien été pris en compte";
echo "<a href='dashboard.php'>retour</a>";
die();

}else{
 $moi = $_SESSION['email'];
 foreach($check as $checker):

    $coumpte = $pdo->prepare('select COUNT(*) from panier');
    $coumpte->execute();
    $compter=$coumpte->fetchColumn();

    $Nombre= $compter;
 echo "<br>";

$counteur = $pdo->prepare('select * from panier');
$counteur->execute();
$couns=$counteur->fetchAll(PDO::FETCH_ASSOC);
var_dump($couns);
 echo $couns[0];

if($moi == $checker['Appartient']){
$libel =$compteur['Libelle'];
var_dump($couns);
foreach($couns as $tex):
    echo $tex['Libelle'];

    for ($tex = 0; $tex <= $Nombre; $tex++) {
        $traite = array("info");
       array_push($traite,$tex['Libelle']);
       $s = $traite;       
      }
      var_dump($s);
endforeach;
print_r($traite);
var_dump($traite);
echo "le compteur";
var_dump($compteur);
echo $compteur['Libelle'];
    echo "je suis ici hdhdhdh bis";
    echo "<br>";

    if($Titre ==$libel){
       echo "Ajout impossible Vous suivez deja ce projet ";echo "<br>";
   
    echo "<a href='dashboard.php'>retour</a>";
    die(); 

    }else{
           echo "je suis ici";
        $stmt = $pdo->prepare('INSERT INTO panier (`libelle`,`LibelleLong`,`prix`,`Appartient`,`img`,`techno`,`heure`,`type`,`proprio`)
 VALUES (?,?,?,?,?,?,?,?,?)');
 $stmt->execute([$Titre, $descriptions, $prix, $perso,$img,$techno,$heur,2,$mailing]);
 echo "<br>";
 echo " votre  Achat a bien été pris en compte";
 echo "<br>";
echo "<a href='dashboard.php'>retour</a>";
die();

    }
  

}
else{
    echo "impossible";
}
endforeach;
}



   
endforeach;

}


?>