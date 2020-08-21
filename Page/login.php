<?php
session_start();
 if( isset($_SESSION['nom'])){
    header('location:dashboard.php');
  }
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
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>
    <link rel="stylesheet" href="../css/index.scss">
    
    <title>Document</title>
</head>
<body>
<section class="hero is-dark is-bold">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">Connection</h1>
        </div>

      </div>

    </section>
   <section class="section">
    <div class="container">
    <form action="login.php" method="POST" >
    <div class="field">
      <label class="label">Email</label>
      <input type="email" name="email" 
      class="input" 
      required>
      <div class='help is-error' >
      veilliez renseigné votre email
      </div>
    </div>
    <div class="field">
      <label class="label">Mots de passe</label>
      <input type="password" name="pass" 
      class="input" 
      required>
      <div class='help is-error' >
      veilliez renseigné votre mots de passe
      </div>
    </div>
    <button class="button is-medium is-primary " name="connect">Se connecter</button>
  
</form>
<div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-yellow" href="./inscription.php" style="text-decoration: none;">
                            <strong>S'inscrire</strong>
                        </a>
                    </div>
                    </div>
<?php


require '../Db/db.php';

$pdo = pdo_connect_mysql();
if (isset($_POST ['connect'])) {
    $email =$_POST['email'];
    $password =$_POST['pass'];

    if ($email =='' || $password =='') {
        echo "Verifiez vos information";
    } else {
        $sql=('SELECT COUNT(*) id ,password ,isEmailConfirmed  from user WHERE email = ? ');
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $number_of_rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);; 
       
        if ($number_of_rows > 0) {
            foreach($number_of_rows as $row) {
               if (password_verify($password, $row['password'])) {
                if ($row['isEmailConfirmed'] == 0) {
                    echo "merci de verifier votre email";
                }else{
                  echo "<br>";
                   echo "<span class='tag is-success'>Bienvenue</span>";
                   $check = $pdo->prepare("SELECT * FROM user WHERE email = ?");
                   $check->execute([$email]);
                   $user = $check->fetch();
                   $_SESSION['id']= $user['id'];
                   $_SESSION['nom'] = $user['nom'];
                   $_SESSION['prenom'] = $user['prenom'];
                   $_SESSION['email'] = $user['email'];
                   $_SESSION['tel'] = $user['tel'];
                   $_SESSION['role'] = $user['Role']; 
                   $image = $pdo->prepare("SELECT photo from image WHERE appartient = ?");
                   $mapic = $_SESSION['nom']." ". $_SESSION['prenom'];
                   $image -> execute([$mapic]);
                   $photo =$image->fetch();
                   $_SESSION['image']=$photo['photo'];
                   header("location:dashboard.php");    
                }
            }else{
              echo "<br>";
                echo "<span class='tag is-danger'>Email ou mots de passe incorrect</span>
                ";
            }
            }
            
        }else{
           echo "ce compte n'existe pas";
        }
    }
}
    
?>

    </div>
   </section>
   <?php
    include './include/footer.php'
    ?>
    