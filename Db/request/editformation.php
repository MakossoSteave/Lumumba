<?php 
require '../db.php';

echo "editions";
$data = $_POST['donne'];
$data = explode(",",$data);
$nom = $data[0];
$desc = $data[1];
$img = $data[2];
$heur = $data[3];
$prix= $data[4];
$id= $data[5];
$pdo = pdo_connect_mysql();


       
  
            $sql1 =("UPDATE formation SET libelle='$nom', libelleLong='$desc' , img = '$img' , nomHeureFormation= '$heur', prixFormation='$prix' WHERE id = '$id'");
            $stmt= $pdo->prepare($sql1);
            $stmt->execute();

          
            echo "modification effectuer Avec succes" ;
           ?>
           
   