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
        <link href="styles.css" rel="stylesheet" />
        <link href="commande.css" rel="stylesheet" />

        <?php
            $serveur="localhost";
            $utilisateur="root";
            $mot_passe="";
            $base_donnee="gestion film";

            $c=mysqli_connect($serveur,$utilisateur,$mot_passe) or die ("erreur de connexion au serveur");
            mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));
            $requete="select * from film" ;

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
        </style>
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <?php include 'nav.php'; ?>

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
            <input type="text" class="form-control" name="user" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            <input type="text" class="form-control" name="tel" placeholder="Telephone" aria-label="Username" aria-describedby="basic-addon1">

            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control"  name="email" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
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


        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="contactF.php">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" name="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>

        <!-- Footer-->
        <?php include 'footer.php'; ?>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
