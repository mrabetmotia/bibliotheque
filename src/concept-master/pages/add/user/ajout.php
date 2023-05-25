<?php
   $nom=$_POST["nom"];
   $email=$_POST["email"];
   $tel=$_POST["tel"];
   $mdp=$_POST["mdp"];
   $type=$_POST["type"];
   $img=$_POST["img"];
   
   include '../../../../connection/connection.php'; 
   
   $requete="select * from user where email='$email';" ;
   $requete= "insert into user(nom,email,tel,mdp,type,img) values ('$nom','$email','$tel','$mdp','$type','$img');";
   $resultat=mysqli_query ($c, $requete) or die ("erreur d'insertion<br>". mysqli_error($c));
   
   $Num=mysqli_num_rows($resultat);
   
   if($Num==0){
       ?>
   <script>
      alert("insertion reussite");
      
   </script>
   <?php
      header('refresh: 0; http://127.0.0.1/projects/poject/src/concept-master/pages/add/user/user.php');}
      // Ajout d'un enregistrement à la table "personne" }
      
      else { ?>
   <script>
      alert("user already exsiste");
      
   </script>
   <?php
      header('refresh: 4; http://127.0.0.1/projects/poject/src/concept-master/pages/add/user/user.php');
      }
?>