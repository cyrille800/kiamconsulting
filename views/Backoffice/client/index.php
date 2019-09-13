<?php
session_start();
include "../../../entities/class_client.php";
include "../../../entities/class_patient.php";
include "../../../entities/class_notification.php";
if (isset($_SESSION["id"]) && isset($_SESSION["type"])) {
    $_SESSION["login"] = client::retourne_valeur("id", $_SESSION["id"], "username");
    if (client::verifiers("id", $_SESSION["id"]) == false) {
        $nom = "";
        $prenom = "";
        $sexe = "";
        $pays = "";
        $ville = "";
        if ($_SESSION["type"] == 0) {
            $resultat = etudiant::retourne_valeur("id_client", $_SESSION["id"], "resultat");
            $nom = etudiant::retourne_valeur("id_client", $_SESSION["id"], "nom");
            $prenom = etudiant::retourne_valeur("id_client", $_SESSION["id"], "prenom");
            $sexe = etudiant::retourne_valeur("id_client", $_SESSION["id"], "sexe");
            $pays = etudiant::retourne_valeur("id_client", $_SESSION["id"], "pays");
            $ville = etudiant::retourne_valeur("id_client", $_SESSION["id"], "ville");
        } else {
            $resultat = patient::retourne_valeur("id_client", $_SESSION["id"], "resultat");
            $nom = patient::retourne_valeur("id_client", $_SESSION["id"], "nom");
            $prenom = patient::retourne_valeur("id_client", $_SESSION["id"], "prenom");
            $sexe = patient::retourne_valeur("id_client", $_SESSION["id"], "sexe");
            $pays = patient::retourne_valeur("id_client", $_SESSION["id"], "pays");
            $ville = patient::retourne_valeur("id_client", $_SESSION["id"], "ville");
        }
        if (((trim($nom == "") || trim($prenom == "")) || (trim($sexe == "") || trim($pays == ""))) || trim($ville == "")) {
            header("location:info_perso.php?avr=oiu");
        }
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <!-- begin::Head -->

        <head>
            <meta charset="utf-8" />

            <title>
                Keen | Dashboard</title>
            <meta name="description" content="Latest updates and statistic charts">

            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
            <!--begin::Fonts -->
            <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js">
            </script>
            <script>
                WebFont.load({
                    google: {
                        "families": ["Poppins:300,400,500,600,700"]
                    },
                    active: function() {
                        sessionStorage.fonts = true;
                    }
                });
            </script>
            <!--end::Fonts -->
            <!--begin::Page Vendors Styles(used by this page) -->
            <link href="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
            <!--end::Page Vendors Styles -->


            <!--begin::Global Theme Styles(used by all pages) -->
            <link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
            <link href="../../assets/Backoffice/css/demo4/style.bundle.css" rel="stylesheet" type="text/css" />
            <!--end::Global Theme Styles -->
            <!--begin::Layout Skins(used by all pages) -->
            <!--end::Layout Skins -->
            <link rel="shortcut icon" href="../../assets/Backoffice/media/logos/favicon.ico" />
            <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script>
                $(function() {
                    var test = $("#foo").innerHeight();
                    $("body").css("height", "+=" + test)
                })
            </script>
        </head>
        <!-- end::Head -->
        <!-- begin::Body -->

        <body class="kt-page--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-subheader--enabled kt-subheader--transparent kt-page--loading" id="<?php echo $_SESSION["id"]; ?>" login="<?php echo $_SESSION["login"]; ?>" resultat="<?= $resultat ?>">
            <!-- begin:: Header Mobile -->
            <div id="kt_header_mobile" class="kt-header-mobile " style="padding:2px;background-color:#242939;">
                <div class="kt-header-mobile__logo">
                    <a href="/keen/preview/demo4/index.html">
                        <img alt="Logo" src="../../assets/Backoffice/media/logos/logo-5.png" />
                    </a>
                </div>
                <div class="kt-header-mobile__toolbar">

                    <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler">
                        <span style="color:white;">
                        </span>
                    </button>
                    <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler">
                        <i class="la la-ellipsis-v" style="color:white;">
                        </i>
                    </button>
                </div>
            </div>
            <!-- end:: Header Mobile -->
            <div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
                <center>
                    <div class="lds-ring">
                        <div>
                        </div>
                        <div>
                        </div>
                        <div>
                        </div>
                        <div>
                        </div>
                    </div>
                </center>
            </div>

            <div class="kt-grid kt-grid--hor kt-grid--root">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
                        <!-- begin:: Header -->
                        <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on" style="background-color:#242939;">
                            <?php
                                    include "bout_code/navbar_horizontal_top.php";
                                    ?>
                            <div class="kt-header__bottom">
                                <?php
                                        include "bout_code/navbar_horizontal.php";
                                        ?>
                            </div>


                            <!-- end:: Footer -->
                        </div>
                    </div>
                </div>

                <?php
                        include "bout_code/footer.php";
                        ?>
                <?php
                        $lien = "";
                        $resultat = etudiant::retourne_valeur("id_client", $_SESSION["id"], "resultat");
                        if ($resultat == 1) {
                            $lien = "dashboard.php";
                        } else {
                            if ($resultat == -1) {
                                $lien = "echec.php";
                            } else {
                                $lien = "bienvenu.php";
                            }
                        }

                        if ($_SESSION["type"] == 1) {
                            $lien = "bienvenu_patient.php";
                        }
                        ?>
                <iframe src="<?php echo $lien; ?>" style="height:100%;background-color: #f2f3fa;padding:0px;margin:0px;" class="col-md-12" name="frame1" frameborder="0" scrolling="no" id="foo">

                </iframe>

                <!-- end:: Page -->
                <!-- begin:: Topbar Offcanvas Panels -->


                <!-- end:: Topbar Offcanvas Panels -->
                <!-- begin:: Quick Panel -->
                <?php
                        include "bout_code/navbar_vertical_droit.php";
                        ?>
                <!-- end:: Quick Panel -->

                <!-- begin:: Scrolltop -->
                <div id="kt_scrolltop" class="kt-scrolltop">
                    <i class="la la-arrow-up">
                    </i>
                </div>
                <!-- end:: Scrolltop -->


                <button type="button" class="btn btn-primary mlk" style="display:none;" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="background-color:transparent;border:0px;">
                        <div class="modal-content" style="border-radius:3px;width:170%;margin-left:-80%;background-color:transparent;border:0px;">
                            <div class="modal-header" style="background-color:transparent;border:0px;">
                            </div>
                            <div class="modal-body" style="background-color:transparent;border:0px;">
                                <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <!--begin::Portlet-->
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body kt-portlet__body--fit-x" style="border-radius:1px;">
                                                    <ul class="kt-nav kt-nav--bold kt-nav--md-space kt-nav--lg-font kt-nav--v3">
                                                        <li class="kt-nav__item" data-toggle="dashboard">
                                                            <a href="#" class="kt-nav__link active doc">
                                                                <span class="kt-nav__link-text"><i class="fa fa-tachometer" aria-hidden="true"></i>
                                                                    &nbsp;&nbsp; Dashboard</span>
                                                            </a>
                                                        </li>

                                                        <?php
                                                                if ($resultat == 1) {
                                                                    if ($resultat == 1) {
                                                                        ?>
                                                                <li class="kt-nav__item doc" data-toggle="activiter">
                                                                    <a href="#" class="kt-nav__link ">
                                                                        <span class="kt-nav__link-text"><i class="fa fa-archive"></i>&nbsp;&nbsp; Services</span>
                                                                    </a>
                                                                </li>
                                                            <?php
                                                                        }
                                                                        ?>
                                                            <li class="kt-nav__item doc" data-toggle="paiement">
                                                                <a href="#" class="kt-nav__link ">
                                                                    <span class="kt-nav__link-text"><i class="fa fa-paypal" aria-hidden="true"></i>&nbsp;&nbsp;Paiement</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item doc" data-toggle="fichier">
                                                                <a href="#" class="kt-nav__link ">
                                                                    <span class="kt-nav__link-text"><i class="fa fa-file" aria-hidden="true"></i>&nbsp;&nbsp;Liste de fichiers</span>
                                                                </a>
                                                            </li>
                                                        <?php
                                                                }
                                                                if ($_SESSION["type"] == 0 && $resultat == 0) {
                                                                    ?>
                                                            <li class="kt-nav__item doc" data-toggle="ecole">
                                                                <a href="#" class="kt-nav__link ">
                                                                    <span class="kt-nav__link-text"><i class="fas fa-school"></i>&nbsp;&nbsp;Ecoles de formations</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item doc" data-toggle="quizz">
                                                                <a href="#" class="kt-nav__link ">
                                                                    <span class="kt-nav__link-text"><i class="fa fa-code-fork" style="font-size:20px;"></i>&nbsp;&nbsp;Quizz</span>
                                                                </a>
                                                            </li>
                                                        <?php
                                                                }
                                                                ?>
                                                        <li class="kt-nav__item doc" data-toggle="communication">
                                                            <a href="#" class="kt-nav__link ">
                                                                <span class="kt-nav__link-text"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Communication</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item doc" data-toggle="profil">
                                                            <a href="#" class="kt-nav__link ">
                                                                <span class="kt-nav__link-text"><i class="fas fa-user"></i>&nbsp;&nbsp; Mon profil</span>
                                                            </a>
                                                        </li>
                                                        <li class="kt-nav__item doc" data-toggle="notification">
                                                            <a href="#" class="kt-nav__link ">
                                                                <span class="kt-nav__link-text"><i class="fa fa-bell" aria-hidden="true"></i>&nbsp;&nbsp;Notifications</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--end::Portlet-->
                                        </div>
                                        <div class="col-xl-9">
                                            <!--begin::Portlet-->
                                            <div class="kt-portlet">
                                                <div class="kt-portlet__body">

                                                    <div class="kt-separator kt-separator--space-sm"></div>

                                                    <!--begin::Section-->
                                                    <center>
                                                        <button type="button" class="btn btn-danger btn-sm col-3 dont" style="display:none;">Ne plus afficher cette fenêtre</button>
                                                        <button type="button" class="btn btn-primary btn-sm col-3 dontpas" style="display:none;">Afficher cette page au demarage</button>
                                                        <button type="button" class="btn btn-secondary btn-sm col-3" data-dismiss="modal">Fermer</button>
                                                    </center>
                                                    <div class="kt-section" id="dashboard" style="display: none;">
                                                        <div class="kt-heading kt-heading--md kt-heading--medium">Le tableau de bord</div>
                                                        <center><img src="../../assets/backoffice/images/dashboard.jpg"   class="img-fluid"  alt="" width="25%"><br><br>
                                                            <div class="card-title">
                                                                kiamconsulting vous souhaite la bienvenue dans votre espace étudiant. Veuiller cliquer sur les différents liens à votre gauche pour avoir une meilleure appréhension du fonctionnement de l'application !
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <div class="kt-section" id="ecole" style="display: none;">
                                                        <div class="kt-heading kt-heading--md kt-heading--medium">Ecoles de formations</div>
                                                        <center><img src="../../assets/backoffice/images/university.jpg" alt="" width="50%"><br><br>
                                                            <div class="card-title">
                                                                Le site contient une multitude d'écoles avec une description toutes à votre portée!. Choisisser celui que vous souhaiter postuler
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <div class="kt-section" id="activiter" style="display: none;">
                                                        <div class="kt-heading kt-heading--md kt-heading--medium">Activiter</div>
                                                        <center><img src="../../assets/backoffice/images/services.jpg" alt="" width="38%"><br><br>
                                                            <div class="card-title">
                                                              Ici vous pouvez consulter tous les services disponibles à votre portée et suivre la progression!
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <div class="kt-section" id="quizz" style="display: none;">
                                                        <div class="kt-heading kt-heading--md kt-heading--medium">Quizz</div>
                                                        <center><img src="../../assets/backoffice/images/quizz2.jpg" alt="" width="40%"><br><br>
                                                            <div class="card-title">
                                                               L'école étant choisi, un quizz est nécessaire pour tester votre niveau intellectuel et juger si vous êtes digne de fréquenter dans cette école !
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <div class="kt-section" id="communication" style="display: none;">
                                                        <div class="kt-heading kt-heading--md kt-heading--medium">Communication</div>
                                                        <center><img src="../../assets/backoffice/images/communication.jpg" alt="" width="50%"><br><br>
                                                            <div class="card-title">
                                                                Pour nécessairement vous suivre dans votre processus, une communication entre vous et un employe de l'entreprise  est plus que primordial! Vous pouvez de même revenir sur la page d'acceuil de kiam consulting
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <div class="kt-section" id="paiement" style="display: none;">
                                                        <div class="kt-heading kt-heading--md kt-heading--medium">Paiement</div>
                                                        <center><img src="../../assets/backoffice/images/paiement.jpg" alt="" width="40%"><br><br>
                                                            <div class="card-title">
                                                                Kiam consulting vous donne la possiblité d'effectuer des transactions bancaires par le biais de l'api paypal!
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <div class="kt-section" id="profil" style="display: none;">
                                                        <div class="kt-heading kt-heading--md kt-heading--medium"> Mon profil</div>
                                                        <center><img src="../../assets/backoffice/images/profile.jpg" alt="" width="30%"><br><br>
                                                            <div class="card-title">
                                                                Dans votre profil vous pouvez voir toutes vos données personnelles et même les modifier!
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <div class="kt-section" id="fichier" style="display: none;">
                                                        <div class="kt-heading kt-heading--md kt-heading--medium">Listes des fichiers</div>
                                                        <center><img src="../../assets/backoffice/images/fichier.jpg" alt="" width="25%"><br><br>
                                                            <div class="card-title">
                                                                Dans vos différentes opérations sur le site, vous pouvez échanger des fichiers avec un administrateur!
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <div class="kt-section" id="notification" style="display: none;">
                                                        <div class="kt-heading kt-heading--md kt-heading--medium">Notifications</div>
                                                        <center><img src="../../assets/backoffice/images/notifications.jpg" alt="" width="35%"><br><br>
                                                            <div class="card-title">
                                                                Des notifications vous seront envoyées en cas de réussite à un concour ou dans l'acceptation de votre dossier!
                                                            </div>
                                                        </center>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                            </div>
                                            <!--end::Portlet-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
                <script>
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    var KTAppOptions = {
                        "colors": {
                            "state": {
                                "brand": "#385aeb",
                                "metal": "#c4c5d6",
                                "light": "#ffffff",
                                "accent": "#00c5dc",
                                "primary": "#5867dd",
                                "success": "#34bfa3",
                                "info": "#36a3f7",
                                "warning": "#ffb822",
                                "danger": "#fd3995",
                                "focus": "#9816f4"
                            },
                            "base": {
                                "label": [
                                    "#c5cbe3",
                                    "#a1a8c3",
                                    "#3d4465",
                                    "#3e4466"
                                ],
                                "shape": [
                                    "#f0f3ff",
                                    "#d9dffa",
                                    "#afb4d4",
                                    "#646c9a"
                                ]
                            }
                        }
                    };
                </script>
                <!-- end::Global Config -->
                <!--begin::Global Theme Bundle(used by all pages) -->
                <script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
                </script>
                <script src="../../assets/Backoffice/js/demo4/scripts.bundle.js" type="text/javascript">
                </script>

                <!--end::Global Theme Bundle -->

                <!--begin::Page Vendors(used by this page) -->
                <script src="../../assets/Backoffice/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript">
                </script>
                <!--end::Page Vendors -->


                <!--begin::Page Scripts(used by this page) -->
                <script src="../../assets/Backoffice/js/demo4/pages/dashboard.js" type="text/javascript">
                </script>

                <!--end::Page Scripts -->
                <script src="http://localhost:1337/socket.io/socket.io.js" type="text/javascript"></script>

                <script>
                    $(window).on("load", function() {
                        $(".preload").fadeOut("slow");
                        setTimeout(function() {
                            var nom = "afficher" + $("body").attr("id") + $("body").attr("resultat");
                            if (Cookies.get(nom) == undefined || Cookies.get(nom) == 0) {
                                $(".mlk").trigger("click")
                            }
                        }, 500)
                    })
                    $(function() {
                        var ideo = $("body").attr("id");
                        var socket = io.connect("http://localhost:1337");

                        $(".envoyer_demande").click(function() {
                            var el = $(this);
                            $.post("../../../entities/demande.php", {
                                operation: "demande",
                                id: $("body").attr("id")
                            }, function(data) {
                                if (data == "ok") {
                                    socket.emit("envoyer_notification", {
                                        type: "info",
                                        message: "vous avez recu une demande de service"
                                    })
                                    el.removeClass("btn-info");
                                    el.addClass("btn-success");
                                    el.html('<i class="fa fa-stop-circle" aria-hidden="true"></i> Demande envoyer </span>');
                                    $("[name='frame1']").attr("src", "bienvenu_patient.php");
                                }
                            })
                        })

                        $(".page-item").click(function() {
                            $(".page-item").removeClass("active");
                            $(this).addClass("active")
                        })
                        $('[target="notification"]').click(function() {
                            var chaine = $("iframe[name='notification']").attr("src");
                            if (chaine.indexOf("notification.php") == -1) {
                                $("iframe[name='notification']").attr("src", "notification.php?nombre=1");
                            }
                        })
                        var nom = "afficher" + $("body").attr("id") + $("body").attr("resultat");
                        if (Cookies.get(nom) == undefined || Cookies.get(nom) == 0) {
                            $(".dont").show();
                        }
                        if (Cookies.get(nom) == 1) {
                            $(".dontpas").show();
                        }
                        $(".dont").click(function() {
                            var nom = "afficher" + $("body").attr("id") + $("body").attr("resultat");
                            Cookies.set(nom, 1, {
                                expires: 360,
                                path: ''
                            });
                            $(this).hide();
                            $(".dontpas").show();
                        })
                        $(".dontpas").click(function() {
                            var nom = "afficher" + $("body").attr("id") + $("body").attr("resultat");
                            Cookies.set(nom, 0, {
                                expires: 360,
                                path: ''
                            });
                            $(this).hide();
                            $(".dont").show();
                        })
                        $(".kt-section:eq(0)").show();
                        $(".kt-nav__item").click(function() {
                            $(".kt-nav__item a").removeClass("active");
                            $(this).find("a").addClass("active")
                            $(".kt-section").hide();
                            $(".kt-section#" + $(this).attr("data-toggle")).fadeIn("fast")
                        })
                        $("#quizz").click(function(e) {
                            if ($(this).attr("href") == "quizzDejaFait") {
                                e.preventDefault();
                                toastr.info("vous avez déjà passé le quizz");
                            }


                        });
                        socket.on("notification_message", function(message) {
                            if (message.id_client == ideo) {
                                toastr.info("nouveau message : " + message.message);
                                $(".iok").text(parseInt($(".iok").text()) + 1);
                            }
                        })




                        <?php
                                $o = config::$bdd->query("select count(*) from activiter_client where etat=1 && id_client=" . $_SESSION["id"]);
                                $y = $o->fetch();
                                if ($y[0] == 0) {
                                    echo "                                    Cookies.remove('id_activiter'+ideo,{ path: '' });
                            Cookies.remove('pourcentage'+ideo,{ path: '' });
                            Cookies.remove('active'+ideo,{ path: '' });
                            Cookies.remove('nbr_actif'+ideo,{ path: '' });";
                                }
                                ?>
                        $(".del").click(function() {
                            $(".remplir").fadeOut("fast").queue(function() {
                                $(".hy").remove();
                                $(this).dequeue();
                            })
                            $.post("../../../entities/notification.php", {
                                operation: "lues",
                                id_client: $("body").attr("id")
                            }, function(data) {})
                            $(".signaler").hide();
                        })

                        $(".ss").click(function() {
                            var i = 0;
                            $(".remplir").children().each(function() {
                                i++;
                            })
                            if (i == 0) {
                                $("#kt_quick_panel").addClass(" kt-offcanvas-panel--on");
                                $("#kt_quick_panel").css("opacity", "1");
                                $("#kt_quick_panel").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
                                $(".bv").click(function() {
                                    $("#kt_quick_panel").removeClass("kt-offcanvas-panel--on");
                                    $("#kt_quick_panel").css("opacity", "0");
                                    $(this).remove();
                                })
                                setTimeout(function() {
                                    $(".dropdown-menu.dropdown-menu-fit.dropdown-menu-right.dropdown-menu-anim.dropdown-menu-xl").removeClass("show")
                                }, 60)

                            } else {

                            }
                        })

                        $(".hy").click(function() {
                            gty = "";
                            $(".page-link:eq(0)").trigger("click");
                            $("#kt_quick_panel").addClass(" kt-offcanvas-panel--on");
                            $("#kt_quick_panel").css("opacity", "1");
                            $("#kt_quick_panel").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
                            $(".bv").click(function() {
                                $("#kt_quick_panel").removeClass("kt-offcanvas-panel--on");
                                $("#kt_quick_panel").css("opacity", "0");
                                $(this).remove();
                            })

                            $.post("../../../entities/notification.php", {
                                operation: "lue",
                                id_client: $("body").attr("id"),
                                id_notif: $(this).attr("id")
                            }, function(data) {})
                            $(this).remove()
                            var i = 0;
                            $(".remplir").children().each(function() {
                                i++;
                            })

                            if (i == 0) {
                                $(".signaler").hide();
                            }
                        })


                        $.get("../../../entities/message.php", {
                            operation: "tout_afficher_moi",
                            id: $("body").attr("id")
                        }, function(data) {
                            if (data != 0) {
                                if (parseInt($(".iok").text()) != data) {
                                    $(".iok").text(data);
                                }
                            } else {
                                $(".iok").text("0");
                            }
                        })

                        var gty = "";
                        var numero = "";
                        $(".dropdown-item").click(function() {
                            gty = $(this).text();
                            setTimeout(function() {
                                $("[name='notification']").attr("src", "notification.php?type=" + gty + "&&nombre=" + numero)
                            }, 300)
                        })
                        $(".page-link").click(function() {
                            var f = $(this)
                            setTimeout(function() {
                                $("[name='notification']").attr("src", "notification.php?type=" + gty + "&&nombre=" + parseInt(f.text()))
                            }, 300)
                            numero = $(this).text();
                        })
                        socket.on("recevoir_notification", function(data) {

                            if (parseInt(data.id_client) == parseInt($("body").attr("id"))) {
                                var id = parseInt($(".kt-timeline").attr("id"));
                                $.post("../../../entities/notification.php", {
                                    operation: "nombre_total",
                                    id_client: $("body").attr("id")
                                }, function(data) {
                                    if (parseInt(data) > id) {
                                        $(".kt-timeline").attr("id", data)
                                        toastr.info("vous avez une nouvelle notification")
                                        $(".signaler").show()
                                        $.post("../../../entities/notification.php", {
                                            operation: "dernier_time",
                                            id_client: $("body").attr("id")
                                        }, function(datase) {
                                            $(".kt-timeline").prepend(datase);
                                        })
                                        $.post("../../../entities/notification.php", {
                                            operation: "dernier",
                                            id_client: $("body").attr("id")
                                        }, function(datas) {
                                            $(".remplir").show();
                                            $(".remplir").prepend(datas);
                                            $(".hy").click(function() {
                                                gty = "";
                                                $(".page-link:eq(0)").trigger("click");
                                                $("#kt_quick_panel").addClass(" kt-offcanvas-panel--on");
                                                $("#kt_quick_panel").css("opacity", "1");
                                                $("#kt_quick_panel").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
                                                $(".bv").click(function() {
                                                    $("#kt_quick_panel").removeClass("kt-offcanvas-panel--on");
                                                    $("#kt_quick_panel").css("opacity", "0");
                                                    $(this).remove();
                                                })

                                                $.post("../../../entities/notification.php", {
                                                    operation: "lue",
                                                    id_client: $("body").attr("id"),
                                                    id_notif: $(this).attr("id")
                                                }, function(data) {})
                                                $(this).remove()
                                                var i = 0;
                                                $(".remplir").children().each(function() {
                                                    i++;
                                                })

                                                if (i == 0) {
                                                    $(".signaler").hide();
                                                }
                                            })
                                        })
                                    }
                                })
                            }
                        })


                        socket.on("evolution_etape", function(data) {
                            if (parseInt(data.id_client) == parseInt($("body").attr("id"))) {
                                var id = parseInt($(".kt-timeline").attr("id"));
                                $.post("../../../entities/notification.php", {
                                    operation: "nombre_total",
                                    id_client: $("body").attr("id")
                                }, function(data) {
                                    if (parseInt(data) > id) {

                                        $(".kt-timeline").attr("id", data)
                                        toastr.info("vous avez une nouvelle notification")
                                        $(".signaler").show()
                                        $.post("../../../entities/notification.php", {
                                            operation: "dernier_time",
                                            id_client: $("body").attr("id")
                                        }, function(datase) {
                                            $(".kt-timeline").prepend(datase);
                                        })
                                        $.post("../../../entities/notification.php", {
                                            operation: "dernier",
                                            id_client: $("body").attr("id")
                                        }, function(datas) {
                                            $(".remplir").show();
                                            $(".remplir").prepend(datas);
                                            $(".hy").click(function() {
                                                gty = "";
                                                $(".page-link:eq(0)").trigger("click");
                                                $("#kt_quick_panel").addClass(" kt-offcanvas-panel--on");
                                                $("#kt_quick_panel").css("opacity", "1");
                                                $("#kt_quick_panel").after('<div class="kt-offcanvas-panel-overlay bv"></div>')
                                                $(".bv").click(function() {
                                                    $("#kt_quick_panel").removeClass("kt-offcanvas-panel--on");
                                                    $("#kt_quick_panel").css("opacity", "0");
                                                    $(this).remove();
                                                })

                                                $.post("../../../entities/notification.php", {
                                                    operation: "lue",
                                                    id_client: $("body").attr("id"),
                                                    id_notif: $(this).attr("id")
                                                }, function(data) {})
                                                $(this).remove()
                                                var i = 0;
                                                $(".remplir").children().each(function() {
                                                    i++;
                                                })

                                                if (i == 0) {
                                                    $(".signaler").hide();
                                                }
                                            })
                                        })
                                    }
                                })
                            }
                        })


                        $(".kt-menu__item a").not(".kt-menu__item[data-ktmenu-submenu-toggle] a").click(function() {
                            var d = $(this)
                            setTimeout(function() {
                                $(".kt-menu__item").attr("class", "kt-menu__item kt-menu__item--submenu kt-menu__item--rel")
                                d.parent().attr("class", "kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here");
                            }, 100)
                        })

                        $(".kt-menu__item.im a").click(function() {
                            $(".kt-menu__item").attr("class", "kt-menu__item kt-menu__item--submenu kt-menu__item--rel")
                            $(this).parent().parent().parent().parent().attr("class", "kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here");
                            $(this).parent("").addClass("kt-menu__item--active")
                        })
                        $(".deslect").click(function() {
                            $(".kt-menu__item").attr("class", "kt-menu__item kt-menu__item--submenu kt-menu__item--rel")
                        })

                        $(".ink").click(function() {
                            $(".iok").text("0")
                        })

                    })
                </script>
                }
        </body>
        <!-- end::Body -->

        </html>

<?php
    } else {
        header("location:../../pages_error/404.html");
    }
} else {
    header("location:../../pages_error/404.html");
}
?>