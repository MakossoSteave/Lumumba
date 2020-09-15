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
  
   <div class="container">
            <div class="row">
            <div class="col">
            <h1 style="text-align: center;">Suivis Par</h1>
            <?php 
            $mail = $_SESSION['email'];
         $pdo = pdo_connect_mysql();
         $req = $pdo->prepare('select * from panier where proprio = ?');
         $req->execute([$mail]);
         $suiveur=$req->fetchAll(PDO::FETCH_ASSOC);
    
         
        ?>
            <?php foreach ($suiveur as $list): ?>     
       <?php   $comparatif= $list['Appartient']; 
       $user = $pdo->prepare('select * from user where email = ?');
       $user->execute([$comparatif]);
       $comps=$user->fetchAll(PDO::FETCH_ASSOC);
       
       ?>
        <?php foreach ($comps as $user): ?>     
        <div class="card mb-3" style="max-width: 1200px;">
    <div class="row no-gutters">
    <div class="col-md-4">
    <img src="<?=$list['img']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $user['nom']?> <?= $user['prenom']?></h5>
        <hr>
        <h5 class="card-title"><?= $list['Libelle']?></h5>
        <h5 class="card-title"><?= $list['LibelleLong']?></h5>
          

<?php endforeach; ?>    
      </div></div></div></div>
               <?php endforeach; ?> 
           </div>
            </div>
   </div></div></div></div>


<?php
 }
 ?>



 <?php
 function formationBis(){
   $email=$_SESSION['email'];
  $pdo = pdo_connect_mysql();
  $req = $pdo->prepare("select * from panier where Appartient=? AND type=?");
  $req->execute([$email,1]);
  $contact=$req->fetchAll(PDO::FETCH_ASSOC);
  

?>
<hr>
 <div class="container"> 
 <div class="row">
 <div class="col">
     <h1> Formation suivis</h1>  
   
                <?php foreach ($contact as $list): ?>
                 
    
      <div class="card mb-3" style="max-width: 400px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=$list['img']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$list['Libelle'] ?></h5>
        <p class="card-text">Descriptions : <?= $list['LibelleLong'] ?></p>
        <p class="card-text">Prix : <?= $list['prix'] ?> €</p>
        <?php $id = $list['id'];?>
        <a href="quitteformation.php?id=<?=$id?>" class="btn btn-danger">quitter</a>

      </div>
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
$email=$_SESSION['email'];
$req = $pdo->prepare("select * from panier where Appartient=? AND type=? ");
$req->execute([$email,2]);
$formation=$req->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
?>
<div class="col-2">
<hr style=" border-left: 1px solid black;
  height: 100px;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  top: 0;">
</div>
<div class="col">
<h1>Projets suivis</h1>


       <?php foreach ($formation as $formations): ?>
        <div class="card mb-3" style="max-width: 400px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=$formations ['img']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$formations['Libelle'] ?></h5>
        <p class="card-text">Descriptions : <?= $formations['LibelleLong'] ?></p>
        <p class="card-text">Prix : <?= $formations['prix'] ?> €</p>
        <?php $id = $formations['id'];?>
        <a href="quitteprojet.php?id=<?=$id?>" class="btn btn-danger">quitter</a>

      </div>
    </div>
 
  
   
    <div class="col-md-8">
      <div class="card-body">
     
    </div>
  </div>
      </div>
</div>
       <?php endforeach; ?>
</div>
  </div>
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
      
      $nom = $_SESSION['nom'];
      $prenom = $_SESSION['prenom'];
      $identite =$nom." ".$prenom;
      $mail= $_SESSION['email'];
   ?>
   
      <div style="text-align: center;"> <h1 id="titre">Liste des projets</h1>
<br>
   <div  style="height: 500px;position:relative;">
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
                    <h3 class="uk-card-title"><?=$formations['nom'] ?></h3>
                   description :<p><?= $formations['description'] ?> <br>
                  Prix : <span> <?= $formations['prix'] ?>€ </span><br>
                  Heures: <span>  <?= $formations['nomHeure'] ?> H </span><br>
                  Créer Par : <span>  <?= $formations['creerPar'] ?> </span><br>
                  Techno : <span>  <?= $formations['technoMaitriser'] ?> </span><br>

                  </p>
                  
                  <div>
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
      <?php
       $identite =$nom." ".$prenom;
      $mail= $_SESSION['email'];
      $pdo = pdo_connect_mysql();
      $req = $pdo->prepare('select * from projet  where creerPar = ?');
      $req->execute([$identite]);
      $contact=$req->fetchAll(PDO::FETCH_ASSOC);
      
      $nom = $_SESSION['nom'];
      $prenom = $_SESSION['prenom'];
     
   ?>
   
      <div style="text-align: center;"> <h1 id="titre">Mes Projets</h1>
<br>
   <div  style="height: 500px;position:relative;">
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
                    <h3 class="uk-card-title"><?=$formations['nom'] ?></h3>
                   description :<p><?= $formations['description'] ?> <br>
                  Prix : <span> <?= $formations['prix'] ?>€ </span><br>
                  Heure: <span>  <?= $formations['nomHeure'] ?> H </span><br>
                  Créer Par : <span>  <?= $formations['creerPar'] ?> </span><br>
                  Techno : <span>  <?= $formations['technoMaitriser'] ?> </span><br>
                  

                  </p>
                  
                  <div>
                  <a class="button is-warning" href="updateProjet.php?id=<?= $formations['id'] ?>" style="text-decoration:none">Editer</a>
                  <a class="button is-danger"  href="deleteProjet.php?id=<?=$id?>"  style="text-decoration:none">Supprimer</a>
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
   <div class="container">
       <div class="row">
        <div class="col">
        <h1 >Suivis Par</h1>
        <?php 
         $pdo = pdo_connect_mysql();
         $req = $pdo->prepare('select * from panier where proprio = ?');
         $req->execute([$mail]);
         $suiveur=$req->fetchAll(PDO::FETCH_ASSOC);
    
         
        ?>
       <div > <?php foreach ($suiveur as $list): ?>     
       <?php   $comparatif= $list['Appartient']; 
       $user = $pdo->prepare('select * from user where email = ?');
       $user->execute([$comparatif]);
       $comps=$user->fetchAll(PDO::FETCH_ASSOC);
       
       ?>
        <?php foreach ($comps as $user): ?>     
        <div class="card mb-3" style="max-width: 1200px;">
    <div class="row no-gutters">
    <div class="col-md-4">
    <img src="<?=$list['img']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $user['nom']?> <?= $user['prenom']?></h5>
        <hr>
        <h5 class="card-title"><?= $list['Libelle']?></h5>
        <h5 class="card-title"><?= $list['LibelleLong']?></h5>
      </div>
    </div>
  </div>
</div>      
<?php endforeach; ?> 

               <?php endforeach; ?> 
  
       </div>

   </div>
       </div>
   

<?php
 }
 ?>