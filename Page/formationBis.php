<?php
    require '../Db/db.php';
include './include/header.php';

  $pdo = pdo_connect_mysql();
  $req = $pdo->prepare('select * from formation');
  $req->execute();
  $contact=$req->fetchAll(PDO::FETCH_ASSOC);
  
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations</title>
    <link rel="stylesheet" href="./css/index.scss">
    <script src="./javascript/jqueryindex.js"></script>
    <script src="./javascript/checking.js"></script>

</head>
<body>
    <div class="container">
       <h1 style="text-align: center;">Liste des Formations</h1>
       <br>
       <div id="marecherche">
       </div>
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
        <h5 class="card-title"><?=$list['libelle'] ?></h5>
        <p class="card-text">Descriptions : <?= $list['libelleLong'] ?></p>
        <p class="card-text">Heures : <?= $list['nomHeureFormation'] ?> H</p>
        <p class="card-text">Prix : <?= $list['prixFormation'] ?> €</p>
        <a href="login.php" class="btn btn-success">S'inscrire</a>

      </div>
    </div>
  </div>
      </div>
</div>
<?php endforeach; ?>
  </div></div>  
     
<br>
<br>
</body>
</html>      <?php
require './include/footer.php'
?>
<?php

?>

