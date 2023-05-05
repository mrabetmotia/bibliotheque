<?php session_start();
   ?>
<div class="dashboard-header">
   <nav class="navbar navbar-expand-lg bg-white fixed-top">
      <a class="navbar-brand" href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/src/concept-master/index.php"><?php echo ($_SESSION['Img']) ?>MY BIBLIOTHEQUE<?php echo($_SESSION['username']) ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto navbar-right-top">
            <li class="nav-item dropdown notification">
               <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
               <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                  <li>
                     <div class="notification-title"> Notification</div>
                     <div class="notification-list">
                        <div class="list-group">
                           <a href="#" class="list-group-item list-group-item-action active">
                              <div class="notification-info">
                                 <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                 <div class="notification-list-user-block">
                                    <span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                    <div class="notification-date">2 min ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item list-group-item-action">
                              <div class="notification-info">
                                 <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                 <div class="notification-list-user-block">
                                    <span class="notification-list-user-name">John Abraham </span>is now following you
                                    <div class="notification-date">2 days ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item list-group-item-action">
                              <div class="notification-info">
                                 <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                 <div class="notification-list-user-block">
                                    <span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                    <div class="notification-date">2 min ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item list-group-item-action">
                              <div class="notification-info">
                                 <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                 <div class="notification-list-user-block">
                                    <span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                    <div class="notification-date">2 min ago</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="list-footer"> <a href="#">View all notifications</a></div>
                  </li>
               </ul>
            </li>
            <li class="nav-item dropdown nav-user">
               <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/img/team/<?php echo ($_SESSION['Img']) ?>.jpg" alt="" class="user-avatar-md rounded-circle"></a>
               <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                  <div class="nav-user-info">
                     <h5 class="mb-0 text-white nav-user-name"><?php echo($_SESSION['username']) ?> </h5>
                     <span class="status"></span><span class="ml-2">Addmin</span>
                  </div>
                  <a class="dropdown-item" href="http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/login/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
               </div>
            </li>
         </ul>
      </div>
   </nav>
</div>