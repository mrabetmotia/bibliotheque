<?php 
   include '../../../../connection/connection.php'; 
   
   
   $requete="select * from film where nomfilm='$Nomf';" ;
   
   
   
   $Num=mysqli_num_rows($resultat);
   
   if($Num==0){
      $requete= "insert into film(nomfilm,producteur,type,img,nb,prix,detail) values ('$Nomf','$prod','$type','$img','$nb','$prix','$des');";
   
       $resultat=mysqli_query ($c, $requete) or die ("erreur d'insertion<br>". mysqli_error($c));
       
       //ou $requete="INSERT INTO personne (Num_CIN,Nom,Prenom,Ville,Email,HTML,javascript,PHP) VALUES ('$Num_CIN','$Nom','$Prenom');" ;
       
       ?>
   <script>
      alert("insertion reussite");
      
   </script>
   <?php
      header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/concept-master/index.php');}
      // Ajout d'un enregistrement à la table "personne" }
      
      else { ?>
   <script>
      alert("Livre already exsiste");
      
   </script>
   <?php
      header('refresh: 4; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/Ajout/ajout.html');
      }
?>