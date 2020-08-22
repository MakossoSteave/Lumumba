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
function formation(){
      $pdo = pdo_connect_mysql();
      $req = $pdo->prepare('select * from formation');
      $req->execute();
      $contact=$req->fetchAll(PDO::FETCH_ASSOC);
      
	 
   ?><div class="uk-child-width-1-2@m" uk-grid>
>>>>>>> origin/steave
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
    $formation = $req->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <?php
?>
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
<<<<<<< HEAD

           <a class="uk-button uk-button-default" href="#modal-overflow?id=<?=$id?>" uk-toggle>Editer</a>
           <a href="delete.php?id=<?=$id?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>

           <?php endforeach;?>

<div id="modal-overflow?id=<?=$id?>" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>
=======
           
           
            <div>
            <a class="uk-button uk-button-default" href="update.php?id=<?= $formations['id'] ?>"  uk-toggle> 
            editer 
 
          </a>
          <a href="delete.php?id=<?=$id?>" class="uk-button uk-button-default"><i class="fas fa-trash fa-xs"></i></a>
            </div>
           
>>>>>>> origin/steave

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
           <?php endforeach; ?>
 
</div>
>>>>>>> origin/steave

<?php
 }
 ?>
 <?php
 function formationBis(){
  $pdo = pdo_connect_mysql();
  $req = $pdo->prepare('select * from formation');
  $req->execute();
  $contact=$req->fetchAll(PDO::FETCH_ASSOC);
  

?><div class="uk-child-width-1-2@m" uk-grid>
<div>
<h1 class="uk-card-title">Listes des formations suivis</h1>
   <div class="uk-card uk-card-default"> <?php foreach ($contact as $list): ?>
       <div class="uk-card-media-top">
          
           <img src="<?=$list['img']?>" alt="">
       </div>
       <div class="uk-card-body">
           <h3 class="uk-card-title"><?= $list['libelle'] ?></h3>
           <p><span>Descriptions : </span><?= $list['libelleLong'] ?></p>
           <p><span>Heures : </span><?= $list['nomHeureFormation'] ?> h</p>
           <p><span>Prix : </span><?= $list['prixFormation'] ?> €</p>
           <p><span>Formateur dirigeant : </span><?= $list['creerPar'] ?></p>

       </div>
           <?php endforeach; ?>
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
<<<<<<< HEAD
}
?>
=======
?>
<div> <h1 class="uk-card-title">Mes projets</h1>
   <div class="uk-card uk-card-default">
  
       <?php foreach ($formation as $formations): ?>

       <div class="uk-card-body"> 
       <?php 
       $id = $formations['id'];
       ?>
           <h3 class="uk-card-title"><?=$formations['libelle'] ?></h3>
           <p hidden ><span>id : </span> <?= $formations['id'] ?></p>
           <p><span>Descriptions : </span><?= $formations['libelleLong'] ?></p>
           <p><span>Heures : </span><?= $formations['nomHeureFormation'] ?>h</p>
           <p><span>Prix : </span><?= $formations['prixFormation'] ?> €</p>
       </div>
       <div class="uk-card-media-bottom">
           <img src="<?=$formations['img']?>" alt="" >
       </div>
       
       <br>
       <?php endforeach; ?>
   </div></div>
  </div>

       <?php
 }
       ?>
 
>>>>>>> origin/steave
