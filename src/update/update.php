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
	<h1>Modifier film</h1>
	<?php


		if (isset($_GET['idFilm'])) {
			$codef = $_GET['idFilm'];
			
			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$dbname ="gestion film";
			$conn = mysqli_connect($host, $user, $pass, $dbname);
			if (!$conn) {
				die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
			}
			
	
			$sql = "SELECT * FROM film WHERE idFilm='$codef'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);
				$codef = $row['idFilm'];
				$nomf = $row['nomfilm'];
				$prod = $row['producteur'];
				$type = $row['type'];
				$img = $row['img'];

            
			} else {
				echo "Erreur : Film non trouve.";
				exit();
			}
			
		
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            	$nomf = $_POST['nomf'];
				$prod = $_POST['prod'];
				$type = $_POST['type'];
				$img = $row['img'];
			
				$sql = "update film set nomfilm='$nomf',producteur='$prod' ,type='$type',img='$img' where codefilm='$codef' ";
				if (mysqli_query($conn, $sql)) {
					echo "film modifie avec succès.<br>";
				} else {
					echo "Erreur de modification de film : <br> " . mysqli_error($conn);
				}
			}
			
		
			echo "<form method='POST'>";
			echo "Code du livre : <input type='text' name='codef' value='$codef'><br><br>";
			echo "Nom du livre : <input type='text' name='nomf' value='$nomf'><br><br>";
			echo "Producteur : <input type='text' name='prod' value='$prod'><br><br>";
			echo "Type : <input type='text' name='type' value='$type'><br><br>";
			echo "img : <input type='text' name='type' value='$img'><br><br>";

			echo "<input type='submit' value='Modifier'>";
			echo "<input type='reset' value='Annuler'><br><br>";
			
			echo "</form>";
			
			
			mysqli_close($conn);
		} else {
			echo "Erreur : identifiant de livre non renseigne.";
		}
	?>
	<p><a href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/addmin/addmin.php">Liste des etudiants</a></p>
</body>
</html>
