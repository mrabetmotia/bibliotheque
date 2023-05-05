<?php
$email=$_POST["emaill"];
$mdp=$_POST["mdpp"];

$serveur="localhost";
$utilisateur="root";
$mot_passe="";
$base_donnee="gestion film";

$c=mysqli_connect($serveur,$utilisateur,$mot_passe) or die ("erreur de connexion au serveur");
mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));



$requete="select * from user where email='$email';" ;

$resultat=mysqli_query($c,$requete) or die ("impossible d'executer la requete<br>");

$email=mysqli_num_rows($resultat);

$requete="select * from user where mdp='$mdp';" ;

$resultat=mysqli_query($c,$requete) or die ("impossible d'executer la requete<br>");

$mdp=mysqli_num_rows($resultat);
session_start();

if($email==0) 
 {

    ?>
    <script>
                alert("email not exsiste");
    </script>
    <?php
    header('refresh: 0.1; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/login/login.html');
    
    ;}
 // Ajout d'un enregistrement à la table "personne" }

elseif ($mdp == 0)
{?>
    <script>
                alert("password is not exsiste");
                
    </script>
    <?php
    header('refresh: 0.1; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/login/login.html');}


else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve user information from form submission
        $Email = $_POST['emaill'];
        $password = $_POST['mdpp'];

        // Connect to the database
        try {
        $pdo = new PDO("mysql:host=localhost;dbname=gestion film", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
        echo $e->getMessage();
        die();
        }

        // Retrieve user information from the database
        $sql = "SELECT iduser, nom  ,email, tel, mdp, type FROM user WHERE email = '$Email'";
        $result = $pdo->query($sql);

        if ($result && $result->rowCount() == 1) {
        // User exists, verify password
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $stored_password = $row['mdp'];
        if ($password === $stored_password) {
        // Password is correct, set session variables and redirect to appropriate page
        $_SESSION['user_id'] = $row['iduser'];
        $_SESSION['username'] = $row['nom'];
        $_SESSION['Email'] = $row['email'];
        $_SESSION['Type'] = $row['type'];


        if ($_SESSION['Type'] == 'user') {
            ?>
            <script>
                        alert("Welcome <?php echo ($_SESSION['username'])?>");
                        
            </script>
            <?php
        header('Refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/');
        exit;
        } elseif ($_SESSION['Type'] == 'admin') {
        header('Refresh: 2; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/addmin/addmin.php');
        exit;
        }
        }

        // Close the database connection
        $pdo = null;

        // If user information is incorrect, display error message
        $error_message = "Incorrect Email or password";
        }
                ?>
            <script>
                        alert("Welcome");
                        
            </script>
            <?php
            header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/addmin/addmin.php');
        }
?>



