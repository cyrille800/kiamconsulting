<?php


include 'header.php';
require_once "../../entities/class_post.php";
require_once "../../entities/class_commentaire.php";

if (isset($_GET["id"])) {
    if (!isset($_SESSION["views"][$_GET["id"]])){
        $req = config::$bdd->prepare("select  vues from post where id=".$_GET["id"]);
        $req->execute();
        $rows=$req->fetchAll();
        $_SESSION["views"][$_GET["id"]] = $rows[0]["vues"];
        
    } 
    else $_SESSION["views"][$_GET["id"]]++;
    $req = config::$bdd->prepare("update post set vues=:vues where id=:id ");
    $req = BindValue($req, array("id", "vues"), array($_GET["id"], $_SESSION["views"][$_GET["id"]]));
    $req->execute();
}
?>
<!--
        |========================
        |      Features Section
        |========================
        -->
<section class="uv-subpage-heading image-bg" style="background-image: url(assets/images/header-bg-1.jpg);">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="uv-subhead-content col-xs-12">
                    <h2>Blog & News </h2>
                    <span>  At atque, enim veniam tempora quam porro eos dolorem magnam temporibus aliquid eaque.</span>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="uv-pagination">
    <div class="container">
        <ul>
            <li class="active"><a href="">Home</a></li>
            <li><a href="">Blog</a></li>
        </ul>
    </div>
</div>


<section class="uv-single-blog">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-8">
                <div class="blog-wrapper single-blog-wrapper shadow-border" style="width:700.642px;">
                    <?php
                    if (isset($_GET["id"])) {
                        extract($_GET);
                        Post::afficherPost($id);
                    }
                    ?>
                </div>
                <div class="blog-wrapper comment-wrapper">
                    <div id="reviews" class="feedbacks">
                        <h3>Ce que les autres disent  (<?= Post::nombreCommentaire(isset($_GET["id"])?$_GET["id"]:0)?> commentaires)</h3>
                        <div>
                            <div class="well">
                                <?php
                                if (isset($_GET["id"])) {
                                    extract($_GET);
                                    Commentaire::afficherCommentaires($id);
                                }
                                ?>

                                <div class="ldx-blog-comment-form">
                                    <div class="comment-title">
                                        <h4>Laisser un commentaire</h4>
                                        <hr class="uv-hr-title">
                                        <div class="clearfix"></div>
                                    </div>
                                    <form id="contact-form" class="single-form comment-form">
                                        <div class="row">

                                            <div class="col-sm-12 ldx-comment-form-group">
                                                <textarea class="contact-message form-control" id="commentaire" rows="5" placeholder="Your Message" required=""></textarea>
                                            </div>

                                            <!-- Subject Button -->
                                            <div class="btn-form col-xs-12">
                                                <a class="btn btn-fill" id="commenter"> commenter </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 uv-sidebar">
                <div class="clearfix"></div>
               
                <div class="uv-widget">
                    <div class="widget-title">
                        <h4> Les plus populaires</h4>
                        <hr>
                    </div>
                    <ul class="popular-courses">

                        <?php
                        Post::afficherPostPopulaire(Post::postPopulaire());
                        ?>
                    </ul>
                </div>
                <div class="uv-widget">
                    <div class="widget-title">
                        <h4>Commentaires récents</h4>
                        <hr>
                    </div>
                    <div class="twitter-widget">
                        <ul class="latest-tweets">
                            <?php
                            Commentaire::commentaireRecent();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--
        |========================
        |  testimonial
        |========================
        -->
