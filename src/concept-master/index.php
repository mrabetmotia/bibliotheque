<!doctype html>
<html lang="en">
   <head>
      <?php include 'head.php'; ?>

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
         <?php include 'partials/navbar.php'; ?>
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
                                    <li class="breadcrumb-item active" aria-current="page">My Biblotheque Dashboard</li>
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
                                          </tr>
                                          <?php } ?>
                                       </tbody>
                                    </table>
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
                                 <a href="#" class="btn-primary-link">View Details</a>
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
                              <h5 class="card-header"> Liste De Livre</h5>
                              <div class="card-body p-0">
                                 <?php
                                    while ($i=mysqli_fetch_array($Livree))
                                    {
                                    ?>
                                 <ul class="social-sales list-group list-group-flush">
                                    <li class="list-group-item social-sales-content">
                                       <span class="social-sales-icon-circle facebook-bgcolor mr-2">
                                       <img src="../../assets/img/portfolio/<?php echo $i["img"]; ?>.jpg" alt="">
                                       </span>
                                       <span class="social-sales-name"><?php echo $i["idFilm"]; ?>
                                       </span>
                                       <span class="social-sales-count text-dark">Nom : <?php echo $i["nomfilm"]; ?> ||     
                                       <span class="social-sales-count text-dark"> Producteur : <?php echo $i["producteur"]; ?>|| 
                                       <span class="social-sales-count text-dark">Type :  <?php echo $i["type"]; ?>|| 
                                       <span class="social-sales-count text-dark"><?php echo $i["nb"]; ?> Page|| 
                                       <span class="social-sales-count text-dark"><?php echo $i["prix"]; ?> TND|| 
                                       </span>
                                    </li>
                                 </ul>
                                 <?php } ?>
                              </div>
                              <div class="card-footer text-center">
                                 <a href="#" class="btn-primary-link">View Details</a>
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
                                    <li class="list-group-item social-sales-content"><span class="social-sales-icon-circle facebook-bgcolor mr-2"><img src="../../assets/img/team/<?php echo $i["img"]; ?>.jpg" alt=""></span><span class="social-sales-name"><?php echo $i["nom"]; ?></span><span class="social-sales-count text-dark">Telephone : <?php echo $i["tel"]; ?></span>
                                    </li>
                                 </ul>
                                 <?php } ?>
                              </div>
                              <div class="card-footer text-center">
                                 <a href="#" class="btn-primary-link">View Details</a>
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