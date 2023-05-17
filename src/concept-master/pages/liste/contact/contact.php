
      <!doctype html>
      <html lang="en">
         <head>
         <meta charset="utf-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
         <meta name="description" content="" />
         <meta name="author" content="" />
            <?php include '../../../partials/head.php'; ?>
            <title>Liste Contact</title>
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
                     <h5 class="card-header">Liste de Contact</h5>
                     <div class="card-body p-0">
                        <div class="table-responsive">
                           <table class="table">
                              <thead class="bg-light">
                                 <tr class="border-0">
                                    <th class="border-0"></th>
                                    <th class="border-0">Id_Contact </th>
                                    <th class="border-0">Nom  </th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0">Telephone</th>
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
                                    <td><?php echo $i["name"]; ?>  </td>
                                    <td><?php echo $i["email"]; ?> </td>
                                    <td><?php echo $i["phone"]; ?> </td>
                                    <td><?php echo $i["message"]; ?> </td>
                                    <td>
                                       <?php
                                          echo "<button class='Supprimer'><a href='supp.php?id=".$i["id"]."'>Supprimer</a></button></td>";
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