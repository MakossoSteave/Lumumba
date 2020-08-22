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
                <a href="#"style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-envelope"></i></span> Message
                </a>
              </li>
              <li>
               
                <a href="parametre.php?id=$id"style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-sliders-h"></i></span> Parametre
                </a>
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
    
      <div class="container column is-10">
        <div class="section">
    
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
            <img src="$img" alt="" uk-cover>
            <canvas width="450" height="500"></canvas>
        </div>
        <div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">$nom  $prenom</h3>
                <p>Titre : $role</p>
                <p>Email : $email </p>
                <p>Tel : $tel</p>
                <p>Addresse : none </p>
                <p>Sexe: none </p>
                <p>Age : none </p>
                <p>Réseaux :  none </p>
        </div>
       
        </div>
      </div>
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
                <a href="#"style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-envelope"></i></span> Message
                </a>
              </li>
              <li>
                <a href="#"style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-chalkboard-teacher"></i></span> Mes Formateurs
                </a>
                <a href="#" style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-chalkboard-teacher"></i></span> Mes Intervenants
                </a>
                <a href="parametre.php?id=$id"style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-sliders-h"></i></span> Parametre
                </a>
                <a href="#"style="text-decoration:none">
                  <span class="icon is-small"><i class="fas fa-cart-arrow-down"></i></span> Panier
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </aside>
    
      <div class="container column is-10">
        <div class="section">
    
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
            <img src="$img" alt="" uk-cover>
            <canvas width="250" height="200"></canvas>
        </div>
        <div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">$nom  $prenom</h3>
                <p>Titre : $role</p>
                <p>Email : $email </p>
                <p>Tel : $tel</p>
            </div>
        </div>
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

