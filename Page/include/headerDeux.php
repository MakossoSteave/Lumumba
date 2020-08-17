<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="./javascript/deconnect.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">


            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    <!-- <img src="assets/img/Patrice.jpg" class="is-rounded" > !-->
                    Acceuil
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
        categorie
        </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item has-text-grey-dark">
           Formation
          </a>
                        <a class="navbar-item has-text-grey-dark">
            Projet
          </a>
                        <a class="navbar-item has-text-grey-dark">
            Arts
          </a>
                        <a class="navbar-item has-text-grey-dark">
           It
          </a>
                    </div>
                </div>
                <div class="panel-block">
                    <p class="control has-icons-left ">
                        <input class="input" type="text" placeholder="Recherche">
                        <span class="icon is-left has-text-info-dark">
        <i class="fas fa-search  " aria-hidden="false"></i>
      </span>
                    </p>
                </div>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    
                    <div class="buttons" >
                        <a class="button is-light" href="logout.php" style="text-decoration: none;">                         
                        <img src="./img/logout.png" alt="" srcset="">
                        Deconnection
                         </a>
                         
                    </div>
                </div>
            </div>
        </div>
    </nav>