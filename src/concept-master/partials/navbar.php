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
               <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../../assets/libs/css/<?php echo ($_SESSION['Img']) ?>.jpg" alt="" class="user-avatar-md rounded-circle"></a>
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