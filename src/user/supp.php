<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'gestion film';

$conn = mysqli_connect($host, $user, $pass, $dbname);
	if (!$conn) {
		die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
		}
			
	if (isset($_GET['iduser'])) {
		$iduser = $_GET['iduser'];
		$sql = "DELETE FROM user WHERE iduser=$iduser";
		if ($conn->query($sql) === TRUE) {
			echo "Merci, User id $iduser a bien ete supprime";
			echo "<br><input type='button' value='Retour' onclick='window.location.href=\"user.php\"'>";
		} else {
			echo "Erreur lors de la suppression de l'étudiant: " . $conn->error;
		}
		$conn->close();
	}
		
?>

