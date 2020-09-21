<?php
<<<<<<< HEAD

function formation()
{
    $pdo = pdo_connect_mysql();
    $req = $pdo->prepare('select * from formation');
    $req->execute();
    $contact = $req->fetchAll(PDO::FETCH_ASSOC);

    ?><div class="uk-child-width-1-2@m" uk-grid>
      
=======
>>>>>>> origin/steave
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
   ?>
   <div>
   <h1 class="uk-card-title">Listes des formations</h1>
       <div class="uk-card uk-card-default"> <?php foreach ($contact as $list): ?>
           <div class="uk-card-media-top">

               <img src="<?=$list['img']?>" alt="">
           </div>
           <div class="uk-card-body">
               <h3 class="uk-card-title"><?=$list['libelle']?></h3>
               <p><span>Descriptions : </span><?=$list['libelleLong']?></p>
               <p><span>Heures : </span><?=$list['nomHeureFormation']?> h</p>
               <p><span>Prix : </span><?=$list['prixFormation']?> €</p>
               <p><span>Formateur dirigeant : </span><?=$list['creerPar']?></p>

           </div>
               <?php endforeach;?>
       </div>
   </div>
   <?php
$nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $identite = $nom . " " . $prenom;
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

<<<<<<< HEAD
        <a class="uk-button uk-button-default" href="update.php?id=<?= $formations['id'] ?>"  uk-toggle> 
   <div> <h1 class="uk-card-title">Mes formations</h1>
       <div class="uk-card uk-card-default">

           <?php foreach ($formation as $formations): ?>

           <div class="uk-card-body">
           <?php
$id = $formations['id'];
    ?>
               <h3 class="uk-card-title"><?=$formations['libelle']?></h3>
               <p hidden ><span>id : </span> <?=$formations['id']?></p>
               <p><span>Descriptions : </span><?=$formations['libelleLong']?></p>
               <p><span>Heures : </span><?=$formations['nomHeureFormation']?>h</p>
               <p><span>Prix : </span><?=$formations['prixFormation']?> €</p>
           </div>
           <div class="uk-card-media-bottom">
               <img src="<?=$formations['img']?>" alt="" >
           </div>

           <br>

           <a class="uk-button uk-button-default" href="#modal-overflow?id=<?=$id?>" uk-toggle>Editer</a>
           <a href="delete.php?id=<?=$id?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>

           <?php endforeach;?>

<div id="modal-overflow?id=<?=$id?>" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>
            editer 
 
          </a>
          <a href="delete.php?id=<?=$id?>" class="uk-button uk-button-default"><i class="fas fa-trash fa-xs"></i></a>
     
  </div>
</div>
=======
                  </div>
                  
>>>>>>> origin/steave
            </div>
            
      </div>
      
      <div class="col-3">
      </div>
    </div>
       </div>
   </div>

<br>
<<<<<<< HEAD

        <div class="uk-modal-body" uk-overflow-auto>
            <?php echo $formations['id'];
    $monId = $formations['id'];
    ?>


    <div class="field">
    <label class="label">Nom</label>
    <div class="control has-icons-left has-icons-right">
    <input class="input is-success" type="textarea" name="description" id="nomModifier" placeholder="veuilliez saisir une courte descriptions" value="<?=$formations['libelle']?>" >

    </div>
    </div>
<div class="field">
  <label class="label">Description</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-success" type="textarea" name="description" id="descriptionModifier" placeholder="veuilliez saisir une courte descriptions" value="<?=$formations['libelleLong']?>" >

  </div>
</div>
    <div class="field">
  <label class="label">Image</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" type="text" name="image" id="imageModifier" placeholder="veuilliez saisir une Url" value="<?=$formations['img']?>">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
  </div>
</div>
<div class="field">
  <label class="label">Nombre d'heures</label>
  <div class="control">
    <input class="input" name="heure" id="heureModifier" type="number" placeholder="nombre d'heures" value="<?=$formations['nomHeureFormation']?>">
  </div>
</div>
<div class="field">
  <label class="label">Prix de la formation</label>
  <div class="control">
    <input class="input" name="prix" id="prixModifier" type="number" placeholder="prix de la formation" value="<?=$formations['prixFormation']?>">
  </div>
</div>

        </div>
=======
>>>>>>> origin/steave
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
}
?>
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
    
 }
       ?>
<<<<<<< HEAD
 
=======
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
>>>>>>> origin/steave
