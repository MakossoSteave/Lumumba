<?php
    include './include/headerDeux.php';
    require './include/function.php';
    require '../Db/db.php';

    // include 'formation.php';

    $dbConn = pdo_connect_mysql() ;
    ?>
    <div class="field">
    <label class="label">Nom</label>
    <div class="control has-icons-left has-icons-right">
    <input class="input is-success" type="textarea" name="description" id="nomModifier" placeholder="veuilliez saisir une courte descriptions" value="<?=$formations['libelle']?>" >
    
    </div>
    </div>
<div class="field">
  <label class="label">Description</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-success" type="textarea" name="description" id="descriptionModifier" placeholder="veuilliez saisir une courte descriptions" value="<?=$formations['libelleLong']?>" >
    
  </div>
</div>
    <div class="field">
  <label class="label">Image</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" type="text" name="image" id="imageModifier" placeholder="veuilliez saisir une Url" value="<?= $formations['img']?>">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span> 
  </div>
</div>
<div class="field">
  <label class="label">Nombre d'heures</label>
  <div class="control">
    <input class="input" name="heure" id="heureModifier" type="number" placeholder="nombre d'heures" value="<?= $formations['nomHeureFormation']?>">
  </div>
</div>
<div class="field">
  <label class="label">Prix de la formation</label>
  <div class="control">
    <input class="input" name="prix" id="prixModifier" type="number" placeholder="prix de la formation" value="<?= $formations['prixFormation']?>">
  </div>
</div>
            
        </div>

        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary uk-modal-close" type="button" onclick ="edit();">Save</button>
        </div>

    </div>
</div>
    <?php 


    if(isset($_POST['updateF']))
    {	
       
        $id=$_POST['id'];
   
        $nom=$_POST['nom'];
        $description=$_POST['description'];
        $image=$_POST['image'];
        $heure=$_POST['heure'];	
        $prix=$_POST['prix'];	
        $createur=$_POST['createur'];	
        
        // empty — Détermine si une variable est vide
        if(empty($nom) || empty($description) || empty($image) || empty($heure) || empty($prix) || empty($createur)) {	
                
            if(empty($nom)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }
            
            if(empty($description)) {
                echo "<font color='red'>Description field is empty.</font><br/>";
            }
            
            if(empty($image)) {
                echo "<font color='red'>Image field is empty.</font><br/>";
            }	
            if(empty($heure)) {
                echo "<font color='red'>Heure field is empty.</font><br/>";
            }	
            if(empty($prix)) {
                echo "<font color='red'>Prix field is empty.</font><br/>";
            }	
            if(empty($createur)) {
                echo "<font color='red'>Createur field is empty.</font><br/>";
            }		

        } else {	
            //updating the table
            $sql = "UPDATE user SET nom=:nom, description=:description, image=:image, heure=:heure,prix=:prix,createur=:createur WHERE id=:id";
            $query = $dbConn->prepare($sql);
                    
            $query->bindparam(':id', $id);
            $query->bindparam(':nom', $nom);
            $query->bindparam(':description', $description);
            $query->bindparam(':image', $image);
            $query->bindparam(':heure', $heure);
            $query->bindparam(':prix', $prix);
            $query->bindparam(':createur', $createur);
            $query->execute();
            
            // Alternative to above bindparam and execute
            // $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
                    
            //redirectig to the display page. In our case, it is index.php
        }
    }
    ?>
    <?php
    
    $id = $_GET['id'];
    
    
    $sql = "SELECT * FROM formation WHERE id=:id";
    
    $query = $dbConn->prepare($sql);
    
    $query->execute(array(':id' => $id));
    
    while($row = $query->fetch(PDO::FETCH_ASSOC))
    {
       
        $nom=$_POST['nom'];
        $description=$_POST['description'];
        $image=$_POST['image'];
        $heure=$_POST['heure'];	
        $prix=$_POST['prix'];	
        $createur=$_POST['createur'];	
    }
    ?>


  
    <!DOCTYPE html> 
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/index.scss">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
        
    
    <!-- UIkit JS -->
   

        <title>Document</title>
      </head>
      <body>

      gsgsgsg

<?php
    include './include/footer.php'
    ?>  <script src="./javascript/createforma.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
       <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
     </html>