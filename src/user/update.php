<!DOCTYPE html>
<html>
<head>
	<title>Modifier film</title>
	<meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="sidebar.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/biblioth-que-du-film-26.jpg" />
    <style>
            body{
                padding-top: 4.5rem;
                padding-bottom: 20rem;
                text-align: center;
                color: #000000;

            }
            .titre{
                padding: 5% 0;
            }
            table{
            margin-left: 31%;
            }
            .w{
            padding-right: 10%;
            }
            .body{
                padding: 0 20%;
            }
        </style>
</head>
<body>
	<h1>Modifier Info of User</h1>
	<?php
	
		if (isset($_GET['iduser'])) {
			$iduser = $_GET['iduser'];
			
			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$dbname ="gestion film";
			$conn = mysqli_connect($host, $user, $pass, $dbname);
			if (!$conn) {
				die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
			}
			
	
			$sql = "SELECT * FROM user WHERE iduser='$iduser'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);
				$iduser = $row['iduser'];
				$nom = $row['nom'];
				$email = $row['email'];
				$tel = $row['tel'];
				$mdp = $row['mdp'];
				$type = $row['type'];

            
			} else {
				echo "Erreur : Film non trouve.";
				exit();
			}
			
		
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            	$nom = $_POST['nom'];
				$email = $_POST['email'];
				$tel = $_POST['tel'];
				$mdp = $_POST['mdp'];
				$type = $_POST['type'];

			
				$sql = "update user set nom='$nom',email='$email',tel='$tel',mdp='$mdp',type='$type'  where iduser='$iduser' ";
				if (mysqli_query($conn, $sql)) {
					echo "user modifie avec succès.<br>";
				} else {
					echo "Erreur de modification de user : <br> " . mysqli_error($conn);
				}
			}
			
		
			echo "<form method='POST'>";
			echo "Id User : <input type='text' name='codef' value='$iduser'><br><br>";
			echo "Nom  : <input type='text' name='nom' value='$nom'><br><br>";
			echo "Email : <input type='text' name='email' value='$email'><br><br>";
			echo "Téléphone  : <input type='text' name='tel' value='$tel'><br><br>";
			echo "Mot de Passe : <input type='text' name='mdp' value='$mdp'><br><br>";
			echo "Type : <input type='text' name='type' value='$type'><br><br>";
			
			echo "<input type='submit' value='Modifier'>";
			echo "<input type='reset' value='Annuler'><br><br>";
			
			echo "</form>";
			
			
			mysqli_close($conn);
		} else {
			echo "Erreur : identifiant de User non renseigne.";
		}
	?>
	<p><a href="user.php">Liste des etudiants</a></p>
</body>
</html>
