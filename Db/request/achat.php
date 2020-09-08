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
foreach ($achat as $achat):   
$id= $achat['id'];
$Titre= $achat['libelle'];
$descriptions= $achat['libelleLong'];
$appartient= $achat['creerPar'];
$prix= $achat['prixFormation'];
$img = $achat['img'];
$heur =$achat['nomHeureFormation'];
$perso = $_SESSION['email'];
$data = explode(" ", $appartient);
$nom=$data[0];
$prenom=$data[1];

echo "<br>";
$utilisateur = $pdo->prepare('select email from user where nom =? AND prenom =?');
$utilisateur->execute([$nom,$prenom]);
$utilisateurs=$utilisateur->fetchAll(PDO::FETCH_ASSOC);
foreach ($utilisateurs as $user):
$mailing = $user['email'];
endforeach;
$checking = $pdo->prepare('select * from panier');
$checking->execute();
$check=$checking->fetchAll(PDO::FETCH_ASSOC);

if (empty($check)) {
    echo "check vide";
    $stmt = $pdo->prepare('INSERT INTO panier (`libelle`,`LibelleLong`,`prix`,`Appartient`,`img`,`techno`,`heure`,`type`,`proprio`)
VALUES (?,?,?,?,?,?,?,?,?)');
    $stmt->execute([$Titre, $descriptions, $prix, $perso,$img,NULL,$heur,1,$mailing]);
    echo "<br>";
    echo "votre achat a bien été pris en compte";
    echo "<a href='dashboard.php'>retour</a>";
    die();
}else{
    $stmt = $pdo->prepare('SELECT * from panier WHERE  Libelle= ? AND LibelleLong=? AND Appartient=? ');
$stmt->execute([$Titre,$descriptions,$perso]);
$user = $stmt->fetch();
        if ($user) {
            echo $Titre." T'es deja  inscris a cette formation essai encore bouffons";
            echo '<br>';
            echo "<a href='dashboard.php'>retour</a>";
        }else{
            $stmt = $pdo->prepare('INSERT INTO panier (`libelle`,`LibelleLong`,`prix`,`Appartient`,`img`,`techno`,`heure`,`type`,`proprio`)
            VALUES (?,?,?,?,?,?,?,?,?)');
                   $stmt->execute([$Titre, $descriptions, $prix, $perso,$img,NULL,$heur,1,$mailing]);
                
                   echo "<a href='dashboard.php'>retour</a>";
                   die();
}
}


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
 
    $data = explode(" ", $nom);
    $nom=$data[0];
    $prenom=$data[1];

    echo "<br>";
    $utilisateur = $pdo->prepare('select email from user where nom =? AND prenom =?');
    $utilisateur->execute([$nom,$prenom]);
    $utilisateurs=$utilisateur->fetchAll(PDO::FETCH_ASSOC);
    foreach ($utilisateurs as $user):
    $mailing = $user['email'];
    endforeach;
    $checking = $pdo->prepare('select * from panier');
    $checking->execute();
    $check=$checking->fetchAll(PDO::FETCH_ASSOC);

    if (empty($check)) {
        echo "check vide";
        $stmt = $pdo->prepare('INSERT INTO panier (`libelle`,`LibelleLong`,`prix`,`Appartient`,`img`,`techno`,`heure`,`type`,`proprio`)
 VALUES (?,?,?,?,?,?,?,?,?)');
        $stmt->execute([$Titre, $descriptions, $prix, $perso,$img,$techno,$heur,2,$mailing]);
        echo "<br>";
        echo "votre achat a bien été pris en compte";
        echo "<a href='dashboard.php'>retour</a>";
        die();
    }else{
        $stmt = $pdo->prepare('SELECT * from panier WHERE  Libelle= ? AND LibelleLong=? AND Appartient=? ');
$stmt->execute([$Titre,$descriptions,$perso]);
$user = $stmt->fetch();
        if ($user) {
            echo $Titre."t'es deja inscris a ce projet essai encore bouffons";
            echo '<br>';
            echo "<a href='dashboard.php'>retour</a>";

        }else{
            $stmt = $pdo->prepare('INSERT INTO panier (`libelle`,`LibelleLong`,`prix`,`Appartient`,`img`,`techno`,`heure`,`type`,`proprio`)
            VALUES (?,?,?,?,?,?,?,?,?)');
                   $stmt->execute([$Titre, $descriptions, $prix, $perso,$img,$techno,$heur,2,$mailing]);
                   echo "<br>";
                   echo "votre achat a bien été pris en compte";
                   echo "<a href='dashboard.php'>retour</a>";
                   die();
}
    }
    endforeach;
}

?>