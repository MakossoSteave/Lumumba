<?php 

require '../db.php';

session_start();
$B = $_POST['book_name'];
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1

if (isset($_GET['search'])) {
	$stmt = $pdo->prepare('SELECT * FROM user
						   WHERE id LIKE :search_query
							  OR name LIKE :search_query
							  OR email LIKE :search_query
							  OR phone LIKE :search_query
							  OR title LIKE :search_query
							  OR created LIKE :search_query');
	$stmt->bindValue(':search_query', '%' . $B . '%');
	$stmt->execute();
    $num_contacts = $stmt->fetchColumn();
} else  {
   $stmt1=  $pdo->prepare('SELECT * FROM user where nom like :search_query
   or prenom like :search_query
   or Role like :search_query
   ');
   $stmt1->bindValue(':search_query', '%' . $B . '%');
   $stmt1->execute();
   $contact=$stmt1->fetchAll(PDO::FETCH_ASSOC); 
   if (empty($contact)){
    echo "";
   }else{
     ?>
     <div style="background-color: #fff;">
        <h2 class="f4 mb-2 text-normal">
  Utilisateurs
   </h2>
  
   <ol class="d-flex flex-wrap list-style-none gutter-condensed mb-4"> 
       
   <?php foreach ($contact as $user): ?>
    <li class="col-12 col-md-6 col-lg-6 mb-3 d-flex flex-content-stretch">
    <div class="Box pinned-item-list-item d-flex p-3 width-full public source">
    <div class="pinned-item-list-item-content">
    <div class="d-flex width-full flex-items-center position-relative">
        <a href="" class="text-bold flex-auto min-width-0">
        <?=$user['Role'] ?>
        </a>
    </div>
    <p class="pinned-item-desc text-gray text-small d-block mt-2 mb-3">
    <?=$user['nom'] ?>
    <?=$user['prenom'] ?>
    </p>
   <p class="mb-0 f6 text-gray">
<span class="d-inline-block mr-3" style="background-color: #f1e05a">
<a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>En Savoir plus</strong>
                        </a>


</span>
   </p>
    </div>
    </div> 
    <?php endforeach; ?>
    </li>
   </ol>
   </div>
  
     <?php
   }
   ?>
   
   <?php

   $forma =  $pdo->prepare('SELECT * FROM formation where libelle like :search_query
   or libelleLong like :search_query
   or creerPar like :search_query

   ');
   $forma->bindValue(':search_query', '%' . $B . '%');
   $forma->execute();
   $formations=$forma->fetchAll(PDO::FETCH_ASSOC); 
   ?>
   <?php
   
   if(empty($formations)){
       echo "";
   }else{
       ?>
        <div style="background-color: #fff;">
         <h2 class="f4 mb-2 text-normal">
 Formations
   </h2>
  
   <ol class="d-flex flex-wrap list-style-none gutter-condensed mb-4"> 
       
   <?php foreach ($formations as $user): ?>
    
    <li class="col-12 col-md-6 col-lg-6 mb-3 d-flex flex-content-stretch">
    <div class="Box pinned-item-list-item d-flex p-3 width-full public source">
    <div class="pinned-item-list-item-content"><hr style="border: 1px solid black;
  border-radius: 2px;">
    <div class="d-flex width-full flex-items-center position-relative">
        
        <a href="" class="text-bold flex-auto min-width-0">
        <?=$user['libelle'] ?>
        </a>
    </div>
    <p class="pinned-item-desc text-gray text-small d-block mt-2 mb-3">
    <?=$user['libelleLong'] ?>
    </p>
                    <img src="<?= $user['img']?>" alt="">
            <br>
   <p class="mb-0 f6 text-gray">
<span class="d-inline-block mr-3" >
<br>
<a class="button is-primary" href="./inscription.php" style="text-decoration: none;">
                            <strong>S'inscrire</strong>
                        </a>

</span>
   </p>
    </div>
    </div> 
    <?php endforeach; ?>
    </li>
   </ol>
    </div>
       <?php
   }
   ?>
   
   
   
   <?php

   $proj =  $pdo->prepare('SELECT * FROM projet where nom like :search_query
   or description like :search_query
   or creerPar like :search_query

   ');
   $proj->bindValue(':search_query', '%' . $B . '%');
   $proj->execute();
   $projets=$proj->fetchAll(PDO::FETCH_ASSOC); 
}


?>

