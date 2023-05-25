
      <!doctype html>
      <html lang="en">
         <head>
            <!-- Required meta tags -->
            <?php include '../../../partials/head.php'; ?>
            <title>Add Livre</title>
            <style>
               img{
               max-width: 253%;
               border-radius: 40px;
               padding: 0 2% 0 0;
               margin: -8px 0px 0px -10px;
               }
               fieldset {
               border: 1px solid #ccc;
               border-radius: 5px;
               padding: 20px;
               margin: 20px auto;
               max-width: 500px;
               background-color: #f9f9f9;
               }
               legend {
               font-weight: bold;
               font-size: 24px;
               margin-bottom: 20px;
               text-align: center;
               }
               label {
               display: block;
               font-size: 18px;
               margin-bottom: 10px;
               }
               input[type="text"],
               input[type="number"],
               input[type="email"],
               textarea {
               width: 100%;
               padding: 10px;
               border: 1px solid #ccc;
               border-radius: 3px;
               font-size: 16px;
               margin-bottom: 20px;
               }
               input[type="reset"],
               input[type="submit"] {
               background-color: #4CAF50;
               color: #fff;
               padding: 10px 20px;
               border: none;
               border-radius: 3px;
               font-size: 18px;
               cursor: pointer;
               margin:0 0 0 18%;
               }
               input[type="reset"] {
               background-color: #f44336;
               margin-right: 10px;
               }
            </style>
         </head>
         <body>
            <!-- ============================================================== -->
            <!-- main wrapper -->
            <!-- ============================================================== -->
            <div class="dashboard-main-wrapper">
               <!-- ============================================================== -->
               <!-- navbar -->
               <!-- ============================================================== -->
               <?php include '../../../partials/navbar.php'; ?>
               <!-- ============================================================== -->
               <!-- end navbar -->
               <!-- ============================================================== -->
               <!-- ============================================================== -->
               <!-- left sidebar -->
               <!-- ============================================================== -->
               <?php include '../../../partials/slidebar.php'; ?>
               <!-- ============================================================== -->
               <!-- end left sidebar -->
               <!-- ============================================================== -->
               <!-- ============================================================== -->
               <!-- wrapper  -->
               <!-- ============================================================== -->
               <div class="dashboard-wrapper">
                  <div class="dashboard-ecommerce">
                     <div class="container-fluid dashboard-content ">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="page-header">
                                 <h2 class="pageheader-title"> My Biblotheque Dashboard  </h2>
                                 <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                       <ol class="breadcrumb">
                                          <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                          <li class="breadcrumb-item active" aria-current="page">Add Livre</li>
                                       </ol>
                                    </nav>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->
                        <fieldset>
                           <legend align="center">Add livre</legend>
                           <form method="POST" action="ajout.php">
                              <label for="nomf">Nom du livre:</label>
                              <input type="text" id="nomf" name="nomf"><br><br>
                              <label for="lname">Producteur:</label>
                              <input type="text" id="prod" name="prod"><br><br>
                              <label for="lname">Type:</label>
                              <input type="text" id="type" name="type"><br><br>
                              <label for="lname">img:</label>
                              <input type="text" id="img" name="img"><br><br>
                              <label for="lname">Prix:</label>
                              <input type="number" id="img" name="prix"><br><br>
                              <label for="lname">Nombre de Page:</label>
                              <input type="number" id="nb" name="nb"><br><br>                              
                              <label for="qte">Quantité:</label>
                              <input type="number" id="qte" name="qte"><br><br>
                              <textarea name="des" placeholder="Description:"></textarea>
                              <input type="reset" value="Effacer">
                              <input type="submit" value="Ajouter">
                           </form>
                        </fieldset>
                     </div>
                  </div>
                  <!-- ============================================================== -->
                  <!-- footer -->
                  <!-- ============================================================== -->
                  <div class="footer">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="text-md-right footer-links d-none d-sm-block">
                                 <a href="javascript: void(0);">About</a>
                                 <a href="javascript: void(0);">Support</a>
                                 <a href="javascript: void(0);">Contact Us</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ============================================================== -->
                  <!-- end footer -->
                  <!-- ============================================================== -->
               </div>
               <!-- ============================================================== -->
               <!-- end wrapper  -->
               <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end main wrapper  -->
            <!-- ============================================================== -->
            <!-- Optional JavaScript -->
            <?php include '../../../partials/scripte.php'; ?>

         </body>
      </html>