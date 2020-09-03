<?php
function formateurPage($nom , $prenom , $role ,$email , $tel,$img,$id){
    echo <<<EOT
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/index.scss">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
    
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
        <title>Document</title>
    </head>
    <body>
    <div id="app">
    <section class="main-content columns ">
      
      <aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile">
        <p class="menu-label is-hidden-touch">Navigation</p>
        <ul class="menu-list">
          <li>
            <a href="dashboard.php" class=""style="text-decoration:none">
              <span class="icon"><i class="fa fa-home"></i></span> Home
            </a>
          </li>
          <li>
            <ul>
              <li>
                <a  uk-toggle="target: #message-close-default" style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-envelope"></i></span> Message
                </a>
              </li>
              <li>
                <a href="#"style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-cart-arrow-down"></i></span> Panier
                </a>

     <a   uk-toggle="target: #modal-close-default"><i class="fas fa-user-graduate"></i> Stagiaires</a>
<a uk-toggle="target: #modal-close-outside"><i class="fas fa-chalkboard-teacher"></i> Formateur</a>
<a href="#modal-sections" uk-toggle  style="text-decoration:none"><i class="fas fa-plus"></i> Créer une formation</a>

              </li>
            </ul>
          </li>
         
        </ul>
      </aside>
      <div class='section profile-heading'>
      <div class='columns is-mobile is-multiline'>
        <div class='column is-2'>
        <a href="upload.php?id=$email"> <span class='header-icon user-profile-image'>
            <img alt='' src='$img'>
          </span>
        </a>
         
        </div>
        <div class='column is-4-tablet is-10-mobile name'>
          <p>
            <span class='title is-bold'> $nom  $prenom</span>
            <br>
            <a class='button is-primary is-outlined' href="parametre.php?id=$id"' style='margin: 5px 0;text-decoration:none'>
              Parametres
            </a>
            <br>
          </p>
          <p class='tagline'>
          En tant que formateur mon rôle est d'aidé chaque stagiaire dans son cursus
          </p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
        <p class='stat-key'>Role</p>
          <p class='stat-val'>$role</p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
        <p class='stat-key'>Email</p>
          <p class='stat-val'>$email</p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
        <p class='stat-key'>Tel</p>
        <p class='stat-val'>$tel</p>
      </div>
      
  
EOT;
}
function intervenantPage($nom , $prenom , $role ,$email , $tel,$img,$id){
  echo <<<EOT
  <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/index.scss">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
    
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
        <title>Document</title>
    </head>
    <body>
    <div id="app">
    <section class="main-content columns ">
      
      <aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile">
        <p class="menu-label is-hidden-touch">Navigation</p>
        <ul class="menu-list">
          <li>
            <a href="dashboard.php" class=""style="text-decoration:none">
              <span class="icon"><i class="fa fa-home"></i></span> Home
            </a>
          </li>
          <li>
            <ul>
              <li>
                <a  uk-toggle="target: #message-close-default" style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-envelope"></i></span> Message
                </a>
              </li>
              <li>
                <a href="#"style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-cart-arrow-down"></i></span> Panier
                </a>
              <a href="#"style="text-decoration:none">
                <span class="icon is-small"><i class="fas fa-cart-arrow-down"></i></span> Panier
              </a>

   <a   uk-toggle="target: #modal-close-default"><i class="fas fa-user-graduate"></i> Stagiaires</a>
<a uk-toggle="target: #modal-close-outside"><i class="fas fa-chalkboard-teacher"></i> Intervenant</a>
<a href="#modal-sections" uk-toggle  style="text-decoration:none"><i class="fas fa-plus"></i> Créer un Projet</a

              </li>
            </ul>
          </li>
         
        </ul>
      </aside>
      <div class='section profile-heading'>
      <div class='columns is-mobile is-multiline'>
        <div class='column is-2'>
          <span class='header-icon user-profile-image'>
            <img alt='' src='$img'>
          </span>
        </div>
        <div class='column is-4-tablet is-10-mobile name'>
          <p>
            <span class='title is-bold'> $nom  $prenom</span>
            <br>
            <a class='button is-primary is-outlined' href="parametre.php?id=$id"' style='margin: 5px 0;text-decoration:none'>
              Parametres
            </a>
            <br>
          </p>
          <p class='tagline'>
          En tant que formateur mon rôle est d'aidé chaque stagiaire dans son cursus
          </p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
        <p class='stat-key'>Role</p>
          <p class='stat-val'>$role</p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
        <p class='stat-key'>Email</p>
          <p class='stat-val'>$email</p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
        <p class='stat-key'>Tel</p>
        <p class='stat-val'>$tel</p>
      </div>
      </section>
  
EOT;
}
function StagiaireForm($nom , $prenom , $role ,$email , $tel,$img,$id){
    echo <<<EOT
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/index.scss">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
    
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
    
    
        <title>Document</title>
    </head>
    <body>
    <div id="app">
    <section class="main-content columns is-fullheight">
      
      <aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile">
        <p class="menu-label is-hidden-touch">Navigation</p>
        <ul class="menu-list">
          <li>
            <a href="dashboard.php" class=""style="text-decoration:none">
              <span class="icon"><i class="fa fa-home"></i></span> Home
            </a>
          </li>
          <li>
            <ul>
              <li>
                  <a  uk-toggle="target: #message-close-default" style="text-decoration:none">
                <span class="icon is-small"><i class="fas fa-envelope"></i></span> Message
              </a>
              </li>
              <li>
              <a uk-toggle="target: #modal-close-outside"><i class="fas fa-chalkboard-teacher"></i> Formateur</a>

              <a uk-toggle="target: #modal-close-outsidee"><i class="fas fa-chalkboard-teacher"></i> Intervenant</a>
                <a href="panier.php"style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-cart-arrow-down"></i></span> Panier
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </aside>
    
      <div class='section profile-heading'>
      <div class='columns is-mobile is-multiline'>
        <div class='column is-2'>
        <a href="upload.php?id=$email"> <span class='header-icon user-profile-image'>
            <img alt='' src='$img'>
          </span>
        </a>
         
        </div>
        <div class='column is-4-tablet is-10-mobile name'>
          <p>
            <span class='title is-bold'> $nom  $prenom</span>
            <br>
            <a class='button is-primary is-outlined' href="parametre.php?id=$id"' style='margin: 5px 0;text-decoration:none'>
              Parametres
            </a>
            <br>
          </p>
          <p class='tagline'>
         Me voici enfin Stagiaire et pret à apprendre
          </p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
        <p class='stat-key'>Role</p>
          <p class='stat-val'>$role</p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
        <p class='stat-key'>Email</p>
          <p class='stat-val'>$email</p>
        </div>
        <div class='column is-2-tablet is-4-mobile has-text-centered'>
        <p class='stat-key'>Tel</p>
        <p class='stat-val'>$tel</p>
      </div>
        </div>
      </div>
      
    </section>
   
   
    
EOT;
}
function listStagiaire(){
    $pdo =pdo_connect_mysql() ;

    $num_contacts = $pdo->query('SELECT * FROM user where role = "Stagiaire"')->fetchAll();
    ?>
    <table class="table">
  <thead class="thead-light"> <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
    <?php
    foreach ($num_contacts as $contact): 
      ?>
  <tbody>
    <tr>
      <td><?=$contact['nom']?></td>
      <td><?=$contact['prenom']?></td>
      <td><?=$contact['email']?></td>
    </tr>
   
  </tbody>

   <?php endforeach;?>
  </table><?php

    
  }
