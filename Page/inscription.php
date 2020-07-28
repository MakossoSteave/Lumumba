<?php 
ini_set("SMTP","smtp.bouygtel.fr");

ini_set("smtp_port","25");

ini_set('sendmail_from', 'makossosteave27@gmail.com');
?>

<?php


require '../Db/db.php';

$pdo = pdo_connect_mysql();
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
    <title>Register</title>
</head>

<body>
    <section class="hero is-dark is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">Inscription</h1>
            </div>

        </div>

    </section>
    <section class="section">
        <div class="container">
            <form method="POST" action="./inscription.php">
                <div class="field">
                    <label class="label">Nom</label>
                    <input type="text" name="nom" class="input"  required>
                    <div class='help is-error'>
                        veilliez renseigné votre Nom
                    </div>
                </div>
                <div class="field">
                    <label class="label">Prenom</label>
                    <input type="text" name="prenom" class="input" required>
                    <div class='help is-error' >
                        veilliez renseigné votre Prenom
                    </div>
                </div>
                <div class="field">
                    <label class="label">Tel</label>
                    <input type="tel" name="tel" class="input" 
                    pattern="^[+]?[0-9]{9,12}$"
                    required>
                    <div class='help is-error' >
                        veilliez renseigné votre telephone
                        <br>
                        <small>Format : 0602509020</small>

                    </div>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <input type="email" name="email" class="input" onkeyup="emailSearch()" id="mail" required email>
                    <div class='help is-error'  id="resultRecherche">
                        veilliez renseigné votre email
                    </div>
                </div>
                <div class="field">
                    <label class="label">Mots de passe</label>
                    <input type="password" name="pass" class="input" required>
                    <div class='help is-error' >
                        veilliez renseigné votre mots de passe
                    </div>
                </div>
                <div class="control">
                    <div class="select" name="selection" id="role">
                        <select id="selected" name="role">
                 <option>Stagiaire</option>
                <option>Formateur</option>
                <option>Intervenant</option>
                    </select>
                    </div>
                    <br><br>
                </div>
                <?php
                if(isset($_POST['inscript'])){
                    if($_POST['nom'] AND $_POST['prenom'] AND $_POST['email'] AND $_POST['pass'] AND $_POST['tel']!=''){
                        $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : null;
                        
                        $role=$_POST['role'];
                        $nom = $_POST['nom'];
                         $prenom = $_POST['prenom'];   
                         $email =$_POST['email'];
                         $pass = $_POST['pass'];     
                         $mail =$_POST['email'];
                         $tel = $_POST['tel'];

                  $hashed= password_hash($pass, PASSWORD_BCRYPT);
    
                    $stmt = $pdo->prepare('SELECT id from user WHERE email = ? ');
                    $stmt->execute([$mail]);
                    $user = $stmt->fetch();
                   if ($user) {
                     echo $mail." cette email est deja pris";
                    echo '<br>';
                    }else
                    {
                        if($_POST['role']!=''){
                            $st = $pdo->prepare("INSERT INTO `roles` ( `libelleRoles`, `email`) VALUES (?, ?)");
                            $st->execute([$role,$mail]);
                        }

                        $token = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN123456789!';
                        $token = str_shuffle($token);
                        $token = substr($token, 0,10);
                     $stmt = $pdo->prepare("INSERT INTO user (`id`, `nom`, `prenom`, `tel`, `code`, `email`, `password`, `isEmailConfirmed`, `token`, `idConnexion`, `idImage`)
                     value (?,?,?,?,?,?,?,?,?,?,?)
                      ");
                     $stmt->execute([$id,$nom, $prenom,$tel,null,$mail,$hashed,'0',$token,NULL,NULL]);
                     $subject = "Confirmation email";
                     $headers = "From: LumumbaAdmin";
                   
                     $message = "
                      Clickez sur le lien ci dessous  pour confirmez votre inscriptions: 
                      <a href ='http://localhost/Lumumba/Lumumba/Page/confirmLog.php?email=$email&token=$token&role=$role'>click</a>
                     ";
                 mail($email,$subject,$message,$headers); 
                         $msg = " Vous avez etez inscrit , verifiez vos Email !";
                     
                   
                        echo "votre compte a bien été créer";
                   
                    }
                         
                    }else{
                        echo('veuilliez renseigné tous les champs');
                    }
                }
                ?>
                <button type="submit" class="button is-large is-warning navbar-start"  name="inscript">
                        Je m'inscris !
                </button>
                   <br>
      <a class="button is-primary is-end " href="./login.php" style="text-decoration: none;">
                            <strong>Se connecter</strong>
                        </a>                        

            </form>
        </div>
    </section>
    <?php
    include './include/footer.php'
    ?>
</body>
<script src="./javascript/checking.js"></script>
<script src="./javascript/selection.js"></script>


</html>
