<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../addmin/sidebar.css">
    <link rel="stylesheet" href="../addmin/style.css">
    <link rel="icon" type="image/x-icon" href="../../assets/img/biblioth-que-du-film-26.jpg" />

    <title>Liste of Users</title>
    <style>
            body{
                padding-top: 4.5rem;
                padding-bottom: 20rem;
                text-align: center;
                color: #000000;
                background-image: url(../../assets/img/biblioth-que-du-film-26.jpg) ;

            }
            .titre{
                padding: 5% 0;
            }
            table{
            margin-left: 31%;
            background: #ffffff6b;
            }
            .w{
            padding-right: 10%;
            }
            .aa{
            color: white;
            font-size: 1.5rem;
            padding:2%;
            }
            .a{
                color: white;
                font-size: 3rem;
                padding:2%;
            }
        </style>
</head>
<body > 
<?php
$serveur="localhost";
$utilisateur="root";
$mot_passe="";
$base_donnee="gestion film";

$c=mysqli_connect($serveur,$utilisateur,$mot_passe) or die ("erreur de connexion au serveur");
mysqli_select_db($c, $base_donnee) or die(mysqli_error($c));
$requete="select * from user;" ;    

$resultat=mysqli_query($c,$requete);

?>
<header class="titre">
<a href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/addmin/addmin.php" class="a"><i class="fa fa-book"></i>My dashbord bibliotheque</a><br>
    <a href="" class="aa"><?php
    echo ("nombre of user = ". mysqli_num_rows($resultat));
    ?></a>
</header>
<center>



<div class="body">
    <div class="sidebar">
        <ul >
        <li><a href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/film/listefilm.php"><i class="fa fa-"></i>Liste Of Film</a></li>
            <li ><a href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/Ajout/ajout.html" ><i class="fa fa-"></i>Add livre</a></li>
            <li><a href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/supp/supp.html"><i class="fa fa-"></i>delate livre</a></li>
            <li><a href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/update/update.html"><i class="fa fa-"></i>Update livre</a></li>
            <li><a href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/user/user.php"><i class="fa fa-"></i>Liste Of User</a></li>
            <li><a href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/"><i class="fa fa-"></i>Logout</a></li>
        </ul>
    </div>
        <table border=1>
            <tr>    
                <td class="w"><strong> IdUser </strong></td>
                <td><strong> Nom </strong></td>
                <td><strong> Gmail </strong></td>
                <td><strong> Mot de Passe </strong></td>
                <td><strong> Téléphone </strong></td>
                <td><strong> Type </strong></td>
                <td><strong> Modifier/Supprimer </strong></td>

                <?php
                while ($i=mysqli_fetch_array($resultat))
                {
                ?>
                <tr>
                <td> <?php echo $i["iduser"]; ?> </td>
                <td> <?php echo $i["nom"]; ?> </td>
                <td> <?php echo $i["email"]; ?> </td>
                <td> <?php echo $i["mdp"]; ?> </td>
                <td> <?php echo $i["tel"]; ?> </td>
                <td> <?php echo $i["type"]; ?> </td>
                <td>
                    <?php
                    echo "<a href='update.php?iduser=".$i["iduser"]."'>Modifier</a> | <a href='supp.php?iduser=".$i["iduser"]."'>Supprimer</a></td>";
                    ?>
                </td>
                <?php } ?>
            </tr>
        </table>
        
</div>

</body>
</html>