<?php
session_start();
if(!empty($_SESSION['nom'])){
    include 'formation.php';
    require '../Db/db.php';
?>
<?php
if(empty($_GET['id'])){
$te= $_COOKIE['Article'];
 $exp=(explode(',',$te));
echo "<br>";
  ?>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<div>

 <div class="container">
     <div class="col">
          <h1><?=$exp[0]?></h1>
  <p><?= $exp[1]?></p>
  <p><?= $exp[3]?></p>

  <img src="<?= $exp[2]?>" alt="" srcset="">
  <br>
  <div class="container">
      <br>
<div class="row"><?php
function acheter(){
    echo "jj";
}
?>
<div  class="col-6"> 
  <button class="button is-success" <?= acheter(); ?>>Acheter</button>
</div>

<div class="col">
<a  href="dashboard.php" class="button is-warnning">retour</a>
</div>
 </div>
     </div>
  </div>
    
          
     
  </div>
<?php
}else{


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/panier.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <title>Panier</title>
</head>
<body>
    <?php 
   $id= $_GET['id'];
    $pdo = pdo_connect_mysql();
    $panier =  $pdo->prepare('select * from formation where id = ?');
    $panier->execute([$id]);
    $paniers=$panier->fetchAll(PDO::FETCH_ASSOC); 

    ?>
   <?php foreach ($paniers as $panidd):  ?>
<div class="container">
    <div class="row">

    
    <div class="col-">
<div class='product_wrapper'>
			  <form method='post' action=''>
			  <div class='image'><img src="<?= $panidd['img']?>" /></div>
			  <div class='name'><?= $panidd['libelle']?></div>
		   	  <div class='price'><?= $panidd['prixFormation']?>  € </div>
			  <button type='submit' class='buy'>Acheter </button>
			  </form>
                 </div>
    </div>
    <div class="col">
    <div class="media-content">
    <div class="content">
      <p>
        <strong><?= $panidd['libelle']?></strong>
        <br>
        <?= $panidd['libelleLong']?>
      </p>
    </div>
    <nav class="level is-mobile">
      <div class="level-left">
        <a class="level-item">
          <span class="icon is-small"><i class="fas fa-reply"></i></span>
        </a>
      
        <a class="level-item">
          <span class="icon is-small"><i class="fas fa-heart"></i></span>
        </a>
      
      </div>
      <a href="dashboard.php" style="text-decoration: none;" class="button is-danger">Retour</a>

    </nav>
    <br>
  </div>
    </div></div>

</div> <?php
                 $cookie_name = 'Article';
                 $data = array($panidd['libelle'],$panidd['prixFormation'],$panidd['img'],$panidd['libelleLong']);
                $var =implode(',',$data);
                
                 setcookie($cookie_name, $var, time() +3600);                 
                 ?>

                 <?php endforeach;?>
</body>
</html>
<?php
}
}else{
    echo "rien";
    header('location:login.php');

}
?>
