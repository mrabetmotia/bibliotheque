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
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="styles.css" rel="stylesheet" />
      <?php
         include 'src/connection/connection.php';
       ?>
       <style>
  .filter-bar {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
   }

   .filter-item {
      margin-right: 10px;
   }

   .label {
      font-weight: bold;
      margin-right: 5px;
   }

   .select {
      padding: 8px;
      border-radius: 20px;
      border: 1px solid #ccc;
      font-family: Arial, sans-serif;
      font-size: 14px;
      color: #333;
   }

   .a{
      padding: 8px 16px;
      background-color: #2e352e;
      color: white;
      border-radius: 15px;
      cursor: pointer;
      font-family: Arial, sans-serif;
      font-size: 14px;
   }
   
   .a:hover {
      background-color: #000000;
   }

   .a:hover {
      background-color: #000000;
   }
       </style>
   </head>
   <body id="page-top">
      <!-- Navigation-->
      <?php include 'partials/nav.php'; ?>
      <!-- Masthead-->
      <header class="masthead">
         <div class="container">
            <div class="masthead-subheading">Welcome to the library</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="http://127.0.0.1/projects/poject/#contact">Tell Me More</a>
         </div>
      </header>
      <!--affichage-->
      <section class="page-section bg-light" id="portfolio">
   <div class="container">
      <div class="text-center">
         <h2 class="section-heading text-uppercase">Portfolio</h2>
         <h3 class="section-subheading text-muted">Liste de films disponibles</h3>
      </div>
      <form action="" method="POST">
      
<div class="filter-bar">
   <div class="filter-item">
      <label class="label" for="type-filter">Type :</label>
      <select class="select" id="type-filter" name="type">
         <option value="all">Tous</option>
         <option value="Roman">Roman</option>
         <option value="Fantastique">Fantastique</option>
         <option value="Romance">Romance</option>
         <option value="Action">Action</option>
      </select>
   </div>
   <button class="a" type="submit"><i class="fa fa-search"></i> Recherche</button>
</div>
      </form>
      <div class="row">
         <?php
         if (empty($_POST['type'])) {
            $_POST['type'] = 'all';
        }   
         $Type = $_POST["type"]; 

         if ($Type == 'all') {
               while ($i = mysqli_fetch_array($resultat)) {
                  renderPortfolioItem($i);
               }
            } elseif ($Type ==  "Roman") {
               while ($i = mysqli_fetch_array($Roman)) {
                  renderPortfolioItem($i);
               }
            }elseif ($Type ==  "Fantastique") {
               while ($i = mysqli_fetch_array($Fantastique)) {
                  renderPortfolioItem($i);
               }
            }elseif ($Type ==  "Romance") {
               while ($i = mysqli_fetch_array($Romance)) {
                  renderPortfolioItem($i);
               }
            }elseif ($Type ==  "Action") {
               while ($i = mysqli_fetch_array($Action)) {
                  renderPortfolioItem($i);
               }
            }
            function renderPortfolioItem($item)
            {
               ?>
               <div class="col-lg-4 col-sm-6 mb-4">
                  <div class="portfolio-item">
                     <img class="img-fluid" src="assets/img/portfolio/<?php echo $item["img"]; ?>.jpg" alt="..." />
                     <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"><?php echo $item["nomfilm"]; ?></div>
                        <div class="portfolio-caption-subheading text-muted"><?php echo $item["producteur"]; ?></div>
                        <div class="portfolio-caption-subheading text-muted"><?php echo $item["type"]; ?></div>
                        <div class="portfolio-caption-subheading text-muted"><?php echo $item["nb"]; ?> Pages</div>
                        <div class="portfolio-caption-subheading text-muted"><?php echo $item["prix"]; ?> TND</div>
                        <a href="http://127.0.0.1/projects/poject/src/commande/commande.php?idFilm=<?php echo $item["idFilm"]; ?>">Commande</a>
                        <br />
                        <a href="commande/detail.php?idFilm=<?php echo $item["idFilm"]; ?>">Plus de détails</a>
                     </div>
                  </div>
               </div>
            <?php
            }
         ?>
      </div>
   </div>
</section>


      <!-- About-->
      <section class="page-section" id="about">
         <div class="container">
            <div class="text-center">
               <h2 class="section-heading text-uppercase">About</h2>
               <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <ul class="timeline">
               <li>
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                  <div class="timeline-panel">
                     <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                     </div>
                     <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                     </div>
                  </div>
               </li>
               <li class="timeline-inverted">
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                  <div class="timeline-panel">
                     <div class="timeline-heading">
                        <h4>March 2011</h4>
                        <h4 class="subheading">An Agency is Born</h4>
                     </div>
                     <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                  <div class="timeline-panel">
                     <div class="timeline-heading">
                        <h4>December 2015</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                     </div>
                     <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                     </div>
                  </div>
               </li>
               <li class="timeline-inverted">
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                  <div class="timeline-panel">
                     <div class="timeline-heading">
                        <h4>July 2020</h4>
                        <h4 class="subheading">Phase Two Expansion</h4>
                     </div>
                     <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                     </div>
                  </div>
               </li>
               <li class="timeline-inverted">
                  <div class="timeline-image">
                     <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                     </h4>
                  </div>
               </li>
            </ul>
         </div>
      </section>
      <!-- Team-->
      <section class="page-section bg-light" id="team">
         <div class="container">
            <div class="text-center">
               <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
               <h3 class="section-subheading text-muted">Contact the admin if you encounter any problems</h3>
            </div>
            <div class="row">
               <?php
                  while ($i=mysqli_fetch_array($admin)){
                  ?>
               <div class="col-lg-4">
                  <div class="team-member">
                     <img class="mx-auto rounded-circle" src="assets/img/team/<?php echo $i["img"]; ?>.jpg" alt="..." />
                     <h4><?php echo $i["nom"]; ?></h4>
                     <p class="text-muted"><?php echo $i["email"]; ?></p>
                     <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </section>
      <!-- Contact-->
      <section class="page-section" id="contact">
         <div class="container">
            <div class="text-center">
               <h2 class="section-heading text-uppercase">Contact Us</h2>
               <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="src/contact/contactF.php">
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
               <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">Error sending message!</div>
               </div>
               <!-- Submit Button-->
               <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button></div>
            </form>
         </div>
      </section>
      <!-- Footer-->
      <?php include 'partials/footer.php'; ?>
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
      <?php include 'partials/scripte.php'; ?>
   </body>
</html>