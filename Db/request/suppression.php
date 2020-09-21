<?php

 session_start();
 session_destroy();
require '../db.php';


    $pdo = pdo_connect_mysql();
if (isset($_POST['donne'])) {
    $id = $_POST['donne'];
    echo $id;
   
    $sql1 =("UPDATE user set `isEmailConfirmed` = 0 WHERE id='$id'");
    $stmt= $pdo->prepare($sql1);
    $stmt->execute();
echo "okey";
}
?>