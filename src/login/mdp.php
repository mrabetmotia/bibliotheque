<?php 
$email = $_POST["emaill"];
$newPassword = $_POST["nmdp"];
$confirmedPassword = $_POST["cmdp"];

$serveur = "localhost";
$utilisateur = "root";
$mot_passe = "";  
$base_donnee = "gestion film";

$c = mysqli_connect($serveur, $utilisateur, $mot_passe) or die("Erreur de connexion au serveur");
mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($newPassword !== $confirmedPassword) {
        ?>
        <script>
            alert("Les mots de passe ne correspondent pas");
        </script>
        <?php
        header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/login/oublie.php');
        exit;
    }
    $requete = "UPDATE user SET mdp = '$newPassword' WHERE email = '$email'";
$result = mysqli_query($c, $requete);

if ($result) {
    $num_rows_affected = mysqli_affected_rows($c);
    if ($num_rows_affected > 0) {
        ?>
        <script>
            alert("Le mot de passe a été mis à jour avec succès.");
        </script>
        <?php
        header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/login/login.html');
    } else {
        ?>
        <script>
            alert("aucun enregistrement mis à jour.");
        </script>
        <?php
        header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/login/oublie.php');
    }
} else {
    echo "Erreur: " . mysqli_error($c);
}

}
?>
