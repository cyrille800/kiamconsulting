                        <div class="kt-header__top"  style="background-color:#242939;">
                            
                            <div class="kt-container">
                                <!-- begin:: Brand -->
                                <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                                    <div class="kt-header__brand-logo">
                                        <a href="/keen/preview/demo4/index.html">
                                            <img alt="Logo" src="../../assets/Backoffice/media/logos/logo-4.png" class="kt-header__brand-logo-default"/>
                                            <img alt="Logo" src="../../assets/Backoffice/media/logos/logo-4-sticky.png" class="kt-header__brand-logo-sticky"/>
                                            
                                        </a>
                                        
                                    </div>
                                    
                                    <h1 class="kt-header__brand-title">
                                    <?php 
                                    echo "Bonjour, ".client::retourne_valeur("id",$_SESSION["id"],"email");
                                    ?>
                                    </h1>
                                </div>
                                <!-- end:: Brand -->
                                <!-- begin:: Topbar -->
                                <div class="kt-header__topbar">
                                    <!--begin: Notifications -->
                                    <div class="kt-header__topbar-item dropdown">
                                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
                                            <span class="kt-header__topbar-icon">
                                                <i class="la la-bell-o" style="font-size:25px;">
                                                </i>
                                            </span>
                                            <span class="kt-badge kt-badge--danger">
                                            </span>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                            <div class="kt-head kt-head--sm kt-head--skin-light">
                                                <h3 class="kt-head__title">
                                                User Notifications</h3>
                                            </div>
                                            <div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="270">
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-time-2">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New order has been received
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            2 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-upload-1">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New customer is registered
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            3 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-interface-8">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            Application has been approved
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            3 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-file">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New file has been uploaded
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            5 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-user">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New user feedback received
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            8 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-cogwheel">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            System reboot has been successfully completed
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            12 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-light">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New order has been placed
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            15 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item kt-notification__item--read">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-interface-2">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            Company meeting canceled
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            19 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-diagram">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New report has been received
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            23 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-pie-chart">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            Finance report has been generated
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            25 hrs ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-speech-bubble-1">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New customer comment recieved
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            2 days ago
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="kt-notification__item">
                                                    <div class="kt-notification__item-icon">
                                                        <i class="flaticon-exclamation-2">
                                                        </i>
                                                    </div>
                                                    <div class="kt-notification__item-details">
                                                        <div class="kt-notification__item-title">
                                                            New customer is registered
                                                        </div>
                                                        <div class="kt-notification__item-time">
                                                            3 days ago
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Notifications -->

                                    <!--begin: Quick Panel Toggler -->
                                    <div class="kt-header__topbar-item" data-toggle="kt-tooltip" title="Quick panel" data-placement="top">
                                        <div class="kt-header__topbar-wrapper">
                                            <span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
                                                <i class="la la-windows" style="font-size:25px;">
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
                                                </li>                                          </ul>
                                        </div>
                                    </div>
                                    <!--end: Languages -->
                                    
                                    <!--begin: User -->
                                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
                                            <img alt="Pic" src="../../assets/Backoffice/media/users/300_21.jpg"/>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-md">
                                            <div class="kt-user-card-v4 kt-user-card-v4--skin-light kt-notification-item-padding-x">
                                                <div class="kt-user-card-v4__avatar">
                                                    <img class="kt-hidden-" alt="Pic" src="../../assets/Backoffice/media/users/300_25.jpg" />
                                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">
                                                    S</span>
                                                </div>
                                                <div class="kt-user-card-v4__name">
                                    <?php 
                                    echo client::retourne_valeur("id",$_SESSION["id"],"username");
                                    ?>
                                                    <small>
                                                                                        <?php 
                                    $v=client::retourne_valeur("id",$_SESSION["id"],"type");
                                    if(intval($v)==1){
                                        echo " statut : étudiant";
                                    }else{
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
                                                <li class="kt-nav__item">
                                                    <a href="/keen/preview/demo4/custom/user/profile-v1.html" class="kt-nav__link">
                                                        <span class="kt-nav__link-icon">
                                                            <i class="la la-user" style="font-size:25px;">
                                                            </i>
                                                        </span>
                                                        <span class="kt-nav__link-text">
                                                        Mon profil</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="/keen/preview/demo4/custom/user/profile-v1.html" class="kt-nav__link">
                                                        <span class="kt-nav__link-icon">
                                                            <i class="la la-envelope">
                                                            </i>
                                                        </span>
                                                        <span class="kt-nav__link-text">
                                                        Messages</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="/keen/preview/demo4/custom/user/profile-v1.html" class="kt-nav__link">
                                                        <span class="kt-nav__link-icon">
                                                            <i class="la la-eyedropper">
                                                            </i>
                                                        </span>
                                                        <span class="kt-nav__link-text">
                                                        Configuration</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item kt-nav__item--custom kt-margin-t-15">
                                                    <a href="/keen/preview/demo4/custom/user/login-v1.html" target="_blank" class="btn btn-label-brand btn-upper btn-sm btn-bold">
                                                    Sign Out</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end: User -->
                                    
                                    
                                </div>
                                <!-- end:: Topbar -->
                            </div>
                        </div>