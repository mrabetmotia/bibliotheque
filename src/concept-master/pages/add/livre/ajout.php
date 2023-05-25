<?php 
   include '../../../../connection/connection.php'; 
   
   
   
   $nomf=$_POST["nomf"];
   $prod=$_POST["prod"];
   $type=$_POST["type"];
   $img=$_POST["img"];
   $nb=$_POST["nb"];
   $prix=$_POST["prix"];
   $des=$_POST["des"];
   $qte=$_POST["qte"];
   $requete= "insert into film(nomfilm,producteur,type,img,nb,prix,detail,qte) values ('$nomf','$prod','$type','$img','$nb','$prix','$des','$qte');";
   
   $resultat=mysqli_query ($c, $requete) or die ("erreur d'insertion<br>". mysqli_error($c));
   $Num=mysqli_num_rows($resultat);
   
   if($Num==0){
   
       
       //ou $requete="INSERT INTO personne (Num_CIN,Nom,Prenom,Ville,Email,HTML,javascript,PHP) VALUES ('$Num_CIN','$Nom','$Prenom');" ;
       
       ?>
   <script>
      alert("insertion reussite");
      
   </script>
   <?php
      header('refresh: 0; http://127.0.0.1/projects/poject/src/concept-master/pages/add/livre/livre.php');}
      
      else { ?>
   <script>
      alert("Livre already exsiste");
      
   </script>
   <?php
      header('refresh: 4; http://127.0.0.1/projects/poject/src/concept-master/pages/add/livre/livre.php');
      }
?>