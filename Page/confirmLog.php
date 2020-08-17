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
        echo "<br>";
        $email =  $_GET['email'];
        echo "<br>";
        $token = $_GET['token'];
        echo "<br>";
        $role = $_GET['role'];

        echo $email;
        echo "<br>";
        echo $token;
        $sql = $pdo->prepare("SELECT id from user WHERE email='$email'");
        $sql->execute();
        $user = $sql->fetch();
        if ($user) {
            $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : null;
            var_dump($user);

            $sql1 =("UPDATE user SET isEmailConfirmed= 1 , token =' '  WHERE email = '$email'");
            $stmt= $pdo->prepare($sql1);
            $stmt->execute();

          
            echo "votre email a été valider  connectez vous !";
           var_dump($stmt);
        }else {
            echo "votre compte a déja été valider";
           

        }
    }
?>