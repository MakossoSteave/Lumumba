<?php
 include './include/headerDeux.php';
 require './include/function.php';
 include 'formation.php';
 require '../Db/db.php';
 $pdo = pdo_connect_mysql();

?>

<html>
   <body>
      
   <script>alert("toute les modifications seront pris en compte a votre prochaine connection")</script>
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit" name="submit"  >submit</button>
			
       
      </form>

    
<?php
            $email = $_GET["id"];

if(isset($_POST['submit'] )){
   
        if (isset($_FILES['image'])) {
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $tmp= explode('.', $_FILES['image']['name']);
        $file_ext=strtolower(end($tmp));
        
        $extensions= array("jpeg","jpg","png");
        
        if (in_array($file_ext, $extensions)=== false) {
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if ($file_size > 2097152) {
            $errors[]='File size must be excately 2 MB';
        }
        $fichier = "";
        if (empty($errors)==true) {
            move_uploaded_file($file_tmp, "img/".$file_name);
            $fichier = "img/".$file_name;
            echo "Success";
            $sql2 =("UPDATE image SET photo='$fichier' WHERE appartient = '$email'");
            $stmt= $pdo->prepare($sql2);
            $stmt->execute();
            ?><img src="<?= $fichier?>" alt="" srcset="">
           
            <?php
            header('location:dashboard.php')
            ?>
<?php
        } else {
            print_r($errors);
        }
   
    
    }else{
        echo "aucune photo n'as été select";
    }
}else{
    echo "veuilliez selectionné une photo";
}

?>
<div>
    
    <?php   $stmt = $pdo->prepare("SELECT * from image WHERE appartient = '$email' ");
  $stmt->execute();
  $user = $stmt->fetch(); 
?>
</div>
<br>
<p>Photo Actuel</p>
<img src="<?= $user['photo']?>" alt="" srcset="">
   </body>
</html>
<?php include './include/footer.php';?>
