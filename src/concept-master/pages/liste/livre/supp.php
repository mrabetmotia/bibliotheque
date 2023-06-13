
<?php
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname = 'gestion film';
   
   $conn = mysqli_connect($host, $user, $pass, $dbname);
   	if (!$conn) {
   		die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
   		}
   			
   	if (isset($_GET['idFilm'])) {
   		$idFilm = $_GET['idFilm'];
   		$sql = "DELETE FROM film WHERE idFilm=$idFilm";
   		if ($conn->query($sql) === TRUE) {
   			?>
	<script>
		alert("Merci, Livre <?php echo $idFilm ?> a bien ete supprime");
	</script>
	<?php
	header('refresh: 0; http://127.0.0.1/projects/poject/src/concept-master/pages/liste/livre/livre.php');
	} else {
	echo "Erreur lors de la suppression de livre: " . $conn->error;
	}
	$conn->close();
	}
	
?>