<?php
$serveur = "localhost";
$utilisateur = "root";
$mot_passe = "";
$base_donnee = "gestion film";

$c = mysqli_connect($serveur, $utilisateur, $mot_passe) or die("erreur de connexion au serveur");
mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));
$requete = "SELECT * from film where qte >= 1;";
$commande = "SELECT * from commande;";
$user = "SELECT * from user;";
$contact = "SELECT * from contact;";
$Livre = "SELECT * from film;";
$admin = "SELECT * from user where type='admin';";
$user = "SELECT * from user where type='user';";
$roman = "SELECT * FROM film WHERE type = 'Roman' AND qte >= 1";
$fantastique = "SELECT * FROM film WHERE type = 'Fantastique' AND qte >= 1";
$romance = "SELECT * from film where type = 'Romance' AND qte >= 1";
$action = "SELECT * from film where type = 'Action' AND qte >= 1";


$resultat = mysqli_query($c, $requete);
$Commande = mysqli_query($c, $commande);
$User = mysqli_query($c, $user);
$Contact = mysqli_query($c, $contact);
$admin = mysqli_query($c, $admin);
$Livree = mysqli_query($c, $Livre);
$User = mysqli_query($c, $user);
$Roman = mysqli_query($c,$roman);
$Fantastique = mysqli_query($c,$fantastique);
$Romance = mysqli_query($c,$romance);
$Action = mysqli_query($c,$action);

?>
