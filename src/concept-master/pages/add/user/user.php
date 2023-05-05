<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <body>
      <!doctype html>
      <html lang="en">
         <head>
            <?php include '../../../partials/head.php'; ?>
            <title>Add User</title>
            <style>
               /* Style pour fieldset et legend */
               fieldset {
               border: 2px solid #ccc;
               border-radius: 5px;
               padding: 10px;
               margin: 20px 0;
               }
               legend {
               font-weight: bold;
               font-size: 1.2em;
               text-align: center;
               }
               /* Style pour form */
               form {
               display: flex;
               flex-direction: column;
               align-items: center;
               }
               label {
               font-weight: bold;
               margin-bottom: 5px;
               }
               input[type="text"], input[type="password"], input[type="email"], select {
               padding: 10px;
               margin-bottom: 20px;
               border-radius: 5px;
               border: none;
               box-shadow: 0 0 5px rgba(0,0,0,0.3);
               width: 100%;
               max-width: 400px;
               }
               input[type="submit"], input[type="reset"] {
               background-color: #4CAF50;
               color: white;
               padding: 10px;
               border: none;
               border-radius: 5px;
               cursor: pointer;
               margin: 10px 0;
               }
               input[type="submit"]:hover, input[type="reset"]:hover {
               background-color: #3e8e41;
               }
               input[type="submit"]:active, input[type="reset"]:active {
               background-color: #3e8e41;
               box-shadow: 0 5px rgba(0,0,0,0.3);
               transform: translateY(4px);
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
                                          <li class="breadcrumb-item active" aria-current="page">Add user</li>
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
                           <legend align="center">Add user</legend>
                           <form method='POST' action="ajout.php">
                              <label for="nom">Nom du livre:</label>
                              <input type='text' id="nom" name='nom' >
                              <label for="email">Email:</label>
                              <input type='text' name='email' id="email">
                              <label for="tel">Telephone:</label>
                              <input type='text' name='tel' id="tel">
                              <label for="mdp">Mot De Pass:</label>
                              <input type='text' name='mdp' id="mdp">
                              <label for="type">Type Admin/user:</label>
                              <input type='text' name='type' id="type">
                              <label for="img">Image:</label>
                              <input type='text' name='img' id="img">
                              <input type='submit' value='submit'>
                              <input type='reset' value='Annuler'>
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