<?php
function formation(){
      $pdo = pdo_connect_mysql();
      $req = $pdo->prepare('select * from formation');
      $req->execute();
      $contact=$req->fetchAll(PDO::FETCH_ASSOC);	 
   ?>
      
</div>
<div>
   <div class="container">
       <div class="row">
        <div class="col">
        <h1 >Listes des formations</h1>
       <div> 
      
<div uk-slider="center: true">

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

    <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
         <?php foreach ($contact as $formations): ?>
<?php $id = $formations['id'];?><li>
  <div class="container">
    <div class="row">
      <div class="col">
<div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="<?=$formations['img']?>" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title"><?=$formations['libelle'] ?></h3>
                    <p><?= $formations['libelleLong'] ?> <br>
                  Prix : <span> <?= $formations['prixFormation'] ?>€ </span><br>
                  Heure: <span>  <?= $formations['nomHeureFormation'] ?> H </span><br>
                  Créer Par : <span>  <?= $formations['creerPar'] ?> </span>
                  </p>
            </div>
      </div>
      <div class="col-3">
      </div>
    </div>
  </div>
  <?php endforeach; ?></li>
    </ul>
    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
</div>
<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>
    <div>
<br>
    </div>
    </div>      
   <?php 
   $nom = $_SESSION['nom'];
   $prenom = $_SESSION['prenom'];
   $identite =$nom." ".$prenom;
   $req = $pdo->prepare('select * from formation where creerPar = ?');
    $req->execute([$identite]);
    $formation=$req->fetchAll(PDO::FETCH_ASSOC);
   
    ?>
    <?php
?>
      
     
        <div class="col-2">
       
        </div>
<div class="col">

   <div> <h1 id="titre">Mes formations</h1>
       <div >
       <div uk-slider="center: true">

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

    <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
           <?php foreach ($formation as $formations): ?>

            <?php $id = $formations['id'];?><li>
  <div class="container">
    <div class="row">
      <div class="col">
    <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="<?=$formations['img']?>" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title"><?=$formations['libelle'] ?></h3>
                    <p><?= $formations['libelleLong'] ?> <br>
                  Prix : <span> <?= $formations['prixFormation'] ?>€ </span><br>
                  Heure: <span>  <?= $formations['nomHeureFormation'] ?> H </span><br>
                  Créer Par : <span>  <?= $formations['creerPar'] ?> </span>
                  </p>
                  
                  <div>
                  <a class="button is-warning" href="update.php?id=<?= $formations['id'] ?>" style="text-decoration:none">Editer</a>
                  <a class="button is-danger" href="delete.php?id=<?=$id?>"  style="text-decoration:none">Supprimer</a>
                  </div>
                  
            </div>
            
      </div>
      
      <div class="col-3">
      </div>
    </div>
       </div>
   </div>
<br>
           <?php endforeach; ?>
           </ul>

<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
 
</div>
        </div>
       </div>

   </div>

<?php
 }
 ?>



 <?php
 function formationBis(){
  $pdo = pdo_connect_mysql();
  $req = $pdo->prepare('select * from formation');
  $req->execute();
  $contact=$req->fetchAll(PDO::FETCH_ASSOC);
  

?>
<hr>
 <div class="container"> 
 <div class="row">
 <div class="col">
     <h1> Formation suivis</h1>  
   
                <?php foreach ($contact as $list): ?>
                 
      <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
     test
    </div>
    <div class="col-md-8">
      <div class="card-body">
     
    </div>
  </div>
      </div>
</div>
<?php endforeach; ?>
  </div>
<?php 
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$identite =$nom." ".$prenom;
$req = $pdo->prepare('select * from projet ');
$req->execute();
$formation=$req->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
?>
<div class="col-2">
<hr style=" border-left: 1px solid black;
  height: 400px;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  top: 0;">
</div>
<div class="col">
<h1>Projets suivis</h1>


       <?php foreach ($formation as $formations): ?>
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
     test
    </div>
    <div class="col-md-8">
    test
      <div class="card-body">
     test
    </div>
  </div>
      </div>
</div>
      
       <?php endforeach; ?>
   
 </div>
 </div>
 </div>
       <?php
 }
       ?>
       <?php
 function Intervenantes(){
      $pdo = pdo_connect_mysql();
      $req = $pdo->prepare('select * from projet');
      $req->execute();
      $contact=$req->fetchAll(PDO::FETCH_ASSOC);
      
	 
   ?>
   <div class="container">
       <div class="row">
        <div class="col">
        <h1 >Listes des Projets </h1>
       <div > <?php foreach ($contact as $list): ?>
        <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=$list['img']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $list['nom'] ?></h5>
        <p class="card-text">Descriptions : <?= $list['description'] ?></p>
        <p class="card-text">Heures : <?= $list['nomHeure'] ?> H</p>
        <p class="card-text">Technos à maitriser : <?= $list['technoMaitriser'] ?> </p>
        <p class="card-text">Rémuneration : <?= $list['prix'] ?> €</p>

        <p class="card-text">Intervenant dirigeant : <small class="text-muted"><?= $list['creerPar'] ?></small></p>
      </div>
    </div>
  </div>
</div>      
               <?php endforeach; ?> 
   <?php 
   $nom = $_SESSION['nom'];
   $prenom = $_SESSION['prenom'];
   $identite =$nom." ".$prenom;
   $req = $pdo->prepare('select * from projet where creerPar = ?');
    $req->execute([$identite]);
    $formation=$req->fetchAll(PDO::FETCH_ASSOC);
 
   
    ?>
    <?php
?>
       </div>
        </div>
        <div class="col-2">
       
        </div>
<div class="col">

   <div> <h1 id="titre">Mes Projets</h1>
       <div >
      
           <?php foreach ($formation as $formations): ?>

            <?php $id = $formations['id'];?>
           <div> 
           <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=$formations['img']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$formations['nom'] ?></h5>
        <p class="card-text">Descriptions : <?= $formations['description'] ?></p>
        <p class="card-text">Technos à maitriser : <?= $formations['technoMaitriser'] ?></p>
        <p class="card-text">Heures : <?= $formations['nomHeure'] ?> H</p>
        <p class="card-text">Rémuneration : <?= $formations['prix'] ?> €</p>

        <a class="uk-button uk-button-default" href="updateProjet.php?id=<?= $formations['id'] ?>"  uk-toggle> 
            editer 
 
          </a>
          <a href="deleteProjet.php?id=<?=$id?>" class="uk-button uk-button-default"><i class="fas fa-trash fa-xs"></i></a>
     
  </div>
</div>
            </div>
       </div>
   </div>
<br>

           <?php endforeach; ?>
 
</div>
        </div>
       </div>

   </div>

<?php
 }
 ?>