<?php
 function pdo_connect_mysql() {
    $DATABASE_HOST ='localhost:3306';
    $DATABASE_USER ='root';
    $DATABASE_PASS ='';
    $DATABASE_NAME ='lumumba';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        exit('Failed to connect to database!');
    }
}     


    function redirect(){
        header('location:register.php');
        exit();
    }
    if(!isset($_GET['email']) || !isset($_GET['token'])){
      
        echo " j'ai pas ";
    }else {
        $pdo = pdo_connect_mysql();
        echo "j'ai";

        $email =  $_GET['email'];
        $token = $_GET['token'];
        $role = $_GET['role'];

        echo $email;
        echo $token;
        $sql = $pdo->prepare("SELECT id from user WHERE email='$email'");
        $sql->execute();
        $user = $sql->fetch();
        var_dump($user);
        if ($user) {
            $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : null;

            $sql1 =("UPDATE user SET isEmailConfirmed=1   , token='',Role='$role' WHERE email = '$email'");
            $stmt= $pdo->prepare($sql1);
            $stmt->execute();
            var_dump($stmt1);

           
            echo "votre email a été valider  connectez vous !";
          
        }else {
            echo "votre compte a déja été valider";
           

        }
    }
?>