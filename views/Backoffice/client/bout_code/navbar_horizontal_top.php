     <div class="kt-header__top" style="background-color:#242939;">

         <div class="kt-container">
             <!-- begin:: Brand -->
             <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                 <div class="kt-header__brand-logo">
                     <a href="index.php">
                         <img alt="Logo" src="../../assets/Backoffice/media/logos/logo-4.png" class="kt-header__brand-logo-default" />
                         <img alt="Logo" src="../../assets/Backoffice/media/logos/logo-4-sticky.png" class="kt-header__brand-logo-sticky" />

                     </a>

                 </div>

                 <h1 class="kt-header__brand-title">
                     <?php
                        echo "Bonjour, " . client::retourne_valeur("id", $_SESSION["id"], "username");
                        ?>
                 </h1>
             </div>
             <!-- end:: Brand -->
             <!-- begin:: Topbar -->
             <div class="kt-header__topbar">
                 <!--begin: Notifications -->
                 <div class="kt-header__topbar-item dropdown">
                     <div class="kt-header__topbar-wrapper ss" data-toggle="dropdown" data-offset="10px,10px">
                         <span class="kt-header__topbar-icon">
                             <i class="la la-bell-o" style="font-size:25px;">
                             </i>
                         </span>
                         <div class="spinner-grow text-danger spinner-grow-sm signaler" role="status" style="position:absolute;<?php
                                                                                                                                echo (notification::nombre($_SESSION["id"]) != 0) ? "" : "display:none;"; ?>">
                             <span class="sr-only">Loading...</span>
                         </div>

                     </div>
                     <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                         <div class="kt-head kt-head--sm kt-head--skin-light">
                             <h3 class="kt-head__title">
                                 User Notifications</h3>
                         </div>
                         <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="270">
                             <div class="col-12 pl-5">
                                 <div class="btn btn-sm btn-primary text-center text-white ml-5 mb-4 del" style="cursor:pointer;">Tout marquer comme lu</div>
                             </div>
                             <div class="remplir" style="height: 80%;overflow-y:scroll;">
                                 <?php
                                    notification::afficher($_SESSION["id"]);
                                    ?>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--end: Notifications -->

                 <!--begin: Quick Panel Toggler -->
                 <a  href="notification.php" target="notification" class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Listes des notifications" data-placement="top">
                
                        <div class="kt-header__topbar-wrapper">
                         <span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
                             <i class="la la-windows" style="font-size:25px;">
                             </i>
                         </span>
                     </div>
                    
                 </a>
                 <div class="kt-header__topbar-item"  data-toggle="modal" data-target="#exampleModal">
                     <div class="kt-header__topbar-wrapper">
                         <span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
                             <i class="fa fa-question-circle" style="font-size:20px;">
                             </i>
                         </span>
                     </div>
                 </div>
                 <!--end: Quick Panel Toggler -->

                 <!--begin: Languages -->
                 <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                     <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
                         <span class="kt-header__topbar-icon">
                             <img class="" src="../../assets/Backoffice/media/flags/016-spain.svg" alt="" />
                         </span>

                     </div>
                     <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
                         <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                             <li class="kt-nav__item  kt-nav__item--active">
                                 <a href="#" class="kt-nav__link">
                                     <span class="kt-nav__link-icon">
                                         <img src="../../assets/Backoffice/media/flags/016-spain.svg" alt="" />
                                     </span>
                                     <span class="kt-nav__link-text">
                                         français</span>
                                 </a>
                             </li>
                             <li class="kt-nav__item">
                                 <a href="#" class="kt-nav__link">
                                     <span class="kt-nav__link-icon">
                                         <img src="../../assets/Backoffice/media/flags/020-flag.svg" alt="" />
                                     </span>
                                     <span class="kt-nav__link-text">
                                         English</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <!--end: Languages -->

                 <!--begin: User -->
                 <div class="kt-header__topbar-item kt-header__topbar-item--user">
                     <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
                         <img alt="Pic" src="../../assets/Backoffice/media/users/<?php echo $_SESSION["id"]; ?>.png?<?php echo time(); ?>" />
                     </div>
                     <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-md">
                         <div class="kt-user-card-v4 kt-user-card-v4--skin-light kt-notification-item-padding-x">
                             <div class="kt-user-card-v4__avatar">
                                 <img class="kt-hidden-" alt="Pic" src="../../assets/Backoffice/media/users/<?php echo $_SESSION["id"]; ?>.png?<?php echo time(); ?>" />
                                 <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                 <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">
                                     S</span>
                             </div>
                             <div class="kt-user-card-v4__name">
                                 <?php
                                    echo client::retourne_valeur("id", $_SESSION["id"], "username");
                                    ?>
                                 <small>
                                     <?php
                                        $v = client::retourne_valeur("id", $_SESSION["id"], "type");
                                        if (intval($v) == 1) {
                                            echo " statut : étudiant";
                                        } else {
                                            echo " statut : patient";
                                        }
                                        ?></small>
                             </div>
                             <div class="kt-user-card-v4__badge kt-hidden">
                                 <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">
                                     23 messages</span>
                             </div>
                         </div>
                         <ul class="kt-nav kt-margin-b-10">
                             <li class="kt-nav__item deslect">
                                 <a href="update_client.php" class="kt-nav__link" target="frame1">
                                     <span class="kt-nav__link-icon">
                                         <i class="la la-user" style="font-size:25px;">
                                         </i>
                                     </span>
                                     <span class="kt-nav__link-text">
                                         Mon profil</span>
                                 </a>
                             </li>
                             <?php 
if($_SESSION["type"]==1){
$resultat=patient::retourne_valeur("id_client",$_SESSION["id"],"resultat");
}
if($_SESSION["type"]==0){
$resultat=client::retourne_valeur("id_client",$_SESSION["id"],"resultat");
}
if(intval($resultat)==1){
                             ?>
                             <li class="kt-nav__item deslect">
                                 <a href="message.php" class="kt-nav__link" target="frame1">
                                     <span class="kt-nav__link-icon">
                                         <i class="la la-envelope">
                                         </i>
                                     </span>
                                     <span class="kt-nav__link-text">
                                         Messages</span>
                                 </a>
                             </li>
                             <li class="kt-nav__item deslect">
                                 <a href="upload.php" class="kt-nav__link" target="frame1">
                                     <span class="kt-nav__link-icon">
                                         <i class="la la-file-o">
                                         </i>
                                     </span>
                                     <span class="kt-nav__link-text">
                                         Mes fichiers</span>
                                 </a>
                             </li>

                             <?php 
}
                             ?>
                             <li class="kt-nav__item kt-nav__item--custom kt-margin-t-15">
                                 <a href="../../login/deconnexion.php" class="btn btn-label-brand btn-upper btn-sm btn-bold">
                                     Se deconnecter</a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <!--end: User -->


             </div>
             <!-- end:: Topbar -->
         </div>
     </div>