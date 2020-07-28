
<?php
require '../db.php';

$pdo = pdo_connect_mysql();
$mail =$_POST['Mail'];

$stmt = $pdo->prepare('SELECT id from user WHERE email = ? ');
$stmt->execute([$mail]);
$user = $stmt->fetch();
        if ($user) {
            echo $mail." cette email est deja pris";
            echo '<br>';
        }else{
    echo "addresse email disponible";
}
?>