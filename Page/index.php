<?php

include './include/header.php';?>
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
</head>

  <section class="hero is-grey is-medium heros" style="background-image: url('./img/Fond.jpg'); background-position:center;background-size:cover;">
  <div class="hero-body">
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">Apprenez a votre rythme</h1>
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="subtitle">
            Étudiez à tout moment le sujet que vous souhaitez.<br> Faites dès maintenant votre choix parmi des milliers de cours enseignés par des formateurs et intervenants confirmés.
           </h2>
           <input class="input" type="text" placeholder="Que Souhaitez vous Apprendre ?">
      <span class="icon is-left is-medium">
      </span>
          </div>
          <div class="col" >   
          <div class="navbar-start">  
        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>Devenez Formateur</strong>
                        </a>
          </div>
          <div class="vl" style="border-left: 1px solid white;
  height: 100px;"></div>
        
          </div>
           
        </div>     
      </div>
    </div>
  </section>
</body>
  </div>
</section>
<section class="hero is-grey is-medium ">
  <div class="hero-body">
  <body>
  <section class="section">
    <div class="container">
      <div class="col">
    <h1 class="title">Se Former</h1>
    <p>Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans.</p>

    <div *ngFor="let news of data">
   <h3></h3>
</div>
  </div>
      <div class="col">
  <h1 class="title">Réaliser un projet</h1>
  <p>Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans.</p>
      </div>            
</div>  
  </section>
</body>
  </div>
</section>
<?php
require './include/footer.php'
?>