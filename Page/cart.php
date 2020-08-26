<?php
    include './include/headerDeux.php';
    require './include/function.php';
    include 'formation.php';
    require '../Db/db.php';


 
      ?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    
    
<?php
    $id= $_GET['id'];

    $pdo = pdo_connect_mysql();
    $req = $pdo->prepare('select * from formation where id = ?');
    $req->execute([$id]);
    $formation=$req->fetchAll(PDO::FETCH_ASSOC);
    var_dump($formation);
   
    ?>
    <div class="container">
       <h1 style="text-align: center;">Formations Séléctionnés</h1>
       <br>
      <div class="row">
                <?php foreach ($formation as $list): ?>
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
        <?php $id = $list['id'];?>
        <a href="cart.php?id=<?=$id?>" id="add_to_cart" class="btn btn-success">Ajouter au panier</a>

      </div>
    </div>
  </div>
      </div>
</div>


<div class="container">
   <br />
   <h3 align="center"><a href="#">Formations ajoutés au panier</a></h3>
   <br />
   
   <!-- panel qui va gérer la liste des poducts ajouté dans le panier -->
   <div class="panel panel-default">
       <!-- l'entete du panel avec un titre et un bouton -->
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">Détail du panier</div>
      <div class="col-md-6" align="right">
       <button type="button" name="clear_cart" id="clear_cart" class="btn btn-warning btn-xs">Clear</button>
      </div>
     </div>
    </div>
    <!-- le body du panel avec seulement l'id #shopping_cart-->
    <div class="panel-body" id="shopping_cart">
    <?php
    $panierContenant='
  <table class="table">
    <thead>
      <tr>
        <th>Intitulé</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>'.$list['libelle'].'</td>
      </tr>
      <tr>
        <td>'.$list['prixFormation'].' Euros</td>
      </tr>
      <tr>     
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-danger" id="'. $list["id"].'""><i class="fas fa-trash fa-xs"></i></button>
  <button type="button" class="btn btn-danger" id="'. $list["id"].'"">Supprimé</button>
  ' ;
  echo $panierContenant ?>
  <?php endforeach; ?>
    </div>
   </div>
   <!-- <script>
// on crée une focntion load_cart_data()
function load_cart_data()
 {
    //  avec une requete ajax on va demandé des donnée au serveur ici le fichier fetch_cart.php
  $.ajax({
   url:"cartFetch.php",
   method:"POST",
   success:function(data)
//    lorsque la requete Post d'ajax se passe bien ie que les donnée sont bien récupés
   {
    //    les donnée collectés sont insérés dans la balise html, div qui a pour id #shopping_cart
    $('#shopping_cart').html(data);
   }
  });
 }

 $('#add_to_cart').click(function(){
    //  on déclare l'id, le nom, le prix du produit avec comme valeur une table vide
  var product_id = [];
  var product_name = [];
  var product_price = [];
  var action = "add";

// si la taille de l'id est sup à 0
  if(product_id.length > 0)
  {
    // La $.post()méthode demande des données au serveur à l'aide d'une requête HTTP POST.
    // ici le serveur est le fichier php action.php
   $.ajax({
    url:"cartAction.php",
    method:"POST",
    // on va récupérer dans action.php, l'id, nom, prix, et l'action du produit
    data:{product_id:product_id, product_name:product_name, product_price:product_price, action:action},
    // en cas de succès de la récupérer on va déclencher la fct qui a pour param data
    success:function(data)
    {
     
// lorsque la fonction load_cart_data() a bien fonction, on l'exécute et on lui demande d'afficher un msg
     load_cart_data();
     alert("Item has been Added into Cart");
    }
   });
  }
  else
  {
    //   si la fonction n'a pas été à son terme on envoie une autre alert
   alert('Select atleast one item');
  }

 });

   </script> -->
</body>
</html>