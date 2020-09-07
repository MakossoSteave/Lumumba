<?php
// on inclut la page du header
include './include/headerDeux.php';
// On inclut la page qui a les fonctions
require './include/function.php';
// On inclut la page formation
include 'formation.php';
// On inclut la page qui gere notre base de donnée
require '../Db/db.php';

// Si la session qui a pour variable nom est vide alors on appel la page de login
if (empty($_SESSION['nom'])) {
    header('location:login.php');
}
// Sinon on récupère le nom, prenom, role, email,tel et iamge de la session
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$role = $_SESSION['role'];
$email = $_SESSION['email'];
$tel = $_SESSION['tel'];

$image = $_SESSION['image'];
// On crée une variable $test qui permet de se connecter aux différents images
$tes = "http://localhost/lumumba/Lumumba/Page/img/$image";

                        // Dashboard pour le role Formateur
  if ($role == "Formateur") {
    //  On récupère l'id de la session que l'on stock dans une variable
      $id = $_SESSION['id'];
    // la page du formateur aura son nom, prenom, role, email, tel, tes et l'id
      formateurPage($nom, $prenom, $role, $email, $tel, $tes, $id);
?>
<!-- Fin div ? -->
          </div>
<!-- Fin ssection -->
    </section>

<?php
// On ouvre une balise php et on appel à la fonction formation
    formation();
?>

      <!-- Code html -->
  <!DOCTYPE html>
    <html lang="en">
        <!-- Header -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/index.scss">
        <!-- JSDelivr nous permet d'utiliser des modals -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
        <title>Document</title>
    </head>
      <!-- On ajoute directement du style ici avec une police d'écriture -->
    <style>
      h1,p,h2,h3{
        font-family: 'Montserrat', sans-serif;
      }

    </style>
      <!--div qui ferme une div de la fonction formation ? -->
        </div>

    <!-- Mise en place du modal -->
        <div id="modal-close-default" uk-modal>
      <!-- uk-modal-dialog crée une boite de dialogue § uk-modal-body ajoute un contenu-->
        <div class="uk-modal-dialog uk-modal-body">
          <button class="uk-modal-close-default" type="button" uk-close></button>
        <!-- uk-modal-title créer le titre modal.  -->
          <h2 class="uk-modal-title">Stagiaire</h2>
        <!-- on fait un écho de la fonction listeStagiaire -->
<?=listStagiaire();?>

        </div>
        </div>

        <div id="message-close-default" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <label for="cars">A qui est ton message :</label>
<?php
// On se connecte à la bd et on récupère tous noms des utilisateurs
    $pdo = pdo_connect_mysql();
    // Retourne un tableau contenant toutes les lignes du jeu d'enregistrements
    $num_contacts = $pdo->query('SELECT * FROM user ')->fetchAll();

?>
  <!-- On crée un formulaire qui va gérer les messages -->
        <form action="" method="POST">
    <!-- un select qui va demander de sélectionner l'user que l'on souhaite écrire  -->
        <select id="mes" name="mess">
<?php
// On crée une boucle dans select qui permet de sélectioner le nom et le prénom de l'user présent la bd
        foreach ($num_contacts as $contact):
?>

        <option value="volvo" id="selected"><?=$contact['nom']?> <?=$contact['prenom']?></option>
<?php endforeach;?>

<!-- Fin de notre select -->
        </select>
        <!-- On crée un modal dans un h2 avec un titre   -->
          <h2 class="uk-modal-title">Message</h2>
        <!-- container va gérer organiser le contenu du modal -->
          <div class="container">
             <!-- .col va organiser le modal en colonne  -->
          <div class="col">
          <!-- On insère un textarea qui permet une rédaction du message -->
          <textarea id="mess" name="msg"
          rows="5" cols="33" value="message...." id="message">

          </textarea>
          <button>Envoyer</button>
        </form>
      </div>
      </div>
      <!-- div ? -->
      </div>
<!-- div ? -->
      </div>
<!--  modal-close créer un bouton de fermeture et activer sa fonctionnalité. -->
      <div id="modal-close-outside" uk-modal>
      <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Liste des formateurs</h2>
        <br>
<?=listFormateur();?>
      </div>
      </div>
<!-- On crée un formulaire en modal pour la création d'une formation -->
        <form action="dashboard.php" method="POST">
      <div id="modal-sections" uk-modal>
      <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="uk-modal-header">
            <h2 class="uk-modal-title">Création d'une nouvelle formation</h2>
      </div>
      <div class="uk-modal-body">
        <!-- field élément est utilisé pour regrouper les données associées dans un formulaire -->
      <div class="field">
        <label class="label">Nom</label>
        <div class="control">
          <input class="input"  name="nom" id="noms" type="text" placeholder="Text input">
        </div>
      </div>

      <div class="field">
        <label class="label">Description</label>
      <div class="control has-icons-left has-icons-right">
        <input class="input is-success" type="textarea" name="description" id="description" placeholder="veuilliez saisir une courte descriptions" >

      </div>
      </div>

      <div class="field">
        <label class="label">Image</label>
      <div class="control has-icons-left has-icons-right">
    <!-- ici value de l'image est un url -->
        <input class="input" type="text" name="image" id="image" placeholder="veuilliez saisir une Url" value="url">
        <span class="icon is-small is-left">
        <i class="fas fa-envelope"></i>
        </span>

      </div>
      </div>
      <div class="field">
        <label class="label">Nombre d'heures</label>
      <div class="control">
        <input class="input" name="heure" id="heure" type="number" placeholder="nombre d'heures">
      </div>
      </div>
      <div class="field">
        <label class="label">Prix de la formation</label>
      <div class="control">
        <input class="input" name="prix" id="prix" type="number" placeholder="prix de la formation">
      </div>
      </div>

      <div class="field">
        <label class="label">Créateur</label>
      <div class="control">
        <input class="input" type="text" name="createur" id="createur"  disabled="disabled" placeholder="prix de la formation" value="<?=$_SESSION['nom']?> <?=$_SESSION['prenom']?>">
      </div>
      </div>
      <div class="field">
        <div class="control">
          <label class="checkbox">
          <input type="checkbox">
      I agree to the <a href="#">terms and conditions</a>
        </label>
        </div>
      </div>
    </div>
      <div class="uk-modal-footer uk-text-right">
        <button class="uk-button uk-button-primary uk-modal-close" type="button" name="sauvegarder" class="bout" onclick ="appele();">Save</button>
        <button class="uk-button uk-button-default " type="button">Cancel</button>
      </div>
    </div>
  </div>
<!-- Fin du formulaire ajout formations -->
        </form>

<!-- on crée une div vide qui a pour id ter  -->
      <div id="ter">

      </div>

<!-- création d'une div vide avec nom de classe perso -->
      </div><div class="perso">

      </div>
<!--Une fin de div ?  -->
      </div>
   <!--Code PHP  -->
<?php
}
                            // Dashboard du stagiaire 
  if ($role == "Stagiaire") {
    $id = $_SESSION['id'];
// Dans notre formulaire stagiaire, on aura le nom, prénom, rôle, tel, tes, et l'id du stagiaire
    StagiaireForm($nom, $prenom, $role, $email, $tel, $tes, $id);?>
    <!--balise php vide  -->
<?php
?>
     <!-- On crée une div modal -->
      <div id="message-close-default" uk-modal>
      <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <label for="cars">A qui est ton message :</label>
<?php

    // On se connecte à la base de donnée
$pdo = pdo_connect_mysql();
    // On crée une requete qui va séléctionné tous les users et  Retourne un tableau
    // contenant toutes les lignes du jeu d'enregistrements
    $num_contacts = $pdo->query('SELECT * FROM user ')->fetchAll();

?>
  <!-- On cré un formulaire pour gérer les messages -->
        <form action="" method="POST">
        <select id="mes" name="mess">
      <!-- A l'intérieur du forms et du select on crée une boucle qui va afficher le nom
      et le prénom des diff users -->
<?php
  foreach ($num_contacts as $contact):
?>

          <option value="volvo" id="selected"><?=$contact['nom']?> <?=$contact['prenom']?></option>
<?php endforeach;?>
?>

<!-- fin select -->
          </select>

<!-- On crée un modal permettant l'envoie de message -->
          <h2 class="uk-modal-title">Message</h2>
        <div class="container">
          <div class="col">
          <textarea id="mess" name="msg" rows="5" cols="33" value="message...." id="message">

          </textarea>
          <button>Envoyer</button>
  <!-- Fin du formulaire message -->
          </form>

<!-- Fin fermeture modal -->
        </div>
      </div>
        <!-- div ? -->
        </div>
      <!-- div ? -->
        </div>
<!-- Création de modal pour lister les diff formateurs -->
        <div id="modal-close-outside" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <h2 class="uk-modal-title">Liste des formateurs</h2>
              <br>
<?=listFormateur();?>
        </div>
        </div>
<!-- Modal permettant de lister les diff intervenants -->
        <div id="modal-close-outsidee" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
          <button class="uk-modal-close-outside" type="button" uk-close></button>
          <h2 class="uk-modal-title">Liste des Intervenants</h2>
            <br>
        <!-- on fait un écho de la fonction listIntervenant -->
<?=listIntervenant();?>
        </div>
      </div>

        <div class="container">
       <!-- On crée une balise php dans une div .container  -->
<?php
//  On se connecte à la base de donnée
  $pdo = pdo_connect_mysql();
    // On crée une requete préparé où on sélectionne toutes les formations
  $req = $pdo->prepare('select * from formation');
    // On exécute la requête
  $req->execute();
    // On affiche le résultat de la req dans un tableau associatif
  $contact = $req->fetchAll(PDO::FETCH_ASSOC);
    // Fin balise Php
?>

          <h1 style="text-align: center;">A la une</h1>
            <br>
       <!-- Dans une div .row on crée une boucle qui va afficher tous les éléments présent
      dans la formation dans un card -->
        <div class="row">
<?php foreach ($contact as $list): ?>
        <div class="col-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="<?=$list['img']?>" class="card-img" alt="...">
              </div>
        <div class="col-md-8">
          <div class="card-body">
          <h5 class="card-title"><?=$list['libelle']?></h5>
            <p class="card-text">Descriptions : <?=$list['libelleLong']?></p>
            <p class="card-text">Heures : <?=$list['nomHeureFormation']?> H</p>
            <p class="card-text">Prix : <?=$list['prixFormation']?> €</p>
        <!-- Ici l'id on le récupère mais on ne l'affiche pas  -->
<?php $id = $list['id'];?>
          <a href="cart.php?id=<?=$id?>" class="btn btn-success">S'inscrire</a>

          </div>
        </div>
      </div>
    </div>
  </div>
<!-- On crée une boucle vide ? -->
<?php endforeach;?>
<!-- On crée une div vide ? -->
        </div></div>
     <!-- On fait appel à la fonction formationBis() dans une balise php  -->
<?php formationBis();?>
<?php

}
                                  // Dashboard de l'intervenant
  if ($role == "Intervenant") {
    $id = $_SESSION['id'];
    intervenantPage($nom, $prenom, $role, $email, $tel, $tes, $id);
?>
        <div id="modal-close-default" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <h2 class="uk-modal-title">Stagiaire</h2>
<?=listStagiaire();?>

        </div>
      </div>
<!-- On crée un modal pour les lister les diff intervenants -->
        <div id="modal-close-outside" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <h2 class="uk-modal-title">Liste des Intervenants</h2>
             <br>
        <!-- On affiche la liste des intervenant avec la fonction -->
<?=listIntervenant();?>
        </div>
      </div>
<!-- On un formulaire qui va permettre de crée un projet -->
          <form action="dashboard.php" method="POST">
        <div id="modal-sections" uk-modal>
        <div class="uk-modal-dialog">
          <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Création d'un Projet</h2>
        </div>
        <div class="uk-modal-body">
        <div class="field">
          <label class="label">Nom</label>
          <div class="control">
            <input class="input"  name="nom" id="noms" type="text" placeholder="Text input">
          </div>
        </div>

        <div class="field">
          <label class="label">Description</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="textarea" name="description" id="description" placeholder="veuilliez saisir une courte descriptions" >

         </div>
        </div>
        <div class="field">
          <label class="label">Techno à Maitrisé</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="textarea" name="techno" id="techno" placeholder="techno à maitrisé" >

          </div>
        </div>
        <div class="field">
          <label class="label">Image</label>
          <div class="control has-icons-left has-icons-right">
          <input class="input" type="text" name="image" id="image" placeholder="veuilliez saisir une Url" value="url">
          <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
          </span>

          </div>
        </div>
        <div class="field">
          <label class="label">Nombre d'heures</label>
          <div class="control">
            <input class="input" name="heure" id="heure" type="number" placeholder="nombre d'heures">
          </div>
        </div>
        <div class="field">
          <label class="label">Rémuneration du projet</label>
          <div class="control">
            <input class="input" name="prix" id="prix" type="number" placeholder="prix de la formation">
          </div>
        </div>

        <div class="field">
          <label class="label">Créateur</label>
          <div class="control">
            <input class="input" type="text" name="createur" id="createur"  disabled="disabled" placeholder="prix de la formation" value="<?=$_SESSION['nom']?> <?=$_SESSION['prenom']?>">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <label class="checkbox">
            <input type="checkbox">
     J'accepte les <a href="#" style="text-decoration: none;">conditions d'utilisation de la platforme</a>
            </label>
          </div>
        </div>
        </div>
      <!-- on crée un footer au modal  -->
        <div class="uk-modal-footer uk-text-right">
          <button class="uk-button uk-button-primary uk-modal-close" type="button" name="sauvegarder" class="bout" onclick ="projet();">Save</button>
          <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
        </div>
      </div>
    </div>
<!-- Fin formulaire Création de projet -->
          </form>
<!-- Création du modal message pour les intervenants  -->
        <div id="message-close-defaults" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
          <button class="uk-modal-close-default" type="button" uk-close></button>
          <label for="cars">A qui est ton message :</label>
<?php
// On insère du php dans le modal, on se connecte à la bd
  $pdo = pdo_connect_mysql();
  $num_contacts = $pdo->query('SELECT * FROM user ')->fetchAll();

?>
  <!-- On crée un formulaire  -->
  <form action="" method="POST">
    <select id="mes" name="mess">
      <!-- Boucle foreach qui va lister tous les users dans un select  -->
<?php
  foreach ($num_contacts as $contact):
?>

          <option value="volvo" id="selected"><?=$contact['nom']?> <?=$contact['prenom']?></option>
<?php endforeach;?>


          </select>
<!-- On crée le modal message pour intervenants -->
          <h2 class="uk-modal-title">Message</h2>
        <div class="container">
        <div class="col">
          <textarea id="mess" name="msg"
          rows="5" cols="33" value="message...." id="message">

          </textarea>
          <button>Envoyer</button>
          </form>
        </div>
      <!-- Fin div modal message intervenants -->
        </div>
        <!-- fin div ? -->
        </div>
      <!-- Fin div ? -->
        </div>
          <br>
<!-- Une fonctions qui affiche tous les intervenants -->
<?php
  intervenantes();
?>
<!-- Fin div ? -->
        </div>
<!-- On crée une div vide avec un #ter -->
        <div id="ter">
  <!-- Code Php -->
<?php
                        // Dashboard de l'Administrateur
}
if ($role == "Admin") {  
    // Fin Code Php
    ?>

      <!-- Code html -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/index.scss">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />

      <body>
        <div class="container main-secction">
          <div class="row">
          <!-- on crée une div vide avec comme nom de classe image-section -->
            <div class="col-md-12 col-sm-12 col-xs-12 image-section">
            </div>
        <div class="row user-left-part">
              <!-- Div qui va gérer l'image de profil de l'admin -->
        <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
          <div class="row ">
            <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                          <!-- On crée une image de profil par défaut que l'on peut modifier -->
          <img src="https://cdn.pixabay.com/photo/2019/08/11/18/59/icon-4399701_960_720.png" class="rounded-circle">
        </div>
                        <!-- Div qui gère la mdif de la photo de profil -->
        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                          <!-- On crée ici une fonction qui va se declencher lors du click  -->
        <button id="btn-contact" (click)="clearModal()" data-toggle="modal" data-target="#contact" class="btn btn-success btn-block follow">Modifier</button>
        </div>
                        <!-- On crée une div vide avec comme nom .user-detail-row -->
        <div class="row user-detail-row">
        </div>
          </div>
        </div>
                <!-- La classe .pull-right est utilisée pour faire flotter l'élément vers la droite. -->
        <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
          <div class="row profile-right-section-row">
            <div class="col-md-12 profile-header">
              <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
        <!-- Dans cette div, on a une balise h1 où on insère du php -->
        <!-- On affiche le nom, prénom et le rôle présent en base -->
                  <h1><?=$nom?> <?=$prenom?></h1>
                  <h5><?=$role?></h5>
                </div>
              </div>
            </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8">
        <!-- On crée une liste ul où l'on aura la liste de tous les users et une autre
        avec toutes les formations et les projets présents -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
      <!-- On crée un lien clickable qui va lister les users dans une li -->
          <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> Profil utilisateurs</a>
            </li>
      <!-- liste formations et projets  -->
            <li class="nav-item">
            <!-- data-toggle="tab" rend les onglets basculables -->
                      <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><i class="fas fa-info-circle"></i> Formation et Projet</a>
            </li>
          </ul>
        <div class="tab-content">
      <!-- .fade classe à .tab-pane les onglets s'affichent et disparaissent lorsque vous
      cliquez dessus,-->
        <div role="tabpanel" class="tab-pane fade show active" id="profile">
      <!-- div vide avec #id profile -->

      <!-- Code PHP  -->
<?php
// On se connecte à la base de donnée
  $pdo = pdo_connect_mysql();
    // On crée une requete qui va récupérer et afficher tous les users
  $users = $pdo->query('SELECT * FROM user ')->fetchAll()
?>
       <!-- On crée une bourcle foreach pour parcourir tous les users -->
<?php
  foreach ($users as $users):
        // fin boucle
?>
		    <div class="row">
				  <div class="col-md-2">
				  <label>Nom</label>
			  	</div>
				<div class="col-md-6">
					<!-- dans une balise p on affiche le nom et le prénom de l'user récupérer de la bd  -->
				  <p><?=$users['nom']?> <?=$users['prenom']?></p>
				</div>
		    </div>
				<div class="row">
				  <div class="col-md-2">
				    <label>Email</label>
				  </div>
				<div class="col-md-6">
					<p><?=$users['email']?></p>
				</div>
				</div>
				<div class="row">
				<div class="col-md-2">
				  <label>Telephone</label>
				</div>
				<div class="col-md-6">
					<p><?=$users['tel']?></p>
				</div>
				</div>
				<div class="row">
				  <div class="col-md-2">
					  <label>Role</label>
				  </div>
				<div class="col-md-6">
					<p><?=$users['Role']?></p>
				</div>
				</div>
				  <a class="uk-button uk-button-default" href="parametreBis.php?id=<?=$users['id']?>"  uk-toggle>
							  editer

					</a>
					<a href="?id=<?=$users['id']?>" class="uk-button uk-button-default"><i class="fas fa-trash fa-xs"></i></a>
						<hr>
	<!-- fin boucle foreach qui liste nom, prénom, email, tel, role, id  -->
<?php endforeach;?>
                                    <!-- Fin div #profile -->
        </div>
        <div role="tabpanel" class="tab-pane fade" id="buzz">

                             <!-- Code PHP -->
<?php
// Connection
  $pdo = pdo_connect_mysql();
    //  Sélection de toutes les formations que l'on affichera dans un tableau
  $formation = $pdo->query('SELECT * FROM formation ')->fetchAll()
?>
<?php foreach ($formation as $formation):
?>
    <!--  On récupère nom, libelleFormation, libelleLongFormation, et on l'affiche dans une div -->
        <div class="row">
          <div class="col-md-6">
            <label>Nom</label>
          </div>
        <div class="col-md-6">
          <p><?=$formation['libelle']?></p>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
          <label>Descriptions</label>
        </div>
        <div class="col-md-6">
          <p><?=$formation['libelleLong']?></p>
        </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label>Créer Par</label>
          </div>
          <div class="col-md-6">
            <p><?=$formation['creerPar']?></p>
          </div>
        </div>
                            <!-- On crée un bouton editer avec comme href l'id de l'user -->
          <a class="uk-button uk-button-default" href="update.php?id=<?=$formation['id']?>" uk-toggle="">
            editer
          </a>
          <a href="delete.php?id=<?=$users['id']?>" class="uk-button uk-button-default"><i class="fas fa-trash fa-xs"></i></a>
                  <hr>
<?php endforeach;?>
        </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Une div de modal appelé lors de la modification du profil de l'user -->
        <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="contact">Modification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
              </div>
        <div class="modal-body">
          <div class="form-group">
            <p for="msj">.</p>
          </div>
          <div class="form-group">
            <label for="txtFullname">Nom</label>
            <input type="text" id="txtFullname" class="form-control">
          </div>
          <div class="form-group">
            <label for="txtEmail">Email</label>
            <input type="text" id="txtEmail" class="form-control">
          </div>
        <div class="form-group">
          <label for="txtPhone">Telephone</label>
          <input type="text" id="txtPhone" class="form-control">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="button" class="btn btn-primary" (click)="openModal()" data-dismiss="modal">Sauvegarder</button>
        </div>
      </div>
    </div>
  </div>
      </body>
<?php
}
echo "<br>";
echo "<br>";

?>


<?php
include './include/footer.php'
?>  

      <script src="./javascript/createforma.js"></script>
      <script src="./javascript/admin.js"></script>

      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
    </html>



