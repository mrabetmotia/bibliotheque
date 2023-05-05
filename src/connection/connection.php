<?php
$serveur = "localhost";
$utilisateur = "root";
$mot_passe = "";
$base_donnee = "gestion film";

$c = mysqli_connect($serveur, $utilisateur, $mot_passe) or die("erreur de connexion au serveur");
mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));
$requete = "select * from film;";
$commande = "select * from commande;";
$user = "select * from user;";
$contact = "select * from contact;";
$Livre = "select * from film;";
$admin = "select * from user where type='admin';";
$user = "select * from user where type='user';";

$resultat = mysqli_query($c, $requete);
$Commande = mysqli_query($c, $commande);
$User = mysqli_query($c, $user);
$Contact = mysqli_query($c, $contact);
$admin = mysqli_query($c, $admin);
$Livree = mysqli_query($c, $Livre);
$User = mysqli_query($c, $user);

?>
