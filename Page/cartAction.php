<?php

//action.php
// On ouvre la session
session_start();

// une condition qui vérifie qu'il y a bien eu une action post 
// isset() Vérifiez si une variable est vide.
if(isset($_POST["action"]))
{
    // une condition qui vérifie que le post en l'occurence est bien un add
 if($_POST["action"] == "add")
 {
    //  si c'est le cas on crée des variables qui vont permettre de stocker les valeurs saisies lors du post
    // on récupere l'id, le nom, le prix du product
  $formation_id = $_POST["formation_id"];
  $formation_libelle= $_POST["formation_libelle"];
  $formation_prixFormation = $_POST["formation_prixFormation"];
//   on crée une boucle for qui va parcourir les id du produits en incrémentant
  for($count = 0; $count < count($formation_id); $count++)
  {
    //   La fonction array_keys () renvoie un tableau contenant les clés.
    //  $_SESSION stock toutes les valeurs de variable de session
   $cart_formation_id = array_keys($_SESSION["shopping_cart"]);
// La fonction in_array () recherche dans un tableau une valeur spécifique
// il va ici chercher si la taille de l'id du produit est présent dans l'id du produit panier 
   if(in_array($formation_id[$count], $cart_formation_id))
   {
    $_SESSION["shopping_cart"][$formation_id[$count]]['product_quantity']++;
   }
   else
   {
    $item_array = array(
     'formation_id'               =>     $formation_id[$count],  
     'formation_libelle'             =>     $formation_libelle[$count],
     'formation_prixFormation'            =>     $formation_prixFormation[$count],
     
    );

    $_SESSION["shopping_cart"][$formation_id[$count]] = $item_array;

    
   }
  }
 }

 if($_POST["action"] == 'remove')
 {
  foreach($_SESSION["shopping_cart"] as $keys => $values)
  {
   if($values["formation_id"] == $_POST["formation_id"])
   {
// La fonction unset () annule une variable.
    unset($_SESSION["shopping_cart"][$keys]);
   }
  }
 }
 if($_POST["action"] == 'empty')
 {
  unset($_SESSION["shopping_cart"]);  
 }
}

?>