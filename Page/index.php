<!-- On crée une balise php pour inclure notre header -->
<?php

include './include/header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- viewport permet un responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- on intègre le fontawesone -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  
  <!-- onn intègre bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <!-- on intègre bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- On intègre jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- on intègre popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- on intègre de nouveau bootsrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- on intègre jquery de nouveau -->
    <script src="./javascript/jqueryindex.js"></script>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
  </head>

  <section class="hero is-grey is-medium heros" style="background-image: url('./img/Fond.jpg'); background-position:center;background-size:cover;">
  <div class="hero-body" >
  <body>
  <section class="section">
      <div id="marecherche">
      </div>
    <div class="container">
      <h1 class="title">Apprenez a votre rythme</h1>
      <div class="container">
        <div class="row">
          <div class="col">
            
            <h2 class="subtitle">
            Étudiez à tout moment le sujet que vous souhaitez.<br> Faites dès maintenant votre choix parmi des milliers de cours enseignés par des formateurs et intervenants confirmés.
           </h2>
           <input class="input is-rounded" type="text" placeholder="Que souhaitez vous apprendre">
           <span class="icon is-left is-medium">
      </span>
          </div>
          <div class="col" >   
          <div class="navbar-start">  
        <a class="button is-primary devenir" href="./inscription.php" style="text-decoration: none;">
                            <strong>Devenez Formateur</strong>
                        </a>                 
          </div>
          <div class="vl" style="border-left: 1px solid white;
  height: 100px;"><div class="forma">
                      <dl class="uk-description-list uk-description-list-divider">
   
    <dd>un  formateur fait apprendre , <br>et favorise le passage des savoirs en connaissances utiles pour l'apprenant.</dd>
</dl>
       </div></div>
        
          </div>
           
        </div>     
      </div>
    </div>
  </section>
</body>
  </div>
</section>
<section class="hero is-grey is-medium " style="margin-top: -8%;">
  <div class="hero-body">
  <hr>

  <body>
  <section class="section">
    <div class="container">
      <div class="col">
    <h1 class="title">Se Former</h1>
    <div uk-slider="center: true">

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

    <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
        <li>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://iut.univ-amu.fr/sites/iut.univ-amu.fr/files/diplome/miw_2019.jpg" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Developpeur</h3>
                    <p>le monde  de l'informatique est très vaste inprégnier vous de l'informatique <br>
                  prix : <span> 10 000 $</span>
                  </p>
                  <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>se formé</strong>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </li>
        
        <li>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://actufinance.fr/wp-content/uploads/2017/01/banque-696x465.jpg" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Finance</h3>
                    <p>le monde appartient a ceux qui maitrise la finance qu'attend tu ? <br>
                    prix : <span>700$</span>
                  </p>
                  <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>se formé</strong>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://www.wellandgood.com/wp-content/uploads/2019/12/Stocksy-cooking-for-one-Andrey-Pavlov.jpeg" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Cuisinier</h3>
                    <p>que serait nous sans un cuisto , devenez cuisto !<br>
                    prix : <span> 2000 $</span>
                  </p>
                    <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>se formé</strong>
                        </a>
                    </div>
                    </div>
                  </div>
            </div>
        </li>
        <li>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://www.juridique-gratuit.com/wp-content/uploads/2017/11/droit-civil.jpg" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Droit</h3>
                    <p> Le droit n'aura plus aucun secret pour vous <br> prix : <span>1500 $</span></p>
                    <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>se formé</strong>
                        </a>
                    </div>
                    </div>
                  </div>
            </div>
        </li>
        <li>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://disruptionhub.com/wp-content/uploads/2017/03/Cybersecurity-730x431.jpg" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Cyber securité</h3>
                    <p> Maitrisé le fail de securité et bien plus encore <br> prix : <span>570 $</span></p>
                    <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>se formé</strong>
                        </a>
                    </div>
                    </div>

                </div>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>
    <div>
   <h3></h3>
</div>
  </div>
      <div class="col">
  <h1 class="title">Réaliser un projet</h1>
 <div uk-slider="center: true">

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

    <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
        <li>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://iut.univ-amu.fr/sites/iut.univ-amu.fr/files/diplome/miw_2019.jpg" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Developpeur</h3>
                    <p>le monde  de l'informatique est très vaste inprégnier vous de l'informatique <br>
                  prix : <span> 10 000 $</span>
                  </p>
                  <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>se formé</strong>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://actufinance.fr/wp-content/uploads/2017/01/banque-696x465.jpg" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Finance</h3>
                    <p>le monde appartient a ceux qui maitrise la finance qu'attend tu ? <br>
                    prix : <span>700$</span>
                  </p>
                  <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>se formé</strong>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://www.wellandgood.com/wp-content/uploads/2019/12/Stocksy-cooking-for-one-Andrey-Pavlov.jpeg" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Cuisinier</h3>
                    <p>que serait nous sans un cuisto , devenez cuisto !<br>
                    prix : <span> 2000 $</span>
                  </p>
                    <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>se formé</strong>
                        </a>
                    </div>
                    </div>
                  </div>
            </div>
        </li>
        <li>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://www.juridique-gratuit.com/wp-content/uploads/2017/11/droit-civil.jpg" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Droit</h3>
                    <p> Le droit n'aura plus aucun secret pour vous <br> prix : <span>1500 $</span></p>
                    <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>se formé</strong>
                        </a>
                    </div>
                    </div>
                  </div>
            </div>
        </li>
        <li>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://disruptionhub.com/wp-content/uploads/2017/03/Cybersecurity-730x431.jpg" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Cyber securité</h3>
                    <p> Maitrisé le fail de securité et bien plus encore <br> prix : <span>570 $</span></p>
                    <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>se formé</strong>
                        </a>
                    </div>
                    </div>

                </div>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
      
</div>            
</div>  
  </section>
</body>
  </div>
</section>
<?php
require './include/footer.php'
?>