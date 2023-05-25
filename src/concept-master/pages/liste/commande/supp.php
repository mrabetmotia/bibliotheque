<?php
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname = 'gestion film';
   
   $conn = mysqli_connect($host, $user, $pass, $dbname);
   	if (!$conn) {
   		die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
   		}
   			
   	if (isset($_GET['id'])) {
   		$id = $_GET['id'];
   		$sql = "DELETE FROM commande WHERE id=$id";
   		if ($conn->query($sql) === TRUE) {
   			?>
	<script>
	alert("Merci, commande  de <?php $id ?> a bien ete supprime");
	</script>
	<?php
	header('refresh: 0; http://127.0.0.1/projects/poject/src/concept-master/pages/liste/commande/commande.php');
	} else {
	echo "Erreur lors de la suppression de livre: " . $conn->error;
	}
	$conn->close();
	}
	
?>