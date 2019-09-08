<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx">

<head>
    <!-- TITLE OF SITE -->
    <title>Curricular | Login & Registration </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="description" content="app landing page template" />
    <meta name="keywords" content="app, landing page, bootstrap" />
    <meta name="developer" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAV AND ICONS   -->
    <!-- <link rel="icon" href="../Frontend/assets/images/favicon.png" sizes="32x32" /> -->
    <!-- <link rel="icon" href="../Frontend/assets/images/apple-icon-192.png" sizes="192x192" /> -->
    <!-- <link rel="apple-touch-icon-precomposed" href="../Frontend/assets/images/apple-icon-180.png" /> -->

    <!-- GOOGLE FONTS -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,700%7cVarela+Round" rel="stylesheet">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="../Frontend/assets/icons/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Custom Icon Font -->
    <link rel="stylesheet" href="../Frontend/assets/font/flaticon.css">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../Frontend/assets/plugins/css/bootstrap.min.css"> -->

    <!-- Animation -->
    <link rel="stylesheet" href="../Frontend/assets/plugins/css/animate.css">
    <!-- owl -->
    <link rel="stylesheet" href="../Frontend/assets/plugins/css/owl.css">
    <!-- selectize -->
    <link rel="stylesheet" href="../Frontend/assets/plugins/css/selectize.css">
    <!-- Fancybox-->
    <link rel="stylesheet" href="../Frontend/assets/plugins/css/jquery.fancybox.min.css">
    <!--dropdown -->
    <!-- mobile nav-->
    <link rel="stylesheet" href="../Frontend/assets/plugins/css/meanmenu.css">

    <!-- COUSTOM CSS link  -->
    <link rel="stylesheet" href="../Frontend/assets/less/style.css">
    <link rel="stylesheet" href="../Frontend/assets/less/responsive.css">
    <link rel="shortcut icon" href="../assets/Backoffice/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <style>
        .lien {
            color: #2D89AB;
        }
    </style>

    <!--[if lt IE 9]>
            <script src="js/plagin-js/html5shiv.js"></script>
            <script src="js/plagin-js/respond.min.js"></script>
        <![endif]-->

</head>

