<?php
require_once "../../../entities/class_quizz.php";
require_once "../../../entities/class_concour.php";
require_once "../../../entities/class_client.php";
?>
<div class="kt-container">
    <!-- begin: Header Menu -->

    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn">

        <i class="la la-close">

        </i>

    </button>

    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">

        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">

            <ul class="kt-menu__nav ">

                <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here">
                    <?php
                    $lien = "";
                    $resultat = etudiant::retourne_valeur("id_client", $_SESSION["id"], "resultat");
                    if ($resultat == 1) {
                        $lien = "dashboard.php";
                    } else {
                        if ($resultat == -1) {
                            $lien = "echec";
                        } else {
                            $lien = "bienvenu.php";
                        }
                    }

                    if ($_SESSION["type"] == 1) {
                        $lien = "bienvenu_patient.php";
                    }
                    ?>
                    <a href="<?php echo $lien; ?>" target="frame1" class="kt-menu__link ">

                        <span class="kt-menu__link-text">

                            Dashboard</span>

                        <i class="kt-menu__hor-arrow la la-angle-down">

                        </i>

                        <i class="kt-menu__ver-arrow la la-angle-right">

                        </i>

                    </a>

                </li>



                <?php
                $resultat = etudiant::retourne_valeur("id_client", $_SESSION["id"], "resultat");
                if ($_SESSION["type"] == 0 && $resultat == 0) {
                    echo '                                            <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel">

                                                <a  href="liste_ecole.php" target="frame1" class="kt-menu__link ">

                                                    <span class="kt-menu__link-text">

                                                    Ecoles de formations</span>

                                                    <i class="kt-menu__hor-arrow la la-angle-down">

                                                    </i>

                                                    <i class="kt-menu__ver-arrow la la-angle-right">

                                                    </i>

                                                </a>

                                            </li>';
                }
                if ($_SESSION["type"] == 1) {

                    $resultat = patient::retourne_valeur("id_client", $_SESSION["id"], "resultat");
                    if ($resultat == -1 || $resultat == 0) {
                        if ($resultat == -1) {
                            echo '                                            <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel">

                                                

                                                    <span class="kt-menu__link-text btn btn-sm btn-info envoyer_demande" style="cursor:pointer;">

                                                    <i class="fas fa-arrow-right"></i> Envoyer une demade de services</span>

                                                

                                            </li>';
                        } else {
                            echo '                                            <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel">

                                                

                                                    <span class="kt-menu__link-text btn btn-sm btn-success">

                                                   <i class="fa fa-stop-circle" aria-hidden="true"></i> Demande envoyer </span>
                                                

                                            </li>';
                        }
                    }
                }
                ?>


                <?php
                if ($_SESSION["type"] == 1) {
                    $resultat = patient::retourne_valeur("id_client", $_SESSION["id"], "resultat");
                }
                if ($_SESSION["type"] == 0) {
                    $resultat = etudiant::retourne_valeur("id_client", $_SESSION["id"], "resultat");
                }
                if (intval($resultat) == 1) {
                    ?>
                    <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel">

                        <a href="detail.php" target="frame1" class="kt-menu__link ">

                            <span class="kt-menu__link-text">

                                Services</span>

                            <i class="kt-menu__hor-arrow la la-angle-down">

                            </i>

                            <i class="kt-menu__ver-arrow la la-angle-right">

                            </i>

                        </a>

                    </li>
                <?php
                }

                ?>
                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-text">
                            <i class="kt-menu__link-icon la la-comments-o" style="font-size:25px;">

                            </i>

                            Communication <span class="kt-menu__link-badge">

                                <span class="kt-badge kt-badge--brand iok">
                                    0</span>

                            </span></span>
                        <i class="kt-menu__hor-arrow la la-angle-down">
                        </i>
                        <i class="kt-menu__ver-arrow la la-angle-right">
                        </i>
                    </a>
                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                        <ul class="kt-menu__subnav">
                            <?php
                            if (intval($resultat) == 1) {
                                ?>
                                <li class="kt-menu__item im ink" aria-haspopup="true">
                                    <a href="message.php" class="kt-menu__link " target="frame1">
                                        <span class="kt-menu__link-text">
                                            Inbox message &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="kt-badge kt-badge--brand iok">
                                                0</span></span>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                            <li class="kt-menu__item im" aria-haspopup="true">
                                <a href="<?= '../../../views/Frontend/index.php' ?>" class="kt-menu__link " target="_blank">
                                    <span class="kt-menu__link-text">
                                        Revenir à l'acceuil </span>
                                    <i class="kt-menu__hor-arrow la la-angle-down">
                                    </i>
                                    <i class="kt-menu__ver-arrow la la-angle-right">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <?php

                if ($_SESSION["type"] == 0) {
                    $resultat = etudiant::retourne_valeur("id_client", $_SESSION["id"], "resultat");
                    if (intval($resultat) == 0) {
                        ?>
                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel">
                            <?php
                                    // $lien = "";
                                    // $temp = concours::concoursLePlusProche();
                                    // if (isset($_SESSION["id"]) && $temp > 0)
                                    //     $lien = intval(quizz::verifierPasserQuizz($_SESSION["id"], $temp)) ? "quizzDejaFait.php" : "quizz.php";
                                    // else
                                    //     $lien = "quizz.php";
                                    ?>
                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel">
                            <?php
                                    // $lien = "";
                                    // $temp = concours::concoursLePlusProche();
                                    // if (isset($_SESSION["id"]) && $temp > 0)
                                    //     $lien = intval(quizz::verifierPasserQuizz($_SESSION["id"], $temp)) ? "quizzDejaFait" : "quizz.php";
                                    // else
                                    //     $lien = "quizz.php";
                                    ?>
                            <a href="quizz.php" target="frame1" class="kt-menu__link " id="quizz">

                                <span class="kt-menu__link-text">

                                    Quizz</span>

                                <i class="kt-menu__hor-arrow la la-angle-down">

                                </i>

                                <i class="kt-menu__ver-arrow la la-angle-right">

                                </i>

                            </a>

                        </li>
                    <?php
                        }
                        ?>


                    </li>
                <?php
                }

                if (intval($resultat) == 1) {
                    ?>

                    <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel">

                        <a href="paiement.php" target="frame1" class="kt-menu__link ">

                            <span class="kt-menu__link-text">

                                Paiement</span>

                            <i class="kt-menu__hor-arrow la la-angle-down">

                            </i>

                            <i class="kt-menu__ver-arrow la la-angle-right">

                            </i>

                        </a>

                    </li>
                <?php
                }
                ?>
            </ul>

        </div>

    </div>

    <!-- end: Header Menu -->

</div>