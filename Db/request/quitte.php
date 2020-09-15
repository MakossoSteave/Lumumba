<?php
require '../db.php';


    $pdo = pdo_connect_mysql();

if (isset($_POST['form'])) {
    $id = $_POST['form'];
   
    $sql1 =("DELETE  from panier WHERE id='$id'");
    $stmt= $pdo->prepare($sql1);
    $stmt->execute();

}else{
    $id = $_POST['proj'];
   
    $sql1 =("DELETE  from panier WHERE id='$id'");
    $stmt= $pdo->prepare($sql1);
    $stmt->execute();
}
?>