<body class="login-reg-page">
    <div class="uv-login-reg-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 uv-login-reg-from-inner">
                    <div class="login-logo ">
                        <center>
                            <a href="../index.php">
                                <img src="../Frontend/assets/images/logo3.png" alt="" class="img-responsive " style="transform:scale(0.7,0.7)">
                            </a>
                        </center>
                    </div>
                    <div class="uv-login-reg shadow-1">
                        <!-- Nav tabs -->
                        <div class="login-reg-nav">
                            <ul class="nav nav-tabs" role="tablist" id="myTabs">
                                <li role="presentation"><a href="#home" aria-controls="home" role="tab"   data-toggle="tab">Se connecter</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">S'enregistrer</a></li>
                            </ul>
                            <hr>
                        </div>
                        <div>

                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <form id="login-form" class="uv-login-form">
                                    <div class="form-group">
                                        <input type="hidden" name="operation" class="form-control" value="connexion">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="login-password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="erreur" style="background-color:rgba(255,0,0,0.1);color:red;padding:2%;width:100%;border-radius:7px;display:none;">
                                        message
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember-me" id="remember">
                                        <label for="remember"> Se souvenir de moi</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="form-control btn btn-fill">Connexion</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="forget.php" tabindex="5" class="forgot-password">mot de passe oublié?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <form id="register-form" class="uv-reg-form">
                                    <div class="form-group ">
                                        <div class="custom-control custom-radio custom-control-inline pull-left mb-2">
                                            <input type="radio" id="customRadioInline1" name="type" class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="customRadioInline1">Etudiant</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline pull right">
                                            <input type="radio" id="customRadioInline2" name="type" class="custom-control-input" value="Patient">
                                            <label class="custom-control-label" for="customRadioInline2">Patient</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="regusername" id="regusername" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="regpassword" id="regpassword" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirmPassword" id="confirmPassword" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phoneNumber" id="phoneNumber" tabindex="2" class="form-control" placeholder="Entrer votre tel">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" class="form-control btn btn-fill ">Créer un compte</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--
        |========================
        |      Script
        |========================
        -->
    <!-- jquery -->
    <script src="../Frontend/assets/plugins/js/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap -->
    <script src="../Frontend/assets/plugins/js/bootstrap.min.js"></script>
    <!-- mean menu nav-->
    <script src="../Frontend/assets/plugins/js/meanmenu.js"></script>
    <!-- ajaxchimp -->
    <script src="../Frontend/assets/plugins/js/jquery.ajaxchimp.min.js"></script>
    <!-- wow -->
    <script src="../Frontend/assets/plugins/js/wow.min.js"></script>
    <!-- Owl carousel-->
    <script src="../Frontend/assets/plugins/js/owl.carousel.js"></script>
    <!--dropdownhover-->
    <script src="../Frontend/assets/plugins/js/bootstrap-dropdownhover.min.js"></script>
    <!--jquery-ui.min-->
    <script src="../Frontend/assets/plugins/js/bars.js"></script>
    <!--validator -->
    <script src="../Frontend/assets/plugins/js/validator.min.js"></script>
    <!--smooth scroll-->
    <script src="../Frontend/assets/plugins/js/smooth-scroll.js"></script>
    <!-- Fancybox js-->
    <script src="../Frontend/assets/plugins/js/jquery.fancybox.min.js"></script>
    <!-- fitvids -->
    <script src="../Frontend/assets/plugins/js/jquery.fitvids.js"></script>
    <!-- SELECTIZE-->
    <script src="../Frontend/assets/plugins/js/standalone/selectize.js"></script>
    <!-- isotope js-->
    <script src="../Frontend/assets/plugins/js/isotope.pkgd.js"></script>
    <script src="../Frontend/assets/plugins/js/packery-mode.pkgd.js"></script>
    <script src="../Frontend/assets/plugins/js/jquery.inview.min.js"></script>
    <script src="../Frontend/assets/plugins/js/progressbar.min.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



    <!-- init -->
    <script src="../Frontend/assets/js/init.js"></script>
    <script>
        var commentaire = "<?= isset($_GET["commentaire"]) ? $_GET["commentaire"] : "false" ?>";
        var id = <?= isset($_GET["id"]) ? $_GET["id"] : 0 ?>;
        $(function() {
            $('[role="presentation"] a').eq(0).addClass("lien");
            $('[role="presentation"] a').each(function(index, element) {
                $(this).click(function() {
                    if (!$(this).hasClass("lien")) {
                        $(this).addClass("lien");
                    }
                    if (index == 0) {
                        $('[role="presentation"] a').eq(1).removeClass("lien");
                    } else {
                        $('[role="presentation"] a').eq(0).removeClass("lien");

                    }

                });
            });



            $("#customRadioInline1").click(function() {
                swal.fire({
                    title: 'Etudiant!',
                    type: 'info',
                    text: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt',
                    button: {
                        text: "OK",
                        value: true,
                        visible: true,
                        className: "btn btn-primary"
                    }
                })
            })
            $("#customRadioInline2").click(function() {
                swal.fire({
                    title: 'Patient!',
                    type: 'info',
                    text: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt',
                    button: {
                        text: "OK",
                        value: true,
                        visible: true,
                        className: "btn btn-primary"
                    }
                })
            })
            if (Cookies.get("username") != undefined) {
                $("[name='username']").val(Cookies.get("username"))
                $("[name='password']").val(Cookies.get("password"))
                $("[name='remember-me']").attr("checked", "checked")
            }
            $("#login-form").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '../../entities/client.php',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {

                        if (data != "ok") {
                            $(".erreur").text(data)
                            $(".erreur").fadeIn("fast");
                            setTimeout(function() {
                                
                                $(".erreur").fadeOut("fast");
                            }, 2000)
                            if (commentaire == "false")
                                document.location.href = "../Backoffice/client/index.php";
                            else 
                                document.location.href = "../Frontend/blog-single.php?id=" + id + "&commentaire=" + commentaire;

                        } else {
                            $(".erreur").hide();
                            if ($("[name='remember-me']").prop("checked") == true) {
                                Cookies.set('username', $("[name='username']").val(), {
                                    expires: 360,
                                    path: ''
                                });
                                Cookies.set('password', $("[name='password']").val(), {
                                    expires: 360,
                                    path: ''
                                });
                            } else {
                                Cookies.remove('username', {
                                    path: ''
                                });
                                Cookies.remove('password', {
                                    path: ''
                                });
                            }

                          

                        }
                    }
                })

            })

            $.validator.setDefaults({
                errorClass: 'invalid-feedback',
                highlight: function(element) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid');
                },
                errorPlacement: function(error, element) {
                    if (element.prop('type') === 'text' || element.prop('type') === 'mail' || element.prop('type') === 'password') {
                        element.after(error);
                    } else if (element.prop('type') === 'radio') {
                        element.parent().parent().after(error);
                    }
                }
            });

            $.validator.addMethod('strongPassword', function(value, element) {
                return this.optional(element) ||
                    value.length >= 6 &&
                    /\d/.test(value) &&
                    /[a-z]/i.test(value);
            }, '6 caractères au moins avec au moins 1 chiffre');

            $.validator.addMethod("specialChars", function(value, element) {
                var regex = new RegExp("^[a-zA-Z0-9éèà]+$");
                var key = value;

                if (!regex.test(key)) {
                    return false;
                }
                return true;
            }, "Pas de caractères spéciaux");

            $.validator.addMethod("phoneNumberControl", function(value, element) {
                var regex = new RegExp("^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$");
                var key = value;

                if (!regex.test(key)) {
                    return false;
                }
                return true;
            }, "écriver un numéro conforme svp");
            var isOneFieldEmpty = false;
            var submit = false;

            $("#register-form").validate({
                onkeyup: (element) => {
                    $(element).valid();
                },
                rules: {
                    email: {
                        required: true,
                        email: true,
                        remote: {
                            url: "../../entities/remoteClientEmail.php",
                            type: "post",
                            data: {
                                email: function() {
                                    return $("#email").val();
                                }
                            }
                        },

                    },
                    regpassword: {
                        required: true,
                        strongPassword: true
                    },
                    confirmPassword: {
                        required: true,
                        equalTo: '#regpassword'
                    },
                    regusername: {
                        required: true,
                        nowhitespace: true,
                        specialChars: true,
                        remote: {
                            url: "../../entities/remoteClientUsername.php",
                            type: "post",
                            data: {
                                regusername: function() {
                                    return $("#regusername").val();
                                }
                            }
                        },
                    },
                    type: {
                        required: true,
                    },
                    phoneNumber: {
                        required: true,
                        phoneNumberControl: true,
                    }
                },
                messages: {
                    email: {
                        required: 'ce champ est requis.',
                        email: 'entrez une adresse mail valide',
                        remote: "mail déjà utilisé",

                    },
                    regusername: {
                        required: 'ce champ est requis',
                        remote: "username déjà utilisé",
                    },
                    confirmPassword: {
                        equalTo: 'entrer le même mot de passe'
                    },
                    type: {
                        required: "vous devez choisir ",
                    },
                    phoneNumber: {
                        required: "vous devez remplir"
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        type: "POST",
                        url: "../../entities/client.php",
                        data: $("#register-form").serialize() + "&operation=registration",

                        success: function(data) {
                            toastr.info("Enregistrement terminé veuillez vous connecter");
                            $("[name='email']").val("");
                            $("[name='regusername']").val("");
                            $("[name='regpassword']").val("");
                            $("[name='confirmPassword']").val("");
                            $("[name='type']").prop("checked", false);
                            $("[name='email']").val("");
                            $("[name='phoneNumber']").val("");

                        }
                    });

                    return false;
                }

            })





        })
    </script>

</body>

</html>