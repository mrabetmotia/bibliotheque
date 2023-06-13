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
   $qte=$_POST["qte"];                           
   session_start();

   $serveur="localhost";
   $utilisateur="root";
   $mot_passe="";
   $base_donnee="gestion film";
   
   $c=mysqli_connect($serveur,$utilisateur,$mot_passe) or die ("erreur de connexion au serveur");
   mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));
   
   $requete="SELECT * FROM commande";
   $up = "UPDATE film SET qte = qte - '$qte' WHERE nb = '$nb'";
   
   $resultat = mysqli_query($c, $requete) or die("erreur de sélection<br>" . mysqli_error($c));
    
    $update = mysqli_query($c, $up) or die("erreur de mise à jour<br>" . mysqli_error($c));

   $Num = mysqli_num_rows($resultat);
   
   $teste_qte = "SELECT qte FROM film";
   $test = mysqli_query($c, $teste_qte) or die("erreur de sélection<br>" . mysqli_error($c));
   $row = mysqli_fetch_assoc($test);
   $available_qte = $row['qte'];
   
   if (empty($name) || empty($user) || empty($email) || empty($tel) || empty($prod) || empty($type) || empty($prix) || empty($nb) || empty($qte)) {
    ?>
    <script>
    alert("Veuillez remplir tous les champs");
    </script>
    <?php
    } elseif ($available_qte < $qte) {
       ?>
       <script>
       alert("Le nombre de livres est insuffisant");
       </script>
       <?php
       exit(); 
   } else if (isset($_SESSION['username'])) {

        $requete = "INSERT INTO commande(nom, tel, email, noml, prod, type, prix, nb, qte) VALUES ('$user','$tel','$email','$name','$prod','$type','$prix','$nb','$qte')";
        $resultat = mysqli_query($c, $requete) or die("erreur d'insertion<br>" . mysqli_error($c));
        ?>
        <script>
        alert("Commande effectuée avec succès");
        </script>
        <?php
        header('refresh: 0.1; http://127.0.0.1/projects/poject/');
    } else {
        ?>
        <script>
        alert("Veuillez vous connecter");
        </script>
        <?php
        header('refresh: 0; http://127.0.0.1/projects/poject/login/login.html');
        exit(); // or die();
    }   
?>
