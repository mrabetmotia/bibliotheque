<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'gestion film';

$conn = mysqli_connect($host, $user, $pass, $dbname);
	if (!$conn) {
		die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
		}
			
	if (isset($_GET['codef'])) {
		$codef = $_GET['codef'];
		$sql = "DELETE FROM film WHERE codefilm=$codef";
		if ($conn->query($sql) === TRUE) {
			echo "Merci, Livre $codef a bien ete supprime";
			echo "<br><input type='button' value='Retour' onclick='window.location.href=\"http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/addmin/addmin.php\"'>";
		} else {
			echo "Erreur lors de la suppression de livre: " . $conn->error;
		}
		$conn->close();
	}
		
?>

