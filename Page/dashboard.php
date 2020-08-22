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
    if($role =="Formateur"){
      formateurPage($nom,$prenom,$role ,$email,$tel);
      ?><!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/index.scss">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
        
    
    <!-- UIkit JS -->
   

        <title>Document</title>
      </head>
      <body>
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-close-default">Stagiaires</button>
<div id="modal-close-default" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Stagiaire</h2>
        <?= listStagiaire();?>

      </div>
</div>

<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-close-outside">Formateur</button>

<div id="modal-close-outside" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Liste des formateurs</h2>
        <br>
        <?= listFormateur(); ?>
      </div>
</div>
<a class="uk-button uk-button-default" href="#modal-sections" uk-toggle> Créer une formation</a>
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
</div></form>
<br>
<div id="ter">
<?php
formation();
?>
</div>

</div><div class="perso">

</div>
 </div>


      </body>
     
      <?php
    }
    if($role =="Stagiaire"){
     StagiaireForm($nom,$prenom,$role,$email,$tel);
     $pdo = pdo_connect_mysql();
     $req = $pdo->prepare('select * from formation');
     $req->execute();
     $contact=$req->fetchAll(PDO::FETCH_ASSOC);
    
     ?>
     
     <div class='carousel is-5 carousel-animated carousel-animate-slide'>  <?php foreach ($contact as $list): ?>
  <div class='carousel-container'>

    <div class='carousel-item is-active'>
      <figure class="image is-2by1"><img src="<?=$list['img']?>"></figure>
    </div>
    <?php endforeach; ?>

     <?php
     formationBis();
    }
    if($role =="Intervenant"){

    }
    echo"<br>";
    echo"<br>";
    ;
?>


<?php
    include './include/footer.php'
    ?>  <script src="./javascript/createforma.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
       <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
     </html>