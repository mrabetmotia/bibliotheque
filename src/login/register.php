<?php
$email=$_POST["email"];
$nom=$_POST["nom"];
$mdp=$_POST["mdp"];
$cmdp=$_POST["cmdp"];

$serveur="localhost";
$utilisateur="root";
$mot_passe="";  
$base_donnee="gestion film";

$c=mysqli_connect($serveur,$utilisateur,$mot_passe) or die ("erreur de connexion au serveur");
mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));

echo("connexion au serveur et base de donnees reussite <br>");


$requete="select * from user where email='$email';" ;

$resultat=mysqli_query($c,$requete) or die ("impossible d'executer la requete<br>");

$Num=mysqli_num_rows($resultat);

if(($Num==0) and ($mdp==$cmdp)) 

 {$requete= "insert into user(email,nom,mdp) values ('$email','$nom','$mdp');";
    
    $resultat=mysqli_query ($c, $requete) or die ("erreur d'insertion<br>". mysqli_error($c));
    
    //ou $requete="INSERT INTO personne (Num_CIN,Nom,Prenom,Ville,Email,HTML,javascript,PHP) VALUES ('$Num_CIN','$Nom','$Prenom');" ;
    ?>
    <script>
                alert("insertion reussite");
    </script>
    <?php
    header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/');
    
    ;}
 // Ajout d'un enregistrement à la table "personne" }

elseif ($cmdp != $mdp)
{?>
    <script>
                alert("pleas confirm your password ");
                
    </script>
    <?php
    header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/login/login.html');}
else{
    ?>
    <script>
                alert("this email already creat acunt");
                
    </script>
    <?php
    header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/');
}    
?>