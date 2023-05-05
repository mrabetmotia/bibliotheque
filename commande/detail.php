<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <title>Detail</title>

      <?php
         include '../src/connection/connection.php'; 
         
            session_start();
            
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
         margin-top:8%;
         }
         .detail{
         margin:5%;
         }
         .a {
         color: #ffc800;
         text-decoration: underline;
         }   
         h1{
         color:#ffc800;
         margin-bottom:3%;
         }
         p {
         font-family: Verdana, Arial, Helvetica, sans-serif;
         font-size: 20px;
         line-height: 1.5;
         color: #333;
         margin: 0 0 1em;
         }
      </style>
   </head>
   <body id="page-top">
      <!-- Navigation-->
      <?php include '../partials/nav.php'; ?>
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
         <h1>Plus Detail Pour Livre <?php echo"'$nomf'"?></h1>
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
      <?php include '../partials/footer.php'; ?>
      <!-- Bootstrap core JS-->
      <?php include '../partials/scripte.php'; ?>
   </body>
</html>