<?php session_start();

?>
        <style>
            
            .proffil{
            background-color: #ffc800;
            }
        </style>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">My bibliotheque</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <?php 
                                if (!isset($_SESSION['username'])){
                                ?>
                                <li class="nav-item"><a class="nav-link" href="src/login/login.html">Login</a></li>
                                <?php
                                } ?>
                            
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link fa fa-user" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        </a>
                        <ul class="dropdown-menu  proffil" aria-labelledby="navbarDropdown">
                        <?php 
                                if (!isset($_SESSION['username'])){
                                ?>
                                <li class="nav-item"><a class="nav-link" href="src/login/login.html">Login</a></li>
                                <?php
                                } else {
                                ?>
                                <li class="nav-item"><a class="nav-link " href="src/login/login.html"><?php echo($_SESSION['username']) ?></a></li>
                                <li class="nav-item"><a class="nav-link" href="src/login/logout.php">Logout</a></li>
                                <?php
                                }
                            ?>
                        </ul>
                        </li>
                           
                    </ul>
                </div>
            </div>
        </nav>