<section class="section uv-testimonial image-bg" id="uv-testimonial" style="background-image: url(assets/images/ts-bg.jpg);">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 client-quates">
                    <div class="uv-client-testimonial">
                        <div class="slider-content wow">
                            <div class="carousel uv-carousel-fade slide" data-ride="carousel" id="quote-carousel">
                                <div class="carousel-inner text-center">
                                    <!-- Quote 1 -->
                                    <div class="item active">
                                        <blockquote>
                                            <div class="row">
                                                <div class="uv-client-quates">
                                                    <h3>lorem ipsum</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 2 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="uv-client-quates">
                                                    <h3>lorem ipsum</h3>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 3 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="uv-client-quates">
                                                    <h3>lorem ipsum</h3>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- Quote 4 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="uv-client-quates">
                                                    <h3>lorem ipsum</h3>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <!-- Bottom Carousel Indicators -->
                                <ol class="carousel-indicators uv-indicator">
                                    <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="assets/images/t3.jpg" alt=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="assets/images/t2.jpg" alt=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="assets/images/t1.jpg" alt=""></li>
                                    <li data-target="#quote-carousel" data-slide-to="3"><img class="img-responsive" src="assets/images/student-1.png" alt=""></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--
        |========================
        |  footer
        |========================
        -->
<?php include 'footer.php' ?>


<!--
        |========================
        |      Script
        |========================
        -->
<!-- jquery -->
<script src="assets/plugins/js/jquery-1.11.3.min.js"></script>
<!-- Bootstrap -->
<script src="assets/plugins/js/bootstrap.min.js"></script>
<!-- mean menu nav-->
<script src="assets/plugins/js/meanmenu.js"></script>
<!-- ajaxchimp -->
<script src="assets/plugins/js/jquery.ajaxchimp.min.js"></script>
<!-- wow -->
<script src="assets/plugins/js/wow.min.js"></script>
<!-- Owl carousel-->
<script src="assets/plugins/js/owl.carousel.js"></script>

<!--dropdownhover-->
<script src="assets/plugins/js/bootstrap-dropdownhover.min.js"></script>
<script src="assets/plugins/js/jquery.matchHeight.js"></script>
<!--jquery-ui.min-->
<script src="assets/plugins/js/bars.js"></script>
<!--validator -->
<script src="assets/plugins/js/validator.min.js"></script>
<!--smooth scroll-->
<script src="assets/plugins/js/smooth-scroll.js"></script>
<!-- Fancybox js-->
<script src="assets/plugins/js/jquery.fancybox.min.js"></script>
<!-- fitvids -->
<script src="assets/plugins/js/jquery.fitvids.js"></script>
<script src="assets/plugins/js/jquery.matchHeight.js"></script>
<!-- SELECTIZE-->
<script src="assets/plugins/js/standalone/selectize.js"></script>
<!-- isotope js-->
<script src="assets/plugins/js/isotope.pkgd.js"></script>
<script src="assets/plugins/js/packery-mode.pkgd.js"></script>
<script src="assets/plugins/js/jquery.inview.min.js"></script>
<script src="assets/plugins/js/progressbar.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>


<!-- init -->
<script src="assets/js/init.js"></script>
<script>
    $(function() {
        var idCommentaireReponse = 0;
        var indiceCommentaire;
        var idClient = '<?= isset($_SESSION["id"]) ? $_SESSION["id"] : "" ?>';

        var idPost = '<?= isset($_GET["id"]) ? $_GET["id"] : "" ?>';
        var date = new Date();
        var bool = "";

        $("#commentaire").val("<?= isset($_GET['commentaire']) ? $_GET['commentaire'] : "" ?>");

        function reponse() {
            $(".reply").each(function(index, element) {

                let bouton = $(this);
                $(this).click(function() {
                    $('html, body').animate({
                        scrollTop: $(".ldx-blog-comment-form").offset().top
                    }, 1000, function() {
                        idCommentaireReponse = parseInt(bouton.parent().parent().children(".media-heading").attr("id"));
                        indiceCommentaire = index;
                        bool = idCommentaireReponse;
                    });

                });
            });
        }
        reponse();


        $("#commenter").click(function() {
            if (idClient && idPost) {
                $.ajax({
                    type: "post",
                    url: "../../entities/Commentaire.php",
                    data: {
                        commentaire: $("#commentaire").val(),
                        idClient: parseInt(idClient),
                        idPost: parseInt(idPost),
                        idCommentaireReponse: idCommentaireReponse,
                        date: date.toDateString(),
                        operation: "ajouter",

                    },
                    success: function(response) {
                        if (bool) {
                            let comments;
                            $(".media.comment").each(function(index, element) {
                                if ($(this).find(".media-heading").attr("id") == bool) {
                                    comments = $(this);
                                }

                            });
                            $('html, body').animate({
                                scrollTop: comments.offset().top
                            }, 1000, function() {
                                console.log("cela fonctionne très bien");
                                bool = "";
                            });
                        }

                        var clientCommentaire = [...Object.values(JSON.parse(response))];
                        if (response) {
                            if (idCommentaireReponse == 0) {
                                $(".ldx-blog-comment-form").before('<div class="media comment">' +
                                    '<div class="media-left">' +
                                    '<a href="#">' +
                                    '<img " src="../assets/Backoffice/media/users/'+<?= isset($_SESSION["id"])?$_SESSION["id"]:0?>+'.png" >' +
                                    '</a>' +
                                    '</div>' +
                                    '<div class="media-body">' +
                                    '<h4 class="media-heading" id=' + clientCommentaire[1] + '>' + clientCommentaire[0] + '</h4>' +
                                    '<div class="time-comment clearfix">' +
                                    '<small class="pull-left">' + date.toDateString() + '</small>' +
                                    '<button class="pull-right btn btn-fill btn-xs reply">Répondre</button>' +
                                    '</div>' +
                                    '<p>' + $("#commentaire").val() + '</p>' +
                                    '</div>' +
                                    '</div>');
                                reponse();


                            } else if (idCommentaireReponse) {
                                let comment = $(".reply").eq(indiceCommentaire).parent().parent().parent(".media.comment");
                                let answer = comment.next(".media.comment-reply");
                                let commentaireReponse = '<div class="media comment-reply">' +
                                    '<div class="media-left">' +
                                    '<a href="#">' +
                                    '<img " src="../assets/Backoffice/media/users/'+<?= isset($_SESSION["id"])?$_SESSION["id"]:0?>+'.png" alt="">' +
                                    '</a>' +
                                    '</div>' +
                                    '<div class="media-body">' +
                                    '<h4 class="media-heading" id=' + clientCommentaire[1] + ' >' + clientCommentaire[0] + '</h4>' +
                                    '<div class="time-comment clearfix">' +
                                    '<small class="pull-left">' + date.toDateString() + '</small>' +
                                    '</div>' +
                                    '<p>' + $("#commentaire").val() + '</p>' +
                                    '</div>' +
                                    '</div>';

                                if (answer.length) {
                                    let index2 = $(".media.comment").index(comment) + 1;

                                    if ($(".media.comment").eq(index2).length) {
                                        $(".media.comment").eq(index2).before(commentaireReponse);
                                    } else {
                                        $(".ldx-blog-comment-form").before(commentaireReponse);
                                    }

                                } else {
                                    comment.after(commentaireReponse);
                                }
                            }

                        }
                        idCommentaireReponse = 0;
                        indice = null;
                    }
                });
            } else {
                window.location.href = "../login/login-reg.php?id="+<?= isset($_GET["id"])?$_GET["id"]:0?>+"&commentaire=" + $("#commentaire").val();

            }



        });

        //liens pour le surplus de commentaires et de réponses

        var nombreCommentaire = $(".media.comment").length;
        var commentaireCache = [];
        if (nombreCommentaire > 3) {
            $(".media.comment").each(function(index, element) {
                if (index < nombreCommentaire - 3) {
                    let id = $(this).find(".media-heading").attr("id");
                    commentaireCache[index] = index;
                    $(this).css("display", "none");
                    $(".media.comment-reply").each(function(index, element) {
                        if ($(this).find(".media-heading").attr("id") == id) {
                            $(this).css("display", "none");
                        }
                    });
                }
            });
            let commentaireRestant = nombreCommentaire - 3;
            $(".media.comment").eq(0).before("<a href='' class='lienCommentaire '>afficher " + commentaireRestant + " autres commentaires</a>");
            $(".lienCommentaire").css("color", "#6cb4e3");
            $(".lienCommentaire").hover(function() {
                $(".lienCommentaire").css("text-decoration", "underline");

            }, function() {
                // out
            });

        } else {

        }


        // liens pour les reponses 
        var nombreReponse = [];
        var indice2 = 0;
        $(".media.comment").each(function(index) {
            let comment = $(this);
            $(".media.comment-reply").each(function(index, element) {
                if ($(this).find(".media-heading").attr("id") == comment.find(".media-heading").attr("id")) {
                    indice2++;
                }
            });
            nombreReponse[index] = indice2;
            indice2 = 0;
        })


        var reponseCache = [];
        var reponses = [];
        var commentArray = [];
        var reponseRestant;
        nombreReponse.forEach((element, index) => {
            if (element > 2) {
                let indice3 = index;
                reponseRestant = element - 2;
                if ($(".media.comment").eq(index).css("display") != "none") {
                    $(".media.comment").eq(index).after("<a href=''class='lienReponse' id=" + $(".media.comment").eq(index).find(".media-heading").attr("id") + ">afficher " + reponseRestant + " autres reponses</a>");
                } else {
                    commentArray.push([$(".media.comment").eq(index), reponseRestant]);
                }
                $(".media.comment-reply").each(function(index) {
                    if ($(this).find(".media-heading").attr("id") == $(".media.comment").eq(indice3).find(".media-heading").attr("id")) {
                        let indice4 = $(this).find(".media-heading").attr("id");
                        // console.log($(".media.comment-reply").find(".media-heading").attr(  ).length);
                        reponses.push($(this));
                    }
                });
                reponseCache.push(reponses);
                reponses = [];
            }
        });
        //cacher les reponses
        cacheReponses = [];
        reponseCache.forEach(element => {
            if (element.length > 2) {
                for (let index = 0; index < element.length - 2; index++) {
                    element[index].css("display", "none");
                    cacheReponses = element[index];
                }
            }
        });
        var arrayReponseComment = [];
        var arrayReponses = [];
        console.log(reponseCache);
        $(".lienCommentaire").click(function(e) {
            e.preventDefault();
            $(this).css("display", "none");
            commentaireCache.forEach(element => {
                $(".media.comment").eq(element).fadeIn(1500, function() {
                    lienreponse();
                });
                var indice6;
                $(".media.comment-reply").each(function(index) {
                    let a = $(this);
                    if ($(this).find(".media-heading").attr("id") == $(".media.comment").eq(element).find(".media-heading").attr("id")) {
                        indice6 = $(this).find(".media-heading").attr("id");
                        // $(this).fadeIn(1500);
                        arrayReponses.push($(this));
                    }
                });
                arrayReponseComment.push([indice6, arrayReponses]);
                arrayReponses = [];

            });
            commentArray.forEach(element => {
                element[0].after("<a href=''class='lienReponse' id=" + element[0].find(".media-heading").attr("id") + ">afficher " + element[1] + " autres reponses</a>");
            });

            arrayReponseComment.forEach(element => {
                if (element[1].length > 2) {
                    for (let index = element[1].length - 1; index > element[1].length - 3; index--) {
                        element[1][index].fadeIn(1500);
                    }
                }
            });
        });

        function lienreponse() {
            $(".lienReponse").each(function() {
                let lien = $(this);
                $(this).click(function(e) {
                    e.preventDefault();
                    $(".media.comment-reply").each(function() {
                        if ($(this).find(".media-heading").attr("id") == lien.attr("id")) {
                            $(this).fadeIn(1500);
                            lien.css("display", "none");
                        }
                    });
                });
            });
            $(".lienReponse").css("color", "#6cb4e3");

        }
        lienreponse();



    })
</script>
</body>


</html>