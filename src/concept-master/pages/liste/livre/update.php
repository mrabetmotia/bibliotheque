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
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="../../../assets/vendor/bootstrap/css/bootstrap.min.css">
            <link href="../../../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
            <link rel="stylesheet" href="../../../assets/libs/css/style.css">
            <link rel="stylesheet" href="../../../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
            <link rel="stylesheet" href="../../../assets/vendor/charts/chartist-bundle/chartist.css">
            <link rel="stylesheet" href="../../../assets/vendor/charts/morris-bundle/morris.css">
            <link rel="stylesheet" href="../../../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
            <link rel="stylesheet" href="../../../assets/vendor/charts/c3charts/c3.css">
            <link rel="stylesheet" href="../../../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
            <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
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
                                          <li class="breadcrumb-item active" aria-current="page">Update Livre</li>
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
                           <legend align="center">Update livre</legend>
                           <?php
                              if (isset($_GET['idFilm'])) {
                                 $codef = $_GET['idFilm'];
                         
                                 $host = 'localhost';
                                 $user = 'root';
                                 $pass = '';
                                 $dbname = "gestion film";
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
                                     $des = $row['detail'];
                                     $nb = $row['nb'];
                                     $qte = $row['qte'];
                         
                                     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                         $nomf = $_POST['nomf'];
                                         $prod = $_POST['prod'];
                                         $type = $_POST['type'];
                                         $img = $_POST['img'];
                                         $prix = $_POST['prix'];
                                         $des = $_POST['des'];
                                         $nb = $_POST['nb'];
                                         $qte = $_POST['qte'];
                         
                                         $sql = "UPDATE film SET nomfilm=?, producteur=?, type=?, img=?, nb=?, prix=?, detail=?, qte=? WHERE idFilm=?";
                                         $stmt = $conn->prepare($sql);
                                         $stmt->bind_param("ssssssssi", $nomf, $prod, $type, $img, $nb, $prix, $des, $qte, $codef);
                         
                                         if ($stmt->execute()) {
                                             ?>
                                             <script>
                                                alert("Film <?php echo $nomf ?> a bien ete modifer");
                                             </script>
                                             <?php
                                         } else {
                                             echo "Erreur de modification de film : <br> " . $stmt->error;
                                         }
                         
                                         $stmt->close();
                                     }
                         
                                     echo "<form method='POST'>";
                                     echo "Code du livre : <input type='text' name='codef' value='$codef'><br><br>";
                                     echo "Nom du livre : <input type='text' name='nomf' value='$nomf'><br><br>";
                                     echo "Producteur : <input type='text' name='prod' value='$prod'><br><br>";
                                     echo "Type : <input type='text' name='type' value='$type'><br><br>";
                                     echo "img : <input type='text' name='img' value='$img'><br><br>";
                                     echo "prix : <input type='text' name='prix' value='$prix'><br><br>";
                                     echo "nb : <input type='text' name='nb' value='$nb'><br><br>";
                                     echo "qte : <input type='text' name='qte' value='$qte'><br><br>";
                                     echo "Description : <textarea name='des'>$des</textarea><br><br>";
                         
                                     echo "<input type='submit' value='Modifier'>";
                                     echo "<input type='reset' value='Annuler'><br><br>";
                         
                                     echo "</form>";
                         
                                     mysqli_close($conn);
                                 } else {
                                     echo "Erreur : Film non trouvé.";
                                     exit();
                                 }
                             } else {
                                 echo "Erreur : identifiant de film non renseigné.";
                             }
                              ?>
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