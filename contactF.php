<?php
//ou extract($_POST);
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];


$serveur="localhost";
$utilisateur="root";
$mot_passe="";
$base_donnee="gestion film";

$c=mysqli_connect($serveur,$utilisateur,$mot_passe) or die ("erreur de connexion au serveur");
mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));

$requete="select * from contact" ;

$resultat=mysqli_query($c,$requete) or die ("impossible d'executer la requete<br>");

$Num=mysqli_num_rows($resultat);

$requete = "insert into contact(name,email,phone,message) values ('$name','$email','$phone','$message');";

if ((isset($name)) ||(isset($email))||(isset($phone))||(isset($message))) {
    ?>
    <script>
                alert("Remplire Tout Les champe ");
    </script>
    <?php
    header('refresh: 0.1; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/#contact');
}else{
    $resultat=mysqli_query ($c, $requete) or die ("erreur d'insertion<br>". mysqli_error($c));
    ?>
    <script>
                alert("Message send ");
    </script>
    <?php
    header('refresh: 0.1; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/');
}

?>