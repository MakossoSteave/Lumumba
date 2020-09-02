<div id="resulte">

</div>
<?php
    include './include/headerDeux.php';
    require './include/function.php';
    include 'formation.php';
    require '../Db/db.php';
   $id = $_SESSION['id'];
   $pdo = pdo_connect_mysql();


?>   
 <!DOCTYPE html>
      <html lang="en">
     
      <head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="./javascript/jqueryindex.js"></script>
    <script src="./javascript/createforma.js"></script>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
      </head>
      <body>

    <?php
  $pdo = pdo_connect_mysql();
  
  
  $stmt = $pdo->prepare('SELECT * from user WHERE id = ? ');
  $stmt->execute([$id]);
  $user = $stmt->fetch();
        
 
    ?>
    <form action="dashboard.php" method="POST">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Edition de Profil</h2>
        </div>
        <div class="uk-modal-body">
     
        <div class="field">
        <input class="input"  name="nom" id="idProfile" type="hidden" value="<?= $user['id'] ?>">

  <div class="control">
    <input class="input"  name="nom" id="nomupd" type="hidden" value="<?= $user['nom'] ?>">
  </div>
</div>

<div class="field">
  <div class="control has-icons-left has-icons-right">
    <input class="input is-success" type="hidden" name="description" id="prenomupd" value="<?= $user['prenom'] ?>" >
    
  </div>
</div>
<div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input class="input" name="heure" id="emailupd" type="text" value="<?= $user['email'] ?>">
    <span style="color:red" > <i class="fas fa-exclamation-triangle"></i> attention vous devriez etre sur avant de me modifier</span>
  </div>
</div>
<div class="field">
  <label class="label">tel</label>
  <div class="control">
    <input class="input" name="prix" id="telupd" type="number" value="<?= $user['tel'] ?>">
  </div>
</div>
<div class="field">
  <label class="label">Photo</label>
  <div class="control">
    <input class="input" name="photo" id="photoupd" type="text" disabled value="<?=$_SESSION['image']?>">
  </div>
</div>
<form  enctype="multipart/form-data">
    <input type="file" value="" id="leforme">
</form>

<input class="input" name="photo" id="appartientupd" type="hidden" value="<?= $_SESSION['nom']?> <?=$_SESSION['prenom'] ?>">

      </div>
        <div class="uk-modal-footer uk-text-right">
        <button class="uk-button uk-button-primary" type="button" name="sauvegarder" class="bout" onclick ="EditionProfile()"> <a href="dashboard.php" style="color:white;text-decoration:none"> Modifier</a></button>
            <button class="uk-button uk-button-default "  type="button"> <a href="dashboard.php" style="text-decoration:none;">
Annuler
            </a></button>
           
        </div>
    </div>
</div></form>

<div id="reponse">

</div>
    </body>
      </html>
      