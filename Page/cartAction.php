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
  $product_id = $_POST["product_id"];
  $product_name = $_POST["product_name"];
  $product_price = $_POST["product_price"];
//   on crée une boucle for qui va parcourir les id du produits en incrémentant
  for($count = 0; $count < count($product_id); $count++)
  {
    //   La fonction array_keys () renvoie un tableau contenant les clés.
    //  $_SESSION stock toutes les valeurs de variable de session
   $cart_product_id = array_keys($_SESSION["shopping_cart"]);
// La fonction in_array () recherche dans un tableau une valeur spécifique
// il va ici chercher si la taille de l'id du produit est présent dans l'id du produit panier 
   if(in_array($product_id[$count], $cart_product_id))
   {
    $_SESSION["shopping_cart"][$product_id[$count]]['product_quantity']++;
   }
   else
   {
    $item_array = array(
     'product_id'               =>     $product_id[$count],  
     'product_name'             =>     $product_name[$count],
     'product_price'            =>     $product_price[$count],
     'product_quantity'         =>     1
    );

    $_SESSION["shopping_cart"][$product_id[$count]] = $item_array;

    
   }
  }
 }

 if($_POST["action"] == 'remove')
 {
  foreach($_SESSION["shopping_cart"] as $keys => $values)
  {
   if($values["product_id"] == $_POST["product_id"])
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