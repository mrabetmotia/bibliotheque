<?php
$Nomf=$_POST["nomf"];
$prod=$_POST["prod"];
$type=$_POST["type"];
$img=$_POST["img"];
$nb=$_POST["nb"];





$serveur="localhost";
$utilisateur="root";
$mot_passe="";
$base_donnee="gestion film";

$c=mysqli_connect($serveur,$utilisateur,$mot_passe) or die ("erreur de connexion au serveur");
mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));



$requete="select * from film where nomfilm='$Nomf';" ;

$resultat=mysqli_query($c,$requete) or die ("impossible d'executer la requete<br>");

$Num=mysqli_num_rows($resultat);

if($Num==0){
   $requete= "insert into film(nomfilm,producteur,type,img,nb) values ('$Nomf','$prod','$type','$img','$nb');";

    $resultat=mysqli_query ($c, $requete) or die ("erreur d'insertion<br>". mysqli_error($c));
    
    //ou $requete="INSERT INTO personne (Num_CIN,Nom,Prenom,Ville,Email,HTML,javascript,PHP) VALUES ('$Num_CIN','$Nom','$Prenom');" ;
    
    ?>
    <script>
                alert("insertion reussite");
                
    </script>
    <?php
    header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/addmin/addmin.php');}
 // Ajout d'un enregistrement à la table "personne" }

else { ?>
    <script>
                alert("Livre already exsiste");
                
    </script>
    <?php
    header('refresh: 4; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/Ajout/ajout.html');
 }
?>