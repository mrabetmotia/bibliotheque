<!doctype html>
<html lang="en">
   <head>
      <?php include 'head.php'; ?>
      <link rel="icon" type="image/x-icon" href="assets/libs/css/icon.jpg">
      <title>Dashboard My bibliotheque</title>
      <style>
         img{
         max-width: 253%;
         border-radius: 40px;
         padding: 0 2% 0 0;
         margin: -8px 0px 0px -10px;
         }
      </style>
   </head>
   <body>

      <?php include '../connection/connection.php'; ?>
      <!-- ============================================================== -->
      <!-- main wrapper -->
      <!-- ============================================================== -->
      <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
         <!-- navbar -->
         <!-- ============================================================== -->
         <?php session_start();
         ?>
      <div class="dashboard-header">
         <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="http://127.0.0.1/projects/poject/src/concept-master/index.php">MY BIBLIOTHEQUE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto navbar-right-top">

                  <li class="nav-item dropdown nav-user">
                     <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/libs/css/<?php echo ($_SESSION['Img']) ?>.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                     <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                           <h5 class="mb-0 text-white nav-user-name"><?php echo($_SESSION['username']) ?> </h5>
                           <span class="status"></span><span class="ml-2">Addmin</span>
                        </div>
                        <a class="dropdown-item" href="http://127.0.0.1/projects/poject/login/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
         <!-- ============================================================== -->
         <!-- end navbar -->
         <!-- ============================================================== -->
         <!-- ============================================================== -->
         <!-- left sidebar -->
         <!-- ============================================================== -->
         <?php include 'partials/slidebar.php'; ?>
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
                                    <li class="breadcrumb-item active" aria-current="page"> My Biblotheque Dashboard</li>
                                 </ol>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ============================================================== -->
                  <!-- end pageheader  -->
                  <!-- ============================================================== -->
                  <div class="ecommerce-widget">
                     <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="card">
                              <div class="card-body">
                                 <h5 class="text-muted">Nombre de Livre</h5>
                                 <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?php
                                       echo ( mysqli_num_rows($resultat));
                                       ?></h1>
                                 </div>
                              </div>
                              <div id="sparkline-revenue"></div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="card">
                              <div class="card-body">
                                 <h5 class="text-muted">Nombre de commande</h5>
                                 <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?php
                                       echo ( mysqli_num_rows($Commande));
                                       ?></h1>
                                 </div>
                              </div>
                              <div id="sparkline-revenue2"></div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="card">
                              <div class="card-body">
                                 <h5 class="text-muted">Nombre De Message</h5>
                                 <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?php
                                       echo ( mysqli_num_rows($Contact));
                                       ?></h1>
                                 </div>
                              </div>
                              <div id="sparkline-revenue3"></div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                           <div class="card">
                              <div class="card-body">
                                 <h5 class="text-muted">Nombre user</h5>
                                 <div class="metric-value d-inline-block">
                                    <h1 class="mb-1"><?php
                                       echo ( mysqli_num_rows($User));
                                       ?></h1>
                                 </div>
                              </div>
                              <div id="sparkline-revenue4"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <!-- recent orders  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                           <div class="card">
                              <h5 class="card-header">Liste de Commande</h5>
                              <div class="card-body p-0">
                                 <div class="table-responsive">
                                    <table class="table">
                                       <thead class="bg-light">
                                          <tr class="border-0">
                                             <th class="border-0">Id Commande</th>
                                             <th class="border-0">Nom </th>
                                             <th class="border-0">Telephone</th>
                                             <th class="border-0">Email</th>
                                             <th class="border-0">Nom Livre</th>
                                             <th class="border-0">quantité</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php
                                             while ($i=mysqli_fetch_array($Commande))
                                             {
                                             ?>
                                          <tr>
                                             <td><span class="badge-dot badge-brand mr-1"></span><?php echo $i["id"]; ?> </td>
                                             <td>i<?php echo $i["nom"]; ?>  </td>
                                             <td><?php echo $i["tel"]; ?> </td>
                                             <td><?php echo $i["email"]; ?> </td>
                                             <td><?php echo $i["noml"]; ?> </td>
                                             <td><?php echo $i["qte"]; ?> </td>
                                          </tr>
                                          <?php } ?>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="card-footer text-center">
                                 <a href="http://127.0.0.1/projects/poject/src/concept-master/pages/liste/commande/commande.php" class="btn-primary-link">View Details</a>
                              </div>
                              </div>
                           </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end recent orders  -->
                     </div>
                     <div class="row">
                        <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                           <div class="card">
                              <h5 class="card-header">Liste de Contact</h5>
                              <div class="card-body p-0">
                                 <div class="table-responsive">
                                    <table class="table">
                                       <thead class="bg-light">
                                          <tr class="border-0">
                                             <th class="border-0">Id Message</th>
                                             <th class="border-0">Nom </th>
                                             <th class="border-0">Telephone</th>
                                             <th class="border-0">Email</th>
                                             <th class="border-0">Message</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php
                                             while ($i=mysqli_fetch_array($Contact))
                                             {
                                             ?>
                                          <tr>
                                             <td><span class="badge-dot badge-brand mr-1"></span><?php echo $i["id"]; ?> </td>
                                             <td>i<?php echo $i["name"]; ?>  </td>
                                             <td><?php echo $i["phone"]; ?> </td>
                                             <td><?php echo $i["email"]; ?> </td>
                                             <td><?php echo $i["message"]; ?> </td>
                                          </tr>
                                          <?php } ?>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="card-footer text-center">
                                 <a href="http://127.0.0.1/projects/poject/src/concept-master/pages/liste/contact/contact.php" class="btn-primary-link">View Details</a>
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                           <div class="card">
                              <h5 class="card-header">Liste de Livree</h5>
                              <div class="card-body p-0">
                                 <div class="table-responsive">
                                    <table class="table">
                                       <thead class="bg-light">
                                          <tr class="border-0">
                                             <th class="border-0">Id Film</th>
                                             <th class="border-0">Nom Film</th>
                                             <th class="border-0">Producteur</th>
                                             <th class="border-0">Type</th>
                                             <th class="border-0">Nb Page</th>
                                             <th class="border-0">Prix</th>
                                             <th class="border-0">Quantité</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php
                                             while ($i=mysqli_fetch_array($Livree))
                                             {
                                             ?>
                                          <tr>

                                             <td><span class="badge-dot badge-brand mr-1"></span><?php echo $i["idFilm"]; ?> </td>
                                             <td>i<?php echo $i["nomfilm"]; ?>  </td>
                                             <td><?php echo $i["producteur"]; ?> </td>
                                             <td><?php echo $i["type"]; ?> </td>
                                             <td><?php echo $i["nb"]; ?> </td>
                                             <td><?php echo $i["prix"]; ?> </td>
                                             <td><?php echo $i["qte"]; ?> </td>
                                          </tr>
                                          <?php } ?>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="card-footer text-center">
                                 <a href="http://127.0.0.1/projects/poject/src/concept-master/pages/liste/contact/contact.php" class="btn-primary-link">View Details</a>
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                           <!-- user  -->
                           <div class="card">
                              <h5 class="card-header"> Liste Pour Admin</h5>
                              <div class="card-body p-0">
                                 <?php
                                    while ($i=mysqli_fetch_array($admin))
                                    {
                                    ?>
                                 <ul class="social-sales list-group list-group-flush">
                                    <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><img src="../../assets/img/team/<?php echo $i["img"]; ?>.jpg" alt=""></span><span class="social-sales-name"><?php echo $i["nom"]; ?></span><span class="social-sales-count text-dark">Telephone : <?php echo $i["tel"]; ?></span>
                                    </li>
                                 </ul>
                                 <?php } ?>
                              </div>
                              <div class="card-footer text-center">
                                 <a href="http://127.0.0.1/projects/poject/src/concept-master/pages/liste/user/user.php" class="btn-primary-link">View Details</a>
                              </div>
                           </div>
                           <!-- user end  -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end sales traffice source  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- sales traffic country source  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- end sales traffice country source  -->
                        <!-- ============================================================== -->
                     </div>

                     <div class="row">
                        <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                           <!-- user  -->
                           <div class="card">
                              <h5 class="card-header"> Liste Pour User</h5>
                              <div class="card-body p-0">
                                 <?php
                                    while ($i=mysqli_fetch_array($User))
                                    {
                                    ?>
                                 <ul class="social-sales list-group list-group-flush">
                                    <li class="list-group-item social-sales-content"><span class="badge-dot badge-brand mr-1"></span>  <span class="social-sales-name"><?php echo $i["nom"]; ?></span><span class="social-sales-count text-dark">Telephone : <?php echo $i["tel"]; ?></span>
                                    </li>
                                 </ul>
                                 <?php } ?>
                              </div>
                              <div class="card-footer text-center">
                                 <a href="http://127.0.0.1/projects/poject/src/concept-master/pages/liste/user/user.php" class="btn-primary-link">View Details</a>
                              </div>
                           </div>
                           <!-- user end  -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end sales traffice source  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- sales traffic country source  -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- end sales traffice country source  -->
                        <!-- ============================================================== -->
                     </div>
                  </div>
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
      <?php include 'scripte.php'; ?>
   </body>
</html>