<?php

function formation(){
      $pdo = pdo_connect_mysql();
      $req = $pdo->prepare('select * from formation');
      $req->execute();
      $contact=$req->fetchAll(PDO::FETCH_ASSOC);
      
	 
   ?>
   <div class="container">
       <div class="row">
        <div class="col">
        <h1 >Listes des formations</h1>
       <div > <?php foreach ($contact as $list): ?>
        <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=$list['img']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $list['libelle'] ?></h5>
        <p class="card-text">Descriptions : <?= $list['libelleLong'] ?></p>
        <p class="card-text">Heures : <?= $list['nomHeureFormation'] ?> H</p>
        <p class="card-text">Prix : <?= $list['prixFormation'] ?> €</p>

        <p class="card-text">Formateur dirigeant : <small class="text-muted"><?= $list['creerPar'] ?></small></p>
      </div>
    </div>
  </div>
</div>      
               <?php endforeach; ?> 
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
       </div>
        </div>
        <div class="col-2">
       
        </div>
<div class="col">

   <div> <h1 id="titre">Mes formations</h1>
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
        <h5 class="card-title"><?=$formations['libelle'] ?></h5>
        <p class="card-text">Descriptions : <?= $formations['libelleLong'] ?></p>
        <p class="card-text">Heures : <?= $formations['nomHeureFormation'] ?> H</p>
        <p class="card-text">Prix : <?= $formations['prixFormation'] ?> €</p>

        <a class="uk-button uk-button-default" href="update.php?id=<?= $formations['id'] ?>"  uk-toggle> 
            editer 
 
          </a>
          <a href="delete.php?id=<?=$id?>" class="uk-button uk-button-default"><i class="fas fa-trash fa-xs"></i></a>
     
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
$req = $pdo->prepare('select * from formation where creerPar = ?');
$req->execute([$identite]);
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
 