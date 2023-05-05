<?php
   //ou extract($_POST);
   $name=$_POST["name"];
   $user=$_POST["user"];
   $email=$_POST["email"];
   $tel=$_POST["tel"];
   $prod=$_POST["prod"];
   $type=$_POST["type"];
   $prix=$_POST["prix"];
   $nb=$_POST["nb"];                           
   
   $serveur="localhost";
   $utilisateur="root";
   $mot_passe="";
   $base_donnee="gestion film";
   
   $c=mysqli_connect($serveur,$utilisateur,$mot_passe) or die ("erreur de connexion au serveur");
   mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));
   
   $requete="select * from commande " ;
   
   $resultat=mysqli_query($c,$requete) or die ("impossible d'executer la requete<br>");
   session_start();
   
   $Num=mysqli_num_rows($resultat);
   if (isset($_SESSION['username'])){
       
       $requete = "insert into commande(nom,tel,email,noml,prod,type,prix,nb) values ('$user','$tel','$email','$name','$prod','$type','$prix','$nb');";
   
   
           $resultat=mysqli_query ($c, $requete) or die ("erreur d'insertion<br>". mysqli_error($c));
           ?>
    <script>
    alert("Commend successfully ");
    </script>
    <?php
    header('refresh: 0.1; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/');
    
    
    
    }else{
    ?>
    <script>
    alert("Login pleas");
    
    
    </script>
    <?php
    header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/login/login.html');
    }   
?>