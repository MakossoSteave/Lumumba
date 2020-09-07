<?php 
require '../db.php';

echo "editions profil";
$data = $_POST['donne'];
$data = explode(",",$data);
$id = $data[0];
$nom = $data[1];
$prenom = $data[2];
$email = $data[3];
$tel= $data[4];
$photo = $data[5];
$createur = $data[6];


$pdo = pdo_connect_mysql();
     
  
            $sql1 =("UPDATE user SET nom='$nom', prenom='$prenom' , email = '$email' , tel= '$tel' WHERE id = '$id'");
            $stmt= $pdo->prepare($sql1);
            $stmt->execute();

            
            
        
           ?>
         

           
          
         
           
   