function listFormateur(){ 
$pdo =pdo_connect_mysql() ;
$num_contacts = $pdo->query('SELECT * FROM user where role = "Formateur"')->fetchAll();
?>
<table class="table">
<thead class="thead-light"> <tr>
<th scope="col">Nom</th>
<th scope="col">Prenom</th>
<th scope="col">Email</th>
</tr>
</thead>
<?php
foreach ($num_contacts as $contact): 
?>

 
<tbody>
    <tr>
    <td><?=$contact['nom']?></td>
    <td><?=$contact['prenom']?></td>
    <td><?=$contact['email']?></td>
    </tr>
</tbody>
 <?php endforeach;?>
</table>
<?php }?>
<?php 
function listIntervenant(){ 
$pdo =pdo_connect_mysql() ;
$num_contacts = $pdo->query('SELECT * FROM user where role = "Intervenant"')->fetchAll();
?>
<table class="table">
<thead class="thead-light"> <tr>
<th scope="col">Nom</th>
<th scope="col">Prenom</th>
<th scope="col">Email</th>
</tr>
</thead>
<?php
foreach ($num_contacts as $contact): 
?>

 
<tbody>
    <tr>
    <td><?=$contact['nom']?></td>
    <td><?=$contact['prenom']?></td>
    <td><?=$contact['email']?></td>
    </tr>
</tbody>
 <?php endforeach;?>
</table>
<?php }?>


