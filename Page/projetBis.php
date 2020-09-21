<?php
    require '../Db/db.php';

  $pdo = pdo_connect_mysql();
  $req = $pdo->prepare('select * from projet');
  $req->execute();
  $contact=$req->fetchAll(PDO::FETCH_ASSOC);
  
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link rel="stylesheet" href="./css/index.scss">
    <script src="./javascript/jqueryindex.js"></script>
    <script src="./javascript/checking.js"></script>

</head>
<body>
<aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile">
        <p class="menu-label is-hidden-touch">Navigation</p>
        <ul class="menu-list">
          <li>
            <a href="dashboard.php" class=""style="text-decoration:none">
              <span class="icon"><i class="fa fa-home"></i></span> Home
            </a>
          </li>
         
         
        </ul>
      </aside>
    <div class="container">
       <h1 style="text-align: center;">Liste des Projets</h1>
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
        <h5 class="card-title"><?=$list['nom'] ?></h5>
        <p class="card-text">Descriptions : <?= $list['description'] ?></p>
        <p class="card-text">Heures : <?= $list['nomHeure'] ?> H</p>
        <p class="card-text">Prix : <?= $list['prix'] ?> €</p>
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

