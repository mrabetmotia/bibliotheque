<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Commande</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/img/biblioth-que-du-film-26.jpg" />
      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="../../styles.css" rel="stylesheet" />
      <link href="commande.css" rel="stylesheet" />
      <?php include '../connection/connection.php'; ?>
      <style>
         @media (min-width: 992px) {
         #mainNav {
         padding-top: 1.5rem;
         padding-bottom: 1.5rem;
         border: none;
         background-color: #212529;
         transition: padding-top 0.3s ease-in-out, padding-bottom 0.3s ease-in-out;
         }}
         .footer{
         background-color:#212529;
         }
         .col-lg-4,.link-dark{
         color:white;
         }
      </style>
   </head>
   <body id="page-top">
      <!-- Navigation-->
      <?php include '../../partials/nav.php'; ?>
      <!-- Masthead-->
      <header class="masthead">
         <div class="container">
            <div class="masthead-subheading">Welcome To Our Studio!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
         </div>
      </header>
      <!--commande-->
      <form action="commande_req.php" id="commande" method="POST" class="comm">
         <h1>Ajouter un commmande</h1>
         <div class="input-group mb-3">
            <input type="text" class="form-control" name="user" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" require>
            <input type="number" class="form-control" name="tel" placeholder="Telephone" aria-label="Username" aria-describedby="basic-addon1" require>
            <input type="number" class="form-control" name="qte" placeholder="Nombre De Livre Commandé" aria-label="Username" aria-describedby="basic-addon1" require>
         </div>
         <div class="input-group mb-3">
            <input type="text" class="form-control"  name="email" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2" require>
            <span class="input-group-text" id="basic-addon2">@gmail.com</span>
         </div>
         <h2 for="basic-url" class="form-label">Your Livre </h2>
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
                    $prix = $row['prix'];
                    $nb = $row['nb'];
            
                } else {
                    echo "Erreur : Film non trouve.";
                    exit();
                }
                }
            ?>
         <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Nom Livre</span> 
            <input type="text" name="name" class="form-control" <?php echo" value=' $nomf' "?>    id="basic-url" aria-describedby="basic-addon3">
            <span class="input-group-text">Producteur</span>
            <input type="text" name="prod" class="form-control" <?php echo" value=' $prod' "?> >
            <span class="input-group-text">Type</span>
            <input type="text" name="type"class="form-control" <?php echo" value=' $type' "?>   >
         </div>
         <div class="input-group mb-3">
            <?php
               echo " <span class='input-group-text'>Prix</span>";
               echo "  <input type='text' name='prix' class='form-control' value='$prix'>";
               echo " <span class='input-group-text'>Nombre de Page</span>";
               echo "  <input type='text' name='nb' class='form-control' value='$nb'>";
               ?>
         </div>
         <div class="text-center"><button class= " btncomm btn btn-primary btn-xl text-uppercase" type="submit">Send Commande</button></div>
      </form>
      <!-- Footer-->
      <?php include '../../partials/footer.php'; ?>
      <!-- Portfolio Modals-->
      <!-- Portfolio item 1 modal popup-->
      <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-8">
                        <div class="modal-body">
                           <!-- Project details-->
                           <h2 class="text-uppercase">Project </h2>
                           <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                           <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                           <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                           <ul class="list-inline">
                              <li>
                                 <strong>Client:</strong>
                                 Threads
                              </li>
                              <li>
                                 <strong>Category:</strong>
                                 Illustration
                              </li>
                           </ul>
                           <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                           <i class="fas fa-xmark me-1"></i>
                           Close Project
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JS-->
      <?php include '../../partials/scripte.php'; ?>
   </body>
</html>