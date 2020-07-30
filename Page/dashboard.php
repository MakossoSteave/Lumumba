<?php
    include './include/headerDeux.php';
    include './include/function.php';
 
    if(empty($_SESSION['nom'])){
      header('location:login.php');
    }
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $role=$_SESSION['role'];
    $email=$_SESSION['email'];
    $tel=$_SESSION['tel'];
    if($role =="Formateur"){
      formateurPage($nom,$prenom,$role ,$email,$tel);
    }
    if($role =="Stagiaire"){
      echo "tu es un stagiaire";
    }

?>


<?php
    include './include/footer.php'
    ?>