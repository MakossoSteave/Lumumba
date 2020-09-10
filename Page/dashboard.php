<?php
    include './include/headerDeux.php';
    require './include/function.php';
    include 'formation.php';
    require '../Db/db.php';


 
    if(empty($_SESSION['nom'])){
      header('location:login.php');
    }
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $role=$_SESSION['role'];
    $email=$_SESSION['email'];
    $tel=$_SESSION['tel'];

    $image = $_SESSION['image'];
    $tes = "$image";
    if($role =="Formateur"){
     
      $id = $_SESSION['id']; 
      formateurPage($nom,$prenom,$role ,$email,$tel,$tes,$id);
      ?>
          </div>
    </section>
      <?php
formation();
?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/index.scss">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
        <title>Document</title>
      </head>
      <style>
      h1,p,h2,h3{
        font-family: 'Montserrat', sans-serif;
      }
     
      </style>
    </div>
    <div id="modal-close-default" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Stagiaire</h2>
        <?= listStagiaire();?>

      </div>
</div>
<div id="message-close-default" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <label for="cars">A qui est ton message :</label><?php
  $pdo =pdo_connect_mysql() ;
  $num_contacts = $pdo->query('SELECT * FROM user ')->fetchAll();

  ?>
  <form action="" method="POST">
    <select id="mes" name="mess">
  <?php
foreach ($num_contacts as $contact): 
?>

  <option value="volvo" id="selected"><?=$contact['nom']?> <?=$contact['prenom']?></option>
  <?php endforeach;?>


</select>
        <h2 class="uk-modal-title">Message</h2>
        <div class="container">   
        <div class="col">
        <textarea id="mess" name="msg"
          rows="5" cols="33" value="message...." id="message">
          
</textarea>
  <button>Envoyer</button>
  </form>
      </div>
        </div>
      </div>
</div>
<div id="modal-close-outside" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Liste des formateurs</h2>
        <br>
        <?= listFormateur(); ?>
      </div>
</div>
<form action="dashboard.php" method="POST">
<div id="modal-sections" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Création d'une nouvelle formation</h2>
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
  <label class="label">Prix de la formation</label>
  <div class="control">
    <input class="input" name="prix" id="prix" type="number" placeholder="prix de la formation">
  </div>
</div>

<div class="field">
  <label class="label">Créateur</label>
  <div class="control">
    <input class="input" type="text" name="createur" id="createur"  disabled="disabled" placeholder="prix de la formation" value="<?= $_SESSION['nom']?> <?=$_SESSION['prenom'] ?>">
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
</form>
<div id="ter">

</div>

</div>
<div id="dashboard"> </div>
<div class="perso">

</div>
 </div>    
      <?php
    }
    if ($role =="Stagiaire") {
      $id = $_SESSION['id'];

        StagiaireForm($nom, $prenom, $role, $email, $tel,$tes,$id); ?>
    
     <?php
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <title>Document</title>
     </head>
     <body>
       <style>

:root {
  --color: #3c3163;
  --transition-time: 0.5s;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  font-family: 'Open Sans';
  background: #fafafa;
}

a {
  color: inherit;
}

.cards-wrapper {
  display: grid;
  justify-content: center;
  align-items: center;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 4rem;
  padding: 4rem;
  margin: 0 auto;
  width: max-content;
}

.card {
  font-family: 'Heebo';
  --bg-filter-opacity: 0.5;
  background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
  height: 20em;
  width: 15em;
  font-size: 1.5em;
  color: white;
  border-radius: 1em;
  padding: 1em;
  /*margin: 2em;*/
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  box-shadow: 0 0 5em -1em black;
  transition: all, var(--transition-time);
  position: relative;
  overflow: hidden;
  border: 10px solid #ccc;
  text-decoration: none;
}

.card:hover {
  transform: rotate(0);
}

.card h1 {
  margin: 0;
  font-size: 1.5em;
  line-height: 1.2em;
}

.card p {
  font-size: 0.75em;
  font-family: 'Open Sans';
  margin-top: 0.5em;
  line-height: 2em;
}

.card .tags {
  display: flex;
}

.card .tags .tag {
  font-size: 0.75em;
  background: #00d1b2;
  border-radius: 0.3rem;
  padding: 0 0.5em;
  margin-right: 0.5em;
  line-height: 1.5em;
  transition: all, var(--transition-time);
}

.card:hover .tags .tag {
  background: var(--color);
  color: white;
}

.card .date {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 0.75em;
  padding: 1em;
  line-height: 1em;
  opacity: .8;
}

.card:before, .card:after {
  content: '';
  transform: scale(0);
  transform-origin: top left;
  border-radius: 50%;
  position: absolute;
  left: -50%;
  top: -50%;
  z-index: -5;
  transition: all, var(--transition-time);
  transition-timing-function: ease-in-out;
}

.card:before {
  background: #ddd;
  width: 250%;
  height: 250%;
}

.card:after {
  background: white;
  width: 200%;
  height: 200%;
}

.card:hover {
  color: var(--color);
}

.card:hover:before, .card:hover:after {
  transform: scale(1);
}

.card-grid-space .num {
  font-size: 3em;
  margin-bottom: 1.2rem;
  margin-left: 1rem;
 
 
}

.info {
  font-size: 1.2em;
  display: flex;
  padding: 1em 3em;
  height: 3em;
}

.info img {
  height: 3em;
  margin-right: 0.5em;
}

.info h1 {
  font-size: 1em;
  font-weight: normal;
}

/* MEDIA QUERIES */
@media screen and (max-width: 1285px) {
  .cards-wrapper {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 900px) {
  .cards-wrapper {
    grid-template-columns: 1fr;
  }
  .info {
    justify-content: center;
  }
  .card-grid-space .num {
    margin-left: 0;
    text-align: center;
  }
}

@media screen and (max-width: 500px) {
  .cards-wrapper {
    padding: 4rem 2rem;
  }
  .card {
    max-width: calc(100vw - 4rem);
  }
}

@media screen and (max-width: 450px) {
  .info {
    display: block;
    text-align: center;
  }
  .info h1 {
    margin: 0;
  }
}
       </style>
        <div id="message-close-default" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
     
  <form action="" method="POST">
  

        <h2 class="uk-modal-title">Message</h2>
        <div class="container">   
        <div class="col">
       <h1>Op ! Op !  Op !</h1>
  <span>Prochainement</span>
  </form>
      </div>
        </div>
      </div>
</div>
     <div id="modal-close-outside" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Liste des formateurs</h2>
        <br>
        <?= listFormateur(); ?>
      </div>
</div>
<div id="modal-close-outsidee" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Liste des Intervenants</h2>
        <br>
        <?= listIntervenant(); ?>
      </div>
</div>
<div id="dashboard"> </div>

      <div class="container">
      
     <?php
        $pdo = pdo_connect_mysql();
        $req = $pdo->prepare('select * from formation');
        $req->execute();
        $contact=$req->fetchAll(PDO::FETCH_ASSOC); 
        ?>

       <h1 style="text-align: center;">A la une</h1>
     
        <section class="cards-wrapper">

                <?php foreach ($contact as $list): ?>
                  <div  style="display:none">

                 
                  <div class="col-6">
      <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=$list['img']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$list['libelle'] ?></h5>
        <p class="card-text">Descriptions : <?= $list['libelleLong'] ?></p>
        <p class="card-text">Heures : <?= $list['nomHeureFormation'] ?> H</p>
        <p class="card-text">Prix : <?= $list['prixFormation'] ?> €</p>
        <?php $id = $list['id'];?>
        <a href="panier.php?id=<?=$id?>" class="btn btn-success">S'inscrire</a>

      </div>
    </div>
  </div>
      </div>
</div>
 </div>
 
  <div class="card-grid-space">
    <div class="num"><h1><?= $list['prixFormation'] ?> €</h1></div>
    <a class="card"  style="--bg-img: url(<?=$list['img']?>)" href="panier.php?id=<?=$id?>">
      <div>
        <h1><?=$list['libelle'] ?></h1>
        <p><?= $list['libelleLong'] ?></p>
        <div class="date"><?= $list['nomHeureFormation'] ?> H</div>
        <br>
        <div class="tags">
          <div class="tag"> S'inscrire</div>
          
        </div>

      </div>
    </a>
  </div>

<?php endforeach; ?></section>

<?php
        $pdo = pdo_connect_mysql();
        $req = $pdo->prepare('select * from projet');
        $req->execute();
        $contact=$req->fetchAll(PDO::FETCH_ASSOC); 
        ?>
       <br>
                    
     
       <section class="cards-wrapper">

                <?php foreach ($contact as $list): ?>
  <div class="card-grid-space">


                 
                  <div class="col-6" style="display: none;">
      <div class="card mb-3" style="max-width: 500px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=$list['img']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$list['nom'] ?></h5>
        <p class="card-text">Descriptions : <?= $list['description'] ?></p>
        <p class="card-text">Heures : <?= $list['nomHeure'] ?> H</p>
        <p class="card-text">Prix : <?= $list['prix'] ?> €</p>
        <p class="card-text">techno : <?= $list['technoMaitriser'] ?> </p>

        <?php $id = $list['id'];?>
        <a href="paniers.php?id=<?=$id?>" class="btn btn-success" id="Noinscrit">S'inscrire</a>

      </div>
    </div>
  </div>
      </div>
</div>

    <div class="num"><h1><?= $list['prix'] ?> €</h1></div>
    <a class="card"  style="--bg-img: url(<?=$list['img']?>)" href="paniers.php?id=<?=$id?>">
      <div>
        <h1><?=$list['nom'] ?></h1>
        <p><?= $list['description'] ?></p>
        <p><?= $list['technoMaitriser'] ?></p>
        <div class="date"><?= $list['nomHeure'] ?> H</div>
        <br>
        <div class="tags">
          <div class="tag"> S'inscrire</div>
          
        </div>

      </div>
    </a>
  </div>

<?php endforeach; ?> 
   </div></section> </div>
  <?php formationBis();
     
     ?>
  <?php
     
    }?>
     </body>
     </html>
    <?php
    if($role =="Intervenant"){
      $id = $_SESSION['id']; 
      intervenantPage($nom,$prenom,$role ,$email,$tel,$tes,$id);
?>
 <div id="modal-close-default" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Stagiaire</h2>
        <?= listStagiaire();?>

      </div>
</div>
<div id="modal-close-outside" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Liste des Intervenants</h2>
        <br>
        <?= listIntervenant(); ?>
      </div>
</div>
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
    <input class="input"  name="nom" id="noms" type="text" placeholder="Text input" required>
  </div>
</div>

<div class="field">
  <label class="label">Description</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-success" type="textarea" name="description" id="description" placeholder="veuilliez saisir une courte descriptions" required>
    
  </div>
</div>
<div class="field">
  <label class="label">Techno à Maitrisé</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-success" type="textarea" name="techno" id="techno" placeholder="techno à maitrisé" required>
    
  </div>
</div>
<div class="field">
  <label class="label">Image</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" type="text" name="image" id="image" placeholder="veuilliez saisir une Url" value="url" required>
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
  
  </div>
</div>
<div class="field">
  <label class="label">Nombre d'heures</label>
  <div class="control">
    <input class="input" name="heure" id="heure" type="number" placeholder="nombre d'heures" required>
  </div>
</div>
<div class="field">
  <label class="label">Rémuneration du projet</label>
  <div class="control">
    <input class="input" name="prix" id="prix" type="number" placeholder="prix de la formation" required>
  </div>
</div>

<div class="field">
  <label class="label">Créateur</label>
  <div class="control">
    <input class="input" type="text" name="createur" id="createur"  disabled="disabled" placeholder="prix de la formation" value="<?= $_SESSION['nom']?> <?=$_SESSION['prenom'] ?>">
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
        <div class="uk-modal-footer uk-text-right">
        <button class="uk-button uk-button-primary uk-modal-close" type="button" name="sauvegarder" class="bout" onclick ="projet();"><a href="dashboard.php" style="text-decoration: none;color:white">Sauvegarder </a></button>
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
        </div>
    </div>
</div></form>
<div id="message-close-defaults" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <label for="cars">A qui est ton message :</label><?php
  $pdo =pdo_connect_mysql() ;
  $num_contacts = $pdo->query('SELECT * FROM user ')->fetchAll();

  ?>
  <form action="" method="POST">
    <select id="mes" name="mess">
  <?php
foreach ($num_contacts as $contact): 
?>

  <option value="volvo" id="selected"><?=$contact['nom']?> <?=$contact['prenom']?></option>
  <?php endforeach;?>


</select>
        <h2 class="uk-modal-title">Message</h2>
        <div class="container">   
        <div class="col">
        <textarea id="mess" name="msg"
          rows="5" cols="33" value="message...." id="message">
          
</textarea>
  <button>Envoyer</button>
  </form>
      </div>
        </div>
      </div>
</div>
<div id="dashboard"> </div>

<?php  
intervenantes();
?>
</div>
<div id="ter">
<?php
    }if($role =="Admin"){
      ?>
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="./css/index.scss">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />

<body>
    <div class="container main-secction">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 image-section">
            </div>
            <div class="row user-left-part">
                <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                    <div class="row ">
                        <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                            <img src="https://cdn.pixabay.com/photo/2019/08/11/18/59/icon-4399701_960_720.png" class="rounded-circle">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                            <button id="btn-contact" (click)="clearModal()" data-toggle="modal" data-target="#contact" class="btn btn-success btn-block follow">Modifier</button> 
                        </div>
                        <div class="row user-detail-row">
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                    <div class="row profile-right-section-row">
                        <div class="col-md-12 profile-header">
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                    <h1><?=$nom?> <?=$prenom?></h1>
                                    <h5><?= $role ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                        <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
        <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> Profil utilisateurs</a>
      </li>
          <li class="nav-item">
                      <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><i class="fas fa-info-circle"></i> Formation et Projet</a>
                </li>                                                
            </ul>
                                                            <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade show active" id="profile">
          <?php
       $pdo =pdo_connect_mysql() ;

            $users = $pdo->query('SELECT * FROM user ')->fetchAll()
       ?>
 <?php
    foreach ($users as $users): 
      ?>
                 <div class="row">
           <div class="col-md-2">
           <label>Nom</label>
           </div>
              <div class="col-md-6">
            <p><?= $users['nom']?> <?= $users['prenom']?></p>
            </div>
               </div>
             <div class="row">
 <div class="col-md-2">
         <label>Email</label>
</div>
 <div class="col-md-6">
    <p><?= $users['email']?></p>
 </div>
</div>
<div class="row">
 <div class="col-md-2">
 <label>Telephone</label>
 </div>
  <div class="col-md-6">
<p><?= $users['tel']?></p>
  </div>
 </div>
<div class="row">
 <div class="col-md-2">
 <label>Role</label>
 </div>
   <div class="col-md-6">
 <p><?= $users['Role']?></p>
 </div>
  </div>
  <a class="uk-button uk-button-default" href="?id=<?= $users['id'] ?>"  uk-toggle> 
            editer 
 
          </a>
          <a href="?id=<?= $users['id']?>" class="uk-button uk-button-default"><i class="fas fa-trash fa-xs"></i></a>
                                                            <hr>
                                                          <?php endforeach;?>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="buzz">
                                                <?php
       $pdo =pdo_connect_mysql() ;
            $formation = $pdo->query('SELECT * FROM formation ')->fetchAll()
       ?>
        <?php foreach ($formation as $formation): 
      ?>
                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Nom</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p><?= $formation['libelle'] ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Descriptions</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p><?= $formation['libelleLong'] ?></p>
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Créer Par</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p><?= $formation['creerPar'] ?></p>
                                                                </div>
                                                            </div>
                                                            <a class="uk-button uk-button-default" href="?id=<?= $users['id'] ?>"  uk-toggle> 
            editer
          </a>
          <a href="?id=<?= $users['id']?>" class="uk-button uk-button-default"><i class="fas fa-trash fa-xs"></i></a>
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
    echo"<br>";
    echo"<br>";
    ;
?>


<?php
    include './include/footer.php'
    ?>  <script src="./javascript/createforma.js"></script>
        <script src="./javascript/admin.js"></script>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
       <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
     </html>



