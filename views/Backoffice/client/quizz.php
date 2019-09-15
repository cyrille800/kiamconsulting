<?php
session_start();
include_once "../../../entities/class_quizz.php";
include_once "../../../entities/class_concour.php";
include_once "../../../entities/class_etudiant.php";
if (!isset($_SESSION["id"])) {
    header("location:../../pages_error/404.html");
}
$ecole = "";
$specialite = "";
$ecole = etudiant::retourne_valeur("id_client", $_SESSION["id"], "ecole_choisie");
$specialite = etudiant::retourne_valeur("id_client", $_SESSION["id"], "specialite");
$resultat = etudiant::retourne_valeur("id_client", $_SESSION["id"], "resultat");
if ($resultat != 0) {
    header("location:../../pages_error/404.html");
}
$passe = "false";
function datePublication2()
{
    $req = config::$bdd->prepare("select date from datepublication");
    if ($req->execute()) {
        $rows = $req->fetchAll();
        $date0 = explode("T", $rows[0]["date"]);
        $date1 = $date0[0];
        $heure = $date0[1];
        $date = explode("-", $date1);
        $annee = $date[0];
        $mois = $date[1];
        $jour = $date[2];
        $dateFinal = $mois . "/" . $jour . "/" . $annee . " " . $heure;
        return $dateFinal;
    }
    return "";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="description" content="Latest updates and statistic charts">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
    <link href="../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/Backoffice/css/demo4/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/Backoffice/js/jQuery-Plugin-To-Transform-Radio-Buttons-Into-A-Slider-Radios-To-Slider/css/radios-to-slider.css" rel="stylesheet" type="text/css" />
    <style>
        #countdownTimer2,
        h1,
        li,
        li span {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        #countdownTimer2 {
            /* color: #333; */
            text-align: center;
        }

        h1 {
            font-weight: normal;
        }

        li {
            display: inline-block;
            font-size: 1.5em;
            list-style-type: none;
            padding: 1em;
            text-transform: uppercase;
        }

        li span {
            display: block;
            font-size: 4.5rem;
        }
    </style>
</head>

<body style="padding:0px;margin:0px;background-color:rgba(0,0,0,0.06);">
    <div class="kt-subheader   kt-grid__item bg-white mb-4" id="kt_subheader" style="padding:2px;padding-left:40px;">
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">quizz</h3>

                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="la la-tachometer"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Liste des quizz </a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- begin:: Content -->
    <div class="kt-content kt-grid__item kt-grid__item--fluid" style="background-color:white;">
        <?php
        if ($ecole != 0) {
            ?>
            <div class="preload" style="position:fixed;width:100%;height:100%;background:white;left:0;top:0;z-index:100;padding-top:10%;">
                <center>
                    <div class="lds-ring">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </center>
            </div>
        <?php
        }
        ?>
        <!--begin::Dashboard 5-->
        <!-- <center> -->
        <!-- quizz -->
        <?php
        if ($ecole == "" || $ecole == 0) {
            echo $ecole;
            ?>
            <div class="alert alert-primary mx-auto ml-5 mr-5 col-5" style="margin-top:6%;">Avant de participer au concours, vous devez choisir l'école que vous allez faire. choisisser bien, car vous n'auriez plus la possibilité de revenir. </div>
        <?php
        } else {
            ?>
            <div class="container mb-5">
                <div class="row " id="concours">
                    <div class="col-sm-6">

                        <?php
                            $temp = concours::concoursLePlusProche();
                            if ($temp > 0) {
                                $concours = concours::afficherProchainConcours($temp);
                                $temp2 = concours::concoursSuivant($temp);
                                if (quizz::verifierPasserQuizz($_SESSION["id"], $concours["id"])) {
                                    $passe = "true";
                                    $dateFinal = datePublication2();
                                }
                            } else {
                                $passe = "false";
                                $dateFinal = datePublication2();
                            }
                            ?>
                    </div>
                    <div class="col-sm-6" style="position:relative">


                        <div id="countdownTimer2">
                            <h1>
                            </h1>
                            <ul>
                                <li><span id="days"></span></li>
                                <li><span id="hours"></span></li>
                                <li><span id="minutes"></span></li>
                                <li><span id="seconds"></span></li>
                            </ul>
                        </div>


                    </div>
                    <button href="#" class="btn btn-primary mt-5" id="loading" role="button">Passer le quizz</button>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form id="quizz">
                            <p class="lead">Complété à 0%</p>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar">
                                    <span class="sr-only">completé à 40%</span>
                                </div>
                            </div>
                            <h3 id="question" class="mt-5 d-inline">
                                Question
                            </h3>

                            <img src="" alt="" width="5%" class="img-fluid ml-3">
                            <div id="options" class="form-group mt-3">
                                <div class="custom-control custom-radio mt-2 mb-3">
                                    <input type="radio" name="option" class="custom-control-input" id="customRadioInline1" number=0>
                                    <label class="custom-control-label" for="customRadioInline1">Check this custom radio</label>
                                    <img src="" alt='' width="5%" class="img-fluid ml-3">
                                </div>
                                <div class="custom-control custom-radio mt-2 mb-3">
                                    <input type="radio" name="option" class="custom-control-input" id="customRadioInline2" number=1>
                                    <label class="custom-control-label" for="customRadioInline2">Check this custom radio</label>
                                    <img src="" alt='' width="5%" class="img-fluid ml-3">

                                </div>
                                <div class="custom-control custom-radio mt-2 mb-3">
                                    <input type="radio" name="option" class="custom-control-input" id="customRadioInline3" number=2>
                                    <label class="custom-control-label" for="customRadioInline3">Check this custom radio</label>
                                    <img src="" alt='' width="5%" class="img-fluid ml-3">

                                </div>
                                <div class="custom-control custom-radio mt-2 mb-3">
                                    <input type="radio" name="option" class="custom-control-input" id="customRadioInline4" number=3>
                                    <label class="custom-control-label" for="customRadioInline4">Check this custom radio</label>
                                    <img src="" alt='' width="5%" class="img-fluid ml-3">

                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-12 ">

                                <button class="btn btn-danger mr-3" role="button" id="Abandonner">Abandonner</button>
                                <button class="btn btn-primary mr-3" role="button" id="Precedent">Précédent</button>
                                <button class="btn btn-default " role="button" id="Suivant">Suivant</button>
                                <span class="pull-right  mt-2" id="quizzCountdown" style=""></span>
                            </div>

                        </div>
                        <div class="row" style="margin-top:50px">
                            <div class="col-sm-12 ">
                                <div id="radios">
                                    <?php
                                        $idConcour = isset($concours["id"]) ? $concours["id"] : 0;
                                        $req = config::$bdd->prepare("select * from qizz where id_concour=" . $idConcour);
                                        $req->execute();
                                        for ($i = 1; $i <= $req->rowCount(); $i++) {
                                            ?>
                                        <input id="option<?= $i ?>" name="options" type="radio">
                                        <label for="option<?= $i ?>" width="40px" style="font-size:10px">&nbsp;&nbsp;&nbsp;<?= $i ?> </label>
                                    <?php
                                        }
                                        ?>

                                </div>

                            </div>

                        </div>
                    </div>



                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- </center> -->

    <!--end::Dashboard 5-->
    </div>
    <!-- end:: Content -->
    <!-- <script src="../../assets/Backoffice/js/demo4/pages/components/extended/toastr.js" type="text/javascript"></script> -->
    <script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
    </script>
    <script src="../../assets/Backoffice/js/demo4/scripts.bundle.js" type="text/javascript">
    </script>
    <script src="../../assets/Backoffice/js/jQuery-Plugin-To-Transform-Radio-Buttons-Into-A-Slider-Radios-To-Slider/js/jquery.radios-to-slider.js"></script>
    <script>
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
    <script src="http://localhost:1337/socket.io/socket.io.js" type="text/javascript"></script>


    <script>
        $(window).on("load", function() {
            $(".preload").fadeOut("fast");
            setTimeout(function() {
                $("#Suivant").click(function() {
                    var i = 1;
                    $(".slider-label").each(function() {
                        if ($(this).find("span").length == 1) {
                            $("[data-radio='option" + i + "']").css({
                                "background-color": "#FF7069",
                                "opacity": "1"
                            });
                        } else {
                            if ($("[data-radio='option" + i + "']").not(".slider-label-active").css("background-color") != "#FF7069") {
                                $("[data-radio='option" + i + "']").css({
                                    "opacity": "0.4"
                                });
                            }
                        }

                        i++;
                    })
                })
                $("#Precedent").click(function() {
                    var i = 1;
                    $(".slider-label").each(function() {
                        if ($(this).find("span").length == 1) {
                            $("[data-radio='option" + i + "']").css({
                                "background-color": "#FF7069",
                                "opacity": "1"
                            });
                        } else {
                            if ($("[data-radio='option" + i + "']").not(".slider-label-active").css("background-color") != "#FF7069") {
                                $("[data-radio='option" + i + "']").css({
                                    "opacity": "0.4"
                                });
                            }
                        }

                        i++;
                    })
                })

            }, 3000)
        })
        var questionNumber = 0;
        var answers = [];
        var answersJson = [];
        var Quizz = [];
        var options = [];
        var checkbox = [];
        var answersQuizz = [];
        var progressBar;
        var progressBar2 = 0;
        var finished = false;
        var Image = [];
        var Image2 = [];
        var page = 0;

        function notAnsweredQuestions(questionNumber) {
            let a = questionNumber + 1;
            let b = a;
            if (answers[questionNumber] == null) {
                $("#option" + a).css("color", "red");
                if ($("#option" + a).next("label").children("span").length == 0)
                    $("#option" + a).next("label").append("<span></span>");
            } else $("#option" + a).next("label").text(b);
        }

        function notAnsweredQuestions2(questionNumber, questionNumber2) {
            let c;
            for (let index = 0; index <= questionNumber; index++) {
                if (questionNumber > questionNumber2) {
                    c = index + 1;
                    if (answers[index] == undefined) {
                        $("#option" + c).css("color", "red");
                        if ($("#option" + c).next("label").children("span").length == 0)
                            $("#option" + c).next("label").append("<span>...</span>");
                    } else $("#option" + c).next("label").text(c);
                }
            }
            if (questionNumber < questionNumber2) {
                c = questionNumber2 + 1;
                if (answers[questionNumber2] == null) {
                    $("#option" + c).css("color", "red");
                    if ($("#option" + c).next("label").children("span").length == 0)
                        $("#option" + c).next("label").append("<span></span>");
                } else $("#option" + c).next("label").text(c);
            }
        }

        function ProgressBar() {
            let cmpt = 0;
            answers.forEach(element => {
                if (element) cmpt++;
            });
            progressBar = cmpt * 100 / Quizz.length;
            $(".progress-bar").animate({
                    width: "" + progressBar - progressBar2 + "%",
                }, 300, "linear")
                .queue(function() {
                    $(".lead").text("Complété à " + Math.floor(progressBar) + "%");
                    $(this).dequeue();
                });

        }

        function precedentButton() {
            if (questionNumber == 0 || questionNumber < 0) {
                $("#Precedent").prop('disabled', true);
            } else {
                $("#Precedent").prop('disabled', false);
            }

        }

        function Checkbox(questionNumber) {
            var number;
            if (answers[questionNumber] != null) {
                number = checkbox[questionNumber];
                $("[number=" + number + "]").prop("checked", true);

            } else if (answers[questionNumber] == null) {
                $(".custom-control-input").each(function() {
                    $(this).prop("checked", false);
                });
            }
        }

        function currentQuestion() {
            precedentButton();
            $("#Suivant").click(function() {
                if ($(this).text() == "Terminer") {
                    toastr.success("Nous espérons que cela s'est bien passé");
                    Results();
                }
                if (questionNumber < options.length - 1) {
                    Answers(questionNumber);
                    notAnsweredQuestions(questionNumber);
                    ++questionNumber;
                    questionPosition();
                    updateQuizz(questionNumber);
                    updateImage();
                    Checkbox(questionNumber);
                    ProgressBar();
                    $(this).text("Suivant");

                }
                if (questionNumber == options.length - 1) {
                    Answers(questionNumber);
                    ProgressBar();
                    $(this).text("Terminer");
                }

                precedentButton();
            });
            $("#Abandonner").click(function(e) {
                Results();
            });
            $("#Precedent").click(function(e) {
                if (questionNumber < options.length) {
                    Answers(questionNumber);
                    notAnsweredQuestions(questionNumber);
                    --questionNumber;
                    Checkbox(questionNumber);
                    questionPosition();
                    updateQuizz(questionNumber);
                    updateImage();
                    ProgressBar();
                    precedentButton();
                    $("#Suivant").text("Suivant");
                };

            });

        }

        function Answers(questionNumber) {
            $(".custom-control-input").each(function(element) {
                if ($(this).prop("checked")) {
                    answers[questionNumber] = $(this).next("label").text();
                    checkbox[questionNumber] = $(this).attr("number");
                    return false;
                }
            });
        }


        function Results() {
            var score = 0;
            answers.forEach((element, index) => {
                if (element == answersQuizz[index]) {
                    score++;
                }
            });
            setTimeout(function() {
                $.ajax({
                        type: "post",
                        url: "../../../entities/quizz.php",
                        data: {
                            operation: "quizz",
                            resultat: score,
                            idEtudiant: <?= $_SESSION["id"] ?>,
                            idConcour: <?= isset($concours["id"]) ? $concours["id"] : 0 ?>
                        },
                        cache: false,
                        success: function(response) {
                            window.top.location.href = "index.php";
                        }
                    })
                    .fail(function() {
                        toastr.error("cela n'a pas fonctionne");
                    })
            }, 1500);

        }

        function refreshPage() {
            $.ajax({
                type: "post",
                url: "../../../entities/concour.php",
                data: {
                    operation: "rafraichirPage",
                    id: <?= $temp ?>,
                },
                cache: false,
                success: function(response) {
                    let prochainConcour = [];
                    var response2 = JSON.parse(response);
                    var countDownDate = new Date(response.date).getTime();
                    var time = 0;
                    var bool = false;
                    var duree = parseInt(response.duree) * 60000;
                    var x = setInterval(function() {
                        console.log("oui");
                            var now = new Date().getTime();
                            var distance = countDownDate - now;
                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                            if (distance <= 0) {
                                if (Math.abs(distance) < duree) {
                                    if (Math.floor((duree - Math.abs(distance)) / 60000) == 0 && Math.floor(((duree - Math.abs(distance)) % 60000) / 1000) == 0) {
                                        window.location.href = "quizz.php";
                                        clearInterval(x);
                                    }
                                }
                            }
                        },
                        1000);
                }
            });
        }

        function loadingQuizz() {
            questionNumber = 0;
            $("#quizz,#Suivant,#Precedent,#Abandonner,#radios").show("slow");
            $("#loading,#timer,#concours").hide("slow");
            $("#Precedent").disabled = true;
            getQuizz();
            getImages();
            updateQuizz(questionNumber);
            updateImage();
            questionPosition();
        }

        function questionPosition() {
            let temp = questionNumber + 1;
            $("#option" + temp + "").prop("checked", true);
            var radios = $("#radios").radiosToSlider({
                size: 'medium',
                animation: true,
                fitContainer: true,
                isDisable: false,
                onSelect: function(value) {
                    value.siblings("ins").each(function(index, element) {
                        if ($(this).attr("data-radio") == value.attr("id")) {
                            if (!$(this).hasClass("slider-lower-level")) {
                                $(this).addClass("slider-lower-level");
                            }
                        }
                    });
                    var questionNumber2 = questionNumber;
                    questionNumber = parseInt(value.attr("id").substr(6, 2)) - 1;
                    precedentButton();
                    Answers(questionNumber2);
                    notAnsweredQuestions2(questionNumber, questionNumber2)
                    updateQuizz(questionNumber);
                    updateImage();
                    Checkbox(questionNumber);
                    ProgressBar();
                    if (questionNumber == options.length - 1) {
                        $("#Suivant").text("Terminer");
                    } else $("#Suivant").text("Suivant");


                    value.siblings("label").not("slider-label.slider-label-active").each(function(index, element) {
                        if ($(this).find("span").length == 1) {
                            let label = $(this);
                            $(this).siblings("ins").each(function() {
                                if ($(this).attr("data-radio") == label.attr("for")) {
                                    $(this).css({
                                        "background-color": "#FF7069",
                                        "opacity": "1"
                                    });
                                }
                            })
                        } else {
                            let label = $(this);
                            $(this).siblings("ins").each(function() {
                                if ($(this).attr("data-radio") == label.attr("for")) {
                                    if ($(this).css("background-color") != "#FF7069") {
                                        $(this).css({
                                            "opacity": "0.1"
                                        });
                                    }
                                }
                            })
                        }
                    });



                }

            });

        }

        function hidingQuizz() {
            $("#quizz,#Suivant,#Precedent,#Abandonner,#radios").css("display", "none");
        }

        function getQuizz() {
            $.ajax({
                    type: "post",
                    url: "../../../entities/quizz.php",
                    data: {
                        operation: "afficherQuizz",
                        idConcour: "<?= isset($concours['id']) ? $concours["id"] : 0 ?>",
                    },
                    async: false,
                    cache: false,
                    success: function(data) {
                        Quizz = [...Object.values(JSON.parse(data))];
                        var array = [];
                        var array2 = [];
                        var index = 0;
                        var index1;
                        var index2;
                        var index3;
                        var index4;
                        for (var key in Quizz) {
                            if (Quizz.hasOwnProperty(key)) {
                                array2[0] = Quizz[key].question;
                                index1 = random(array);
                                index2 = random(array);
                                index3 = random(array);
                                index4 = random(array);
                                //index=questionNumber
                                Image2[index] = {
                                    "faux1": Quizz[key].autre_reponse.split(";")[0],
                                    "faux2": Quizz[key].autre_reponse.split(";")[1],
                                    "faux3": Quizz[key].autre_reponse.split(";")[2],
                                    "question": Quizz[key].question,
                                    "reponse": Quizz[key].reponse,
                                }
                                array2[index1] = Quizz[key].autre_reponse.split(";")[0];
                                array2[index2] = Quizz[key].autre_reponse.split(";")[1];
                                array2[index3] = Quizz[key].autre_reponse.split(";")[2];
                                array2[index4] = Quizz[key].reponse;
                                answersQuizz[index] = Quizz[key].reponse;
                                options.push(array2);
                                array2 = [];
                                array = [];
                                index++;
                            }
                        }
                    }

                })
                .fail(function() {
                    alert("sending data throuugh  ajax failed");
                });

        }

        function getImages() {
            $.ajax({
                    type: "post",
                    url: "../../../entities/concour.php",
                    cache: false,
                    async: false,
                    data: {
                        operation: "afficherImage",
                        idConcour: "<?= isset($concours['id']) ? $concours['id'] : 0 ?>",
                    },
                    success: function(response) {
                        var response2 = JSON.parse(response);
                        for (const key in response2) {
                            if (response2.hasOwnProperty(key)) {
                                Image[parseInt(key)] = response2[key];
                            }
                        }

                    }
                })
                .fail(function() {
                    taostr.error("cela n'a pas marché");
                })
        }

        function updateImage() {
            let indice = 0;
            $(".custom-control-input").each(function(element) {
                if (questionNumber < options.length && Image[questionNumber] != null) {
                    if (Image2[questionNumber].faux1 == $(this).next("label").text()) {
                        if ($(this).next("label").next("button").length == 0)
                            $(this).next("label").after('<button  style="padding-top:2px;padding-bottom:2px;" type="button" class="image btn btn-sm btn-info ml-5" data-toggle="modal" data-target="#exampleModal">voir l"image</button>');
                    } else if (Image2[questionNumber].faux2 == $(this).next("label").text()) {
                        if ($(this).next("label").next("button").length == 0)
                            $(this).next("label").after('<button  style="padding-top:2px;padding-bottom:2px;" type="button" class="image btn btn-sm btn-info ml-5" data-toggle="modal" data-target="#exampleModal">voir l"image</button>');

                    } else if (Image2[questionNumber].faux3 == $(this).next("label").text()) {
                        if ($(this).next("label").next("button").length == 0)
                            $(this).next("label").after('<button  style="padding-top:2px;padding-bottom:2px;" type="button" class="image btn btn-sm btn-info ml-5" data-toggle="modal" data-target="#exampleModal">voir l"image</button>');

                    } else if (Image2[questionNumber].reponse == $(this).next("label").text()) {
                        if ($(this).next("label").next("button").length == 0)
                            $(this).next("label").after('<button  style="padding-top:2px;padding-bottom:2px;" type="button" class="image btn btn-sm btn-info ml-5" data-toggle="modal" data-target="#exampleModal">voir l"image</button>');

                    }
                    if (indice == 0) {
                        if ($("#question").next("button").length == 0)
                            $("#question").after('<button style="padding-top:2px;padding-bottom:2px;" type="button" class="image btn btn-sm btn-info ml-5" data-toggle="modal" data-target="#exampleModal">voir l"image</button>');
                    }
                } else if (Image[questionNumber] == null) {
                    if ($(this).next("label").next("button").length) {
                        $(this).next("label").next("button").remove();
                    }
                    if ($("#question").next("button").length) {
                        $("#question").next("button").remove();
                    }
                }
                indice++;
                $(".image").each(function(index, element) {
                    $(this).click(function() {
                        if (Image2[questionNumber].faux1 == $(this).prev("label").text()) {
                            $(".modal-body").html('<img width="80%" src=' + Image[questionNumber].faux1 + '> ');
                        } else if (Image2[questionNumber].faux2 == $(this).prev("label").text()) {
                            $(".modal-body").html('<img width="80%" src=' + Image[questionNumber].faux2 + '> ');
                        } else if (Image2[questionNumber].faux3 == $(this).prev("label").text()) {
                            $(".modal-body").html('<img width="80%" src=' + Image[questionNumber].faux3 + '> ');
                        } else if (Image2[questionNumber].reponse == $(this).prev("label").text()) {
                            $(".modal-body").html('<img width="80%" src=' + Image[questionNumber].reponse + '> ');
                        } else if (Image2[questionNumber].question == $(this).prev("h3").text()) {
                            $(".modal-body").html('<img width="80%" src=' + Image[questionNumber].question + '> ');
                        }
                    });

                });
            });
        }

        function random(randomArray) {
            var bool = true;
            while (bool) {
                bool = false;
                nombre = Math.floor(Math.random() * ((5 - 1)) + 1);
                if (randomArray.lenght != 0) {
                    randomArray.forEach(element => {
                        if (element == nombre && randomArray.length <= 4) bool = true;
                    });
                }
                if (!bool) randomArray.push(nombre);
            }
            return nombre;
        }

        function updateQuizz(questionNumber) {
            var i = 1;
            $(".custom-control-input").each(function(element) {
                if (questionNumber < options.length) {
                    $(this).next("label").text(options[questionNumber][i]);
                    $("#question").text(options[questionNumber][0]);
                    i++;
                }
            });
        }

        function entranceCountDown() {
            var countDownDate = new Date("<?= isset($concours['date']) ? $concours['date'] : "" ?>").getTime();
            var time = 0;
            var toast = "";
            var toast2 = "";
            var toast3 = "";
            var bool = false;
            var duree = <?= isset($concours['duree']) ? $concours["duree"] : 0 ?> * 60000;
            var x = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = countDownDate - now;
                    var distance2 = 0;
                    if (distance > 0) {
                        $("#loading").prop("disabled", true);
                    }
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    $("#days").text(days);
                    $("#hours").text(hours);
                    $("#minutes").text(minutes);
                    $("#seconds").text(seconds);
                    $("#countdownTimer2 h1").text("compte à rebours jusqu'au quizz: ");
                    if (distance <= 0) {

                        if (Math.abs(distance) < duree) {
                            $("#loading").prop("disabled", false);
                            $("#countdownTimer2 h1").text("Temps restant pour le quizz ");
                            $("#days").text(0);
                            $("#hours").text(0);
                            $("#minutes").text(Math.floor((duree - Math.abs(distance)) / 60000));
                            $("#seconds").text(Math.floor(((duree - Math.abs(distance)) % 60000) / 1000));
                            if (Math.floor((duree - Math.abs(distance)) / 60000) > 12 && toast == "") {
                                toastr.info("Vous avez encore du temps Bonne chance");
                                toast = "info";
                                bool = true;

                            } else if (Math.floor((duree - Math.abs(distance)) / 60000) >= 10 && Math.floor((duree - Math.abs(distance)) / 60000) <= 12 && toast2 == "") {
                                toastr.warning("depêchez vous n'avez plus beaucoup de temps");
                                toast2 = "warning";

                            } else if (Math.floor((duree - Math.abs(distance)) / 60000) < 10 && toast3 == "") {
                                toastr.error("Magnez vous il vous reste très peu de temps");
                                toast3 = "error";

                            } else if (Math.floor((duree - Math.abs(distance)) / 60000) == 0 && Math.floor(((duree - Math.abs(distance)) % 60000) / 1000) == 0) {
                                toastr.error("Quizz termine");
                                window.location.href = "quizz.php";
                            }

                        } else {
                            $("#loading").prop("disabled", true);
                            // document.getElementById("countdownTimer").innerHTML = "Quizz expiré";
                            if (page == 0) {
                                toastr.error("Vous êtes arrivé en retard le quizz est déjà terminé");
                            }
                            $("#quizz,#Suivant,#Precedent").hide("slow");
                            clearInterval(x);

                        }
                    }
                },
                1000);

        }


        function entranceCountDown2() {
            $("#loading").css("display", "none");
            var countDownDate = new Date("<?= isset($dateFinal) ? $dateFinal : "" ?>").getTime();
            var distance2;
            if (countDownDate > 0) {
                var time = 0;
                var toast = "";
                var toast2 = "";
                var toast3 = "";
                var bool = false;

                var x = setInterval(function() {
                        var now = new Date().getTime();
                        var distance = countDownDate - now;
                        distance2 = distance;

                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        if (distance > 0) {
                            $("#days").text(days);
                            $("#hours").text(hours);
                            $("#minutes").text(minutes);
                            $("#seconds").text(seconds);
                            $("#countdownTimer2 h1").text("proclamation des résultats prévus dans");

                        } else if (distance == 0) {
                            $("#days").text("");
                            $("#hours").text("");
                            $("#minutes").text("");
                            $("#seconds").text("");
                            $("#countdownTimer2 h1").text("Veuillez vous reconnecter");
                            setTimeout(() => {
                                window.top.location.href = "index.php";
                            }, 1000);



                        } else {
                            if (distance < 0) {
                                $("#days").text("");
                                $("#hours").text("");
                                $("#minutes").text("");
                                $("#seconds").text("");
                                let passe = "<?= $passe ?>";
                                if (passe == "true") {
                                    $("#countdownTimer2 h1").text("les résultats ne sont pas encore disponibles");
                                    var socket = io.connect("http://localhost:1337");
                                    socket.emit("envoyer_notification", {
                                        type: "info",
                                        message: "Vous devez selectionner une date de publication des resltats du concour"
                                    })
                                } else $("#countdownTimer2 h1").text("pas de quizz prevue pour le moment");
                            }
                            clearInterval(x);
                        }

                    },
                    1000);
            }


            let passe = "<?= $passe ?>";
            if (passe == "false") {
                $("#countdownTimer2 h1").text("pas de quizz prevue pour le moment");

            }


        }


        function quizzCountdown(dureeConcour) {
            var tempsActuel = new Date().getTime();
            var tempsDepart = new Date("<?= isset($concours['date']) ? $concours['date'] : "" ?>").getTime();
            var difference = tempsActuel - tempsDepart;
            var minutes = 0;
            var seconds = 0;
            var toast = "";
            var toast2 = "";
            if (difference >= 0) {
                difference = dureeConcour - difference;
                minutes = Math.floor(difference / 60000);
                seconds = Math.floor((difference % 60000) / 1000);
                var x = setInterval(function() {
                    document.getElementById("quizzCountdown").innerHTML = "temps restant: " + minutes + ": " + seconds;
                    if (seconds == 0) {
                        minutes--;
                        seconds = 60;
                    }
                    seconds--;
                    if (minutes == 0 && seconds == 0) {
                        toastr.info("le temps est terminé");
                        Results();
                        clearInterval(x);
                    }
                }, 1000);
            }

        }

        $(function() {
            var temp = <?= $temp ?>;
            var temp2 = <?= isset($temp2) ? $temp2 : -1 ?>;
            var passe = "<?= $passe ?>";
            console.log(temp2);
            if (temp > 0) {
                $("#loading").prop('disabled', false);
            } else {
                $("#loading").prop('disabled', true);
            }
            hidingQuizz();
            if (temp > 0 && passe == "false")
                entranceCountDown();
            else if (temp2 > 0) {
                $("#Description").css("display", "none");
                $("#countdownTimer2 h1").text("Veuillez patienter la fin du concour en cours");
                $("#loading").css("display", "none");
                refreshPage();
            } else {
                $("#Description").css("display", "none");
                entranceCountDown2();
            }
            $("#loading").click(function() {
                page = 1;
                loadingQuizz();
                quizzCountdown(<?= isset($concours['duree']) ? $concours["duree"] : 0 ?> * 60000);
                currentQuestion();
            });

        })
    </script>
</body>

</html>