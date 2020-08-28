
<?php

//fetch_cart.php

// on ouvre la session
session_start();

// on déclare deux variables prix total et total article avec une valeur de 0
$total_price = 0;
$total_item = 0;

// On ouvre une variable où on insère du html
// on crée une tableau dans notre html avec comme th le nom du produit, quantité, prix, total et action
// La .table-striped classe de bootsrap ajoute des zébrures à une table
$output = '
<div class="table-responsive" id="order_table">
 <table class="table table-bordered table-striped">
  <tr>  
            <th width="40%">Product Name</th>  
            <th width="10%">Quantity</th>  
            <th width="20%">Price</th>  
            <th width="15%">Total</th>  
            <th width="5%">Action</th>  
        </tr>
';

// une condition if qui vérifie que qu'on se trouve bien dans la une session du panier de shopping
if(!empty($_SESSION["shopping_cart"]))
{
    // si c'est le cas on crée une boucle qui va parcourir la session panier shopping et récupérer 
    // la clé et la valeur 
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
    //  A la sortie, on va afficher un tableau html avec en td la valeur du nom du produit, la valeur
    // de la quantité de produit, la valeur de la quantité de produit * la valeur du prix du produit
    // et la valeur de l'id du produit que l'on ùet dans un bouton remove
  $output .= '
  <tr>
   <td>'.$values["formation_libelle"].'</td>
   
   <td align="right">$ '.$values["formation_prixFormation"].'</td>
   
   <td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["formation_id"].'">Remove</button></td>
  </tr>
  ';

//   On crée une varible prix total qui sera égal à au prix total + la valeur de la quantité de produit *
// la valeur du prix du produit
  $total_price = $values["formation_prixFormation"];
  //$total_item = $total_item + 1;
 }
//  A la sortie on crée une variable qui va crée une balise html
// Dans cette balise on aura une table avec en Total et la variabe du prix total
//number_format () Formate un nombre pour l'affichage
 $output .= '
 <tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">$ '.number_format($total_price, 2).'</td>  
        <td></td>  
    </tr>
 ';
}
else
{
    // Sinon la session panier de shopping est vide alors on crée une variable de sortie avec une table
    // dans la balise on crée une table avec un message dans le td
 $output .= '
    <tr>
     <td colspan="5" align="center">
      Your Cart is Empty!
     </td>
    </tr>
    ';
}
// on ferme ici la table et la div 
$output .= '</table></div>';

echo $output;
//echo '<pre>';
//print_r($_SESSION["shopping_cart"]);
//echo '</pre>';


?>
 