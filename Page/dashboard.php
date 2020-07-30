<?php
    include './include/headerDeux.php';
 
    if(empty($_SESSION['nom'])){
      header('location:login.php');
    }
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $role=$_SESSION['role'];
    $email=$_SESSION['email'];
    $tel=$_SESSION['tel'];
?>
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


<div uk-filter="target: .js-filter">

<ul class="uk-subnav uk-subnav-pill">
    <li uk-filter-control=".tag-white"><a href="#">Formation</a></li>
    <li uk-filter-control=".tag-blue"><a href="#">Projet</a></li>
    <li uk-filter-control=".tag-black"><a href="#">Stagiaire</a></li>
</ul>

<ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
    <li class="tag-white">
    <img src="https://iut.univ-amu.fr/sites/iut.univ-amu.fr/files/diplome/miw_2019.jpg"/>
            <span><div class="notification">
            <strong>  type : </strong> Formation <br>
              <b>libelle :</b> developpeur<br>
 <strong>Statut :</strong> en cours
    </li>
    <li class="tag-blue">
    <img src="https://actufinance.fr/wp-content/uploads/2017/01/banque-696x465.jpg"/>
            <span><div class="notification">
            <strong>  type : </strong> Projet <br>
            <b>libelle :</b> finance<br>
 <strong>Statut :</strong> en cours
    </li>
    <li class="tag-white">
    <img src="https://www.wellandgood.com/wp-content/uploads/2019/12/Stocksy-cooking-for-one-Andrey-Pavlov.jpeg"/>
             <span><div class="notification">
             <strong>  type : </strong> Formation <br>
             <b>libelle :</b> cuisinier<br>
 <strong>Statut :</strong> en cours
    </li>
    <li class="tag-white">
    <img src="https://www.juridique-gratuit.com/wp-content/uploads/2017/11/droit-civil.jpg"/>
             <span><div class="notification">
             <strong>  type : </strong> Formation <br>
               <b>libelle :</b> droit-civil<br>
 <strong>Statut :</strong> en cours
    </li>
    <li class="tag-black">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRMBCzb8d_yOJeT4c-KEqDQ-oN9I4hCAsr16Q&usqp=CAU" />
<span><div class="notification">
             <strong>  Statut : </strong> Stagiaire <br>
               <b>Nom : </b> inconnue<br>
               <b>Tel : </b> 0650405260<br>
               <b>Email : </b> gn@.fr<br>
    </li>
    <li class="tag-black">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRMBCzb8d_yOJeT4c-KEqDQ-oN9I4hCAsr16Q&usqp=CAU" />
<span><div class="notification">
             <strong>  Statut : </strong> Stagiaire <br>
               <b>Nom : </b> inconnue<br>
               <b>Tel : </b> 0650405260<br>
               <b>Email : </b> gn@.fr<br>
  </li>
    <li class="tag-blue">
    <img src="https://www.metadosi.fr/wp-content/uploads/2019/11/web-designer.jpg"/>
            <span><div class="notification">
            <strong>  type : </strong> Projet <br>
            <b>libelle : </b>designer graphique<br>
 <strong>Statut :</strong> terminé
    </li>
    <li class="tag-black">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRMBCzb8d_yOJeT4c-KEqDQ-oN9I4hCAsr16Q&usqp=CAU" />
<span><div class="notification">
             <strong>  Statut</strong>Stagiaire <br>
               <b>Nom : </b> inconnue<br>
               <b>Tel : </b> 0650405260<br>
               <b>Email : </b> gn@.fr<br>
    </li>
    <li class="tag-blue">
    <img src="https://www.alphea-conseil.fr/assets/uploads/filemanager/VISUEL/fiche%20metier%20vendeur%20conseil.png"/>
            <span><div class="notification">
            <strong>  type : </strong> Projet <br>
            <b>libelle</b>vendeur<br>
 <strong>Statut</strong> en cours
    </li>
    <li class="tag-white">
    <img src="https://disruptionhub.com/wp-content/uploads/2017/03/Cybersecurity-730x431.jpg"/>
            <span><div class="notification">
            <strong>  type : </strong> Formation <br>
            <b>libelle :</b>Cyber securité<br>
 <strong>Statut</strong> en cours
    </li>
    <li class="tag-blue">
    <img src="https://www.startmystory.fr/actualites/wp-content/uploads/2014/07/marketing-direct-communication.jpg"/>
            <span><div class="notification">
            <strong>  type : </strong> Projet <br>
            <b>libelle :</b>Marketing<br>
 <strong>Statut</strong> terminé
    </li>
    <li class="tag-black">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRMBCzb8d_yOJeT4c-KEqDQ-oN9I4hCAsr16Q&usqp=CAU" />
<span><div class="notification">
             <strong>  Statut :</strong>Stagiaire <br>
               <b>Nom : </b> inconnue<br>
               <b>Tel : </b> 0650405260<br>
               <b>Email : </b> gn@.fr<br>
    </li>
</ul>

</div>

<?php
    include './include/footer.php'
    ?>