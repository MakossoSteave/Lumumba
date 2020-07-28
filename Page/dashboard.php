<?php
    include './include/headerDeux.php';
 
    if(empty($_SESSION['nom'])){
      header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.scss">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="container">
  <header>
  </header>
  <main>
    <div class="row">
      <div class="left col-lg-4">
        <div class="photo-left">
          <img class="photo" src="https://images.pexels.com/photos/1804796/pexels-photo-1804796.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
        </div>
        <?php 
       $nom = $_SESSION['nom'];
       $prenom = $_SESSION['prenom'];
       $role=$_SESSION['role'];
       $email=$_SESSION['email'];
        ?>
        <h4 class="name"><?=$nom ?> <?=''?><?=$prenom?></h4>
        <p class="info"><?= $role ?></p>
        <p class="info"><?= $email ?></p>
        <div class="stats row">
          <div class="stat col-xs-4" style="padding-right: 50px;">
            <p class="number-stat">319</p>
            <p class="desc-stat">Stagiaire</p>
          </div>
          <div class="stat col-xs-4">
            <p class="number-stat">3</p>
            <p class="desc-stat">Projet</p>
          </div>
          <div class="stat col-xs-4" style="padding-left: 50px;">
            <p class="number-stat">3</p>
            <p class="desc-stat">Formation</p>
          </div>
        </div>
        <p class="desc">Hello ! Je m'appel <?= $nom ?> . je suis <?= $role ?> </p>
        <div class="social">
          <i class="fa fa-facebook-square" aria-hidden="false"></i>
          <i class="fa fa-twitter-square" aria-hidden="true"></i>
          <i class="fa fa-pinterest-square" aria-hidden="true"></i>
          <i class="fa fa-tumblr-square" aria-hidden="true"></i>
        </div>
      </div>
      <div class="right col-lg-8">
        <ul class="nav">
          <li>Formation</li>
          <li>Projet</li>
          
        </ul>
        <span class="follow">Modifier</span>
        <div class="row gallery" style="overflow: scroll; width: 90%;
  height: 70%;">
          <div class="col-md-4">
             <img src="https://images.pexels.com/photos/1036371/pexels-photo-1036371.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
            <span><div class="notification">
 <strong>Statut</strong> en cours

</div></span>
            </div>
          <div class="col-md-4">
            <img src="https://images.pexels.com/photos/861034/pexels-photo-861034.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
            <span><div class="notification">
 <strong>Statut</strong> en cours

</div></span>
          </div>
          <div class="col-md-4">
             <img src="https://images.pexels.com/photos/113338/pexels-photo-113338.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
             <span><div class="notification">
 <strong>Statut</strong> en cours

</div></span>
            </div>
          <div class="col-md-4">
             <img src="https://images.pexels.com/photos/5049/forest-trees-fog-foggy.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
             <span><div class="notification">
 <strong>Statut</strong> en cours

</div></span>
            </div>
          <div class="col-md-4">
            <img src="https://images.pexels.com/photos/428431/pexels-photo-428431.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
            <span><div class="notification">
 <strong>Statut</strong> terminé

</div></span>
          </div>
          <div class="col-md-4">
            <img src="https://images.pexels.com/photos/50859/pexels-photo-50859.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
            <span><div class="notification">
 <strong>Statut</strong> en cours

</div></span>
          </div>
          <div class="col-md-4">
            <img src="https://images.pexels.com/photos/50859/pexels-photo-50859.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
            <span><div class="notification">
 <strong>Statut</strong> terminé

</div></span>
          </div>
          <div class="col-md-4">
            <img src="https://images.pexels.com/photos/50859/pexels-photo-50859.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
            <span><div class="notification">
 <strong>Statut</strong> en cours

</div></span>
          </div>
          <div class="col-md-4">
             <img src="https://images.pexels.com/photos/5049/forest-trees-fog-foggy.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
             <span><div class="notification">
 <strong>Statut</strong> terminé

</div></span>
            </div>       
      </div>
  </main>
</div>

<?php
    include './include/footer.php'
    ?>