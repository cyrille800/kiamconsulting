<?php
include_once "../../../entities/class_quizz.php";
include_once "../../../entities/class_concour.php";
session_start();
if (!isset($_SESSION["id"]))
    header("../../../views/login/login-reg.php");
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

<body style="padding:0px;margin:0px;">



    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader" style="background-color:white;padding-left:50px;">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Bienvenu</h3>
            <span class="kt-subheader__separator kt-hidden">
            </span>

        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                <a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="kt-tooltip" title="Calendar" data-placement="top">
                    <i class="flaticon2-hourglass-1">
                    </i>
                </a>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-content kt-grid__item kt-grid__item--fluid" style="background-color:white;">
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
        <!--begin::Dashboard 5-->
        <!-- <center> -->
        <!-- quizz -->
        <div class="container mb-5">
            <div class="row " id="concours">
                <div class="col-sm-6">
                    <?php

                    $temp = concours::concoursLePlusProche();
                    if ($temp > 0) {
                        $concours = concours::afficherProchainConcours($temp);
                    } else echo "Pas de concours prévu pour le moment<br>";
                    ?>
                </div>
                <div class="col-sm-6" style="position:relative">
                    <?php
                    $temp = concours::concoursLePlusProche();
                    if ($temp > 0) {
                        ?>

                    <div id="countdownTimer2">
                        <h1>
                            compte à rebours jusqu'au quizz:</h1>
                        <ul>
                            <li><span id="days"></span>days</li>
                            <li><span id="hours"></span>Hours</li>
                            <li><span id="minutes"></span>Minutes</li>
                            <li><span id="seconds"></span>Seconds</li>
                        </ul>
                    </div>

                    <?php
                    }
                    ?>


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
                        <img src="" alt="" width="10px" height="100%">
                        <div id="options" class="form-group mt-3">
                            <div class="custom-control custom-radio mt-2 mb-3">
                                <input type="radio" name="option" class="custom-control-input" id="customRadioInline1" number=0>
                                <label class="custom-control-label" for="customRadioInline1">Check this custom radio</label>
                                <img src="" alt='' width="10px" height="100%">
                            </div>
                            <div class="custom-control custom-radio mt-2 mb-3">
                                <input type="radio" name="option" class="custom-control-input" id="customRadioInline2" number=1>
                                <label class="custom-control-label" for="customRadioInline2">Check this custom radio</label>
                                <img src="" alt='' width="10px" height="100%">

                            </div>
                            <div class="custom-control custom-radio mt-2 mb-3">
                                <input type="radio" name="option" class="custom-control-input" id="customRadioInline3" number=2>
                                <label class="custom-control-label" for="customRadioInline3">Check this custom radio</label>
                                <img src="" alt='' width="10px" height="100%">

                            </div>
                            <div class="custom-control custom-radio mt-2 mb-3">
                                <input type="radio" name="option" class="custom-control-input" id="customRadioInline4" number=3>
                                <label class="custom-control-label" for="customRadioInline4">Check this custom radio</label>
                                <img src="" alt='' width="10px" height="100%">

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
                                <label for="option<?= $i ?>"> question <?= $i ?> </label>
                                <?php
                                }
                                ?>

                            </div>

                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- </center> -->

    <!--end::Dashboard 5-->
    </div>
    <!-- end:: Content -->
    <script src="../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
    </script>
    <script src="../../assets/Backoffice/js/demo4/scripts.bundle.js" type="text/javascript">
    </script>
    < script src="../../assets/Backoffice/js/demo4/pages/components/extended/toastr.js" type="text/javascript">
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

        <script>
            $(window).on("load", function() {
                $(".preload").fadeOut("fast");
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
                    window.top.location.href = "index.php";
                });
                $("#Precedent").click(function(e) {
                    if (questionNumber < options.length) {
                        Answers(questionNumber);
                        --questionNumber;
                        Checkbox(questionNumber);
                        questionPosition();
                        updateQuizz(questionNumber);
                        updateImage();
                        ProgressBar();
                        precedentButton();
                        $("#Suivant").text("Suivant");
                    };
                    // precedentButton();

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
                            alert("cela n'a pas fonctionne");
                        })
                }, 1500);

            }



            function loadingQuizz() {
                questionNumber = 0;
                $("#quizz,#Suivant,#Precedent,#Abandonner,#radios").show("slow");
                $("#loading,#timer,#concours").hide("slow");
                $("#Precedent").disabled = true;
                getQuizz();
                getImages();
                updateQuizz(questionNumber);
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
                        var questionNumber2 = questionNumber;
                        questionNumber = parseInt(value.attr("id").substr(6, 1)) - 1;
                        console.log(questionNumber);
                        precedentButton();
                        Answers(questionNumber2);
                        updateQuizz(questionNumber);
                        updateImage();
                        Checkbox(questionNumber);
                        ProgressBar();
                        if (questionNumber == options.length - 1) {
                            $("#Suivant").text("Terminer");
                        } else $("#Suivant").text("Suivant");
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
                        async: false,
                        cache: false,
                        data: {
                            operation: "afficherImage",
                            idConcour: "<?= isset($concours['id']) ? $concours['id'] : 0 ?>",
                        },
                        success: function(response) {
                            console.log(response);

                            var response2 = JSON.parse(response);
                            for (const key in response2) {
                                if (response2.hasOwnProperty(key)) {
                                    Image[parseFloat(key)] = response2[key];
                                }
                            }
                        }
                    })
                    .fail(function() {
                        console.log("cela n'a pas marché");
                    })
            }

            function updateImage() {
                $(".custom-control-input").each(function(element) {
                    if (questionNumber < options.length && Image[questionNumber] != null) {
                        if (Image2[questionNumber].faux1 == $(this).next("label").text()) {
                            $(this).next("label").next("img").attr("src", Image[questionNumber].faux1);

                        } else if (Image2[questionNumber].faux2 == $(this).next("label").text()) {

                            $(this).next("label").next("img").attr("src", Image[questionNumber].faux2);
                        } else if (Image2[questionNumber].faux3 == $(this).next("label").text()) {

                            $(this).next("label").next("img").attr("src", Image[questionNumber].faux3);
                        } else if (Image2[questionNumber].reponse == $(this).next("label").text()) {

                            $(this).next("label").next("img").attr("src", Image[questionNumber].reponse);
                        }
                        $("#question").next("img").attr("src", Image[questionNumber].question);
                    }

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
                        if (distance <= 0) {
                            if (Math.abs(distance) < 900000) {
                                $("#loading").prop("disabled", false);
                                $("#countdownTimer2 h1").text("Temps restant pour le quizz ");
                                $("#days").text(0);
                                $("#hours").text(0);
                                $("#minutes").text(Math.floor((900000 - Math.abs(distance)) / 60000));
                                $("#seconds").text(Math.floor(((900000 - Math.abs(distance)) % 60000) / 1000));
                                if (Math.floor((900000 - Math.abs(distance)) / 60000) > 12 && toast == "") {
                                    toastr.info("Vous avez encore du temps Bonne chance");
                                    toast = "info";
                                    bool = true;

                                } else if (Math.floor((900000 - Math.abs(distance)) / 60000) >= 10 && Math.floor((900000 - Math.abs(distance)) / 60000) <= 12 && toast2 == "") {
                                    toastr.warning("depêchez vous n'avez plus beaucoup de temps");
                                    toast2 = "warning";

                                } else if (Math.floor((900000 - Math.abs(distance)) / 60000) < 10 && toast3 == "") {
                                    toastr.error("Magnez vous il vous reste très peu de temps");
                                    toast3 = "error";

                                }

                            } else {
                                $("#loading").prop("disabled", true);
                                document.getElementById("countdownTimer").innerHTML = "Quizz expiré";
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
                            clearInterval(x);
                            document.getElementById("countdownTimer").innerHTML = "TERMINE";
                            Results();
                        }
                    }, 1000);
                }

            }


            $(function() {
                var temp = <?= $temp ?>;
                if (temp > 0) {
                    $("#loading").prop('disabled', false);
                } else {
                    $("#loading").prop('disabled', true);
                }
                hidingQuizz();
                entranceCountDown();
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