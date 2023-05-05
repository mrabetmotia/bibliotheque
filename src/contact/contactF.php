<?php
//ou extract($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

include '../connection/connection.php';

$Num = mysqli_num_rows($resultat);

$requete = "insert into contact(name,email,phone,message) values ('$name','$email','$phone','$message');";

if ((isset($name)) || (isset($email)) || (isset($phone)) || (isset($message)))
{
    $resultat = mysqli_query($c, $requete) or die("erreur d'insertion<br>" . mysqli_error($c));
?>
    <script>
                alert("Message send ");
    </script>
    <?php
    header('refresh: 0.1; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/');

}
else
{
?>
    <script>
                alert("Remplire Tout Les champe ");
    </script>
    <?php
    header('refresh: 0.1; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/#contact');
}

?>
