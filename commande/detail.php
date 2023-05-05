<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>My bibliotheque</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/img/biblioth-que-du-film-26.jpg" />
      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="../styles.css" rel="stylesheet" />
      <link href="commande.css" rel="stylesheet" />
      <?php
         $serveur="localhost";
         $utilisateur="root";
         $mot_passe="";
         $base_donnee="gestion film";
         
         $c=mysqli_connect($serveur,$utilisateur,$mot_passe) or die ("erreur de connexion au serveur");
         mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));
         $requete="select * from film" ;
         session_start();
         
         $resultat=mysqli_query($c,$requete) or die ("impossible d'executer la requete<br>");
         ?>
      <style>
         @media (min-width: 992px) {
         #mainNav {
         padding-top: 1.5rem;
         padding-bottom: 1.5rem;
         border: none;
         background-color: #212529;
         transition: padding-top 0.3s ease-in-out, padding-bottom 0.3s ease-in-out;
         }}
         footer{
         background-color: #212529;
         }
         .text-lg-start{
         color:white;
         }        
         .link-dark{
         color:white;
         }
         .img{
         margin-top:15%;
         }
         .detail{
         margin:5%;
         }
         .a {
         color: #ffc800;
         text-decoration: underline;
         }   
      </style>
   </head>
   <body id="page-top">
      <!-- Navigation-->
      <?php include '../nav.php'; ?>
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
             $img = $row['img'];
             $detail = $row['detail'];
         
         
         } else {
             echo "Erreur : Film non trouve.";
             exit();
         }
         }
         ?>
      <!--commande-->
      <center class="img">
         <h1>Plus Detail Pour <?php echo"'$nomf'"?></h1>
         <div class=" col-lg-4 col-sm-6 mb-4">
            <!-- Portfolio item 1-->
            <div class="portfolio-item">
               <img class="img-fluid" src="../assets/img/portfolio/<?php echo"$img"?>.jpg" alt="..." />
            </div>
         </div>
      </center>
      <div class="portfolio-caption">
         <p class="detail"><?php echo"$detail"?> <br><a href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/#portfolio" class="a">Retour</a></p>
      </div>
      <!-- Footer-->
      <?php include '../footer.php'; ?>

      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="js/scripts.js"></script>
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   </body>
</html>