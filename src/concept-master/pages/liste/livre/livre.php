     <!doctype html>
      <html lang="en">
         <head>
            <?php include '../../../partials/head.php'; ?>
            <title>Liste de Livre</title>
            <style>
               img{
               max-width: 253%;
               border-radius: 40px;
               padding: 0 2% 0 0;
               margin: -8px 0px 0px -10px;
               }
               .dashboard-wrapper{
               margin-top: 5%;
               }
               .Supprimer{
               display: inline-block;
               padding: 10px 20px;
               background-color: #e00b23;
               color: white;
               border: none;
               border-radius: 4px;
               text-decoration: none;
               font-size: 14px;
               cursor: pointer;
               }

               .modifier{
                  display: inline-block;
               padding: 10px 20px;
               background-color: #2ec551;
               color: white;
               border: none;
               border-radius: 4px;
               text-decoration: none;
               font-size: 14px;
               cursor: pointer;
               }


               button a {
               color:white;
               }
            </style>
         </head>
         <body>
            <?php
               include '../../../../connection/connection.php'; 
               
                  
                  
                  ?>
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
               <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                  <div class="card">
                     <h5 class="card-header">Liste de Livre</h5>
                     <div class="card-body p-0">
                        <div class="table-responsive">
                           <table class="table">
                              <thead class="bg-light">
                                 <tr class="border-0">
                                    <th class="border-0"></th>
                                    <th class="border-0">IdLivre </th>
                                    <th class="border-0">Nom Livre </th>
                                    <th class="border-0">Producteur</th>
                                    <th class="border-0">Type</th>
                                    <th class="border-0">Nombre_De_page</th>
                                    <th class="border-0">prix</th>
                                    <th class="border-0">Quantité</th>

                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    while ($i=mysqli_fetch_array($Livree))
                                    {
                                    ?>
                                 <tr>
                                    <td><span class="social-sales-icon-circle facebook-bgcolor mr-2"><img src="../../../../../assets/img/portfolio/<?php echo $i["img"]; ?>.jpg" alt=""></span></td>
                                    <td><span class="badge-dot badge-brand mr-1"></span><?php echo $i["idFilm"]; ?> </td>
                                    <td>i<?php echo $i["nomfilm"]; ?>  </td>
                                    <td><?php echo $i["producteur"]; ?> </td>
                                    <td><?php echo $i["type"]; ?> </td>
                                    <td><?php echo $i["nb"]; ?> </td>
                                    <td><?php echo $i["prix"]; ?> </td>
                                    <td><?php echo $i["qte"]; ?> </td>

                                    <td>
                                       <?php
                                          echo "<button class='modifier'><a href='update.php?idFilm=".$i["idFilm"]."'>Modifier</a></button> <br/><br/><button class='Supprimer'> <a href='supp.php?idFilm=".$i["idFilm"]."'>Supprimer</a></button></td>";
                                          ?>
                                    </td>
                                 </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- end main wrapper  -->
            <!-- ============================================================== -->
            <!-- Optional JavaScript -->
            <?php include '../../../partials/scripte.php'; ?>
         </body>
      </html>