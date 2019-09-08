<?php

require_once "../../entities/class_post.php";
require_once "../../entities/class_commentaire.php";
require_once "../../entities/contractedFunctions.php";
include 'header.php';

?>
<!--
        |========================
        |      Features Section
        |======================""==
        -->
<section class="uv-subpage-heading image-bg" style="background-image: url(assets/images/header-bg-1.jpg);">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="uv-subhead-content col-xs-12">
                    <h2>Blog</h2>
                    <span>lorep ipsum msdkf sdfmsdf sdfsmmqsmdf smdf</span>
                    <div class="slide-buttons " style="margin-top:50px;">
                    <?php
                        if (!isset($_SESSION["id"])) {
                            ?>
                            <a href="../login/login-reg.php" class="slide-btn btn btn-base">Se connecter</a>
                        <?php
                        }
                        ?> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="uv-pagination">
    <div class="container">
        <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="blog.php?page=1">Blog</a></li>
        </ul>
    </div>
</div>


<section class="uv-single-blog">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-8">
                <?php

                if (isset($_GET["Search"]) and !empty($_GET["Search"])) {
                    extract($_GET);
                    $sql = "select * from post where Categorie like '%" . $Search . "%' or titre like '%" . $Search . "%' or date  like '%" . $Search . "%' or introduction like '%" . $Search . "%' or contenu like '%" . $Search . "%' or auteur like '%" . $Search . "%' ";
                } else {
                    $sql = "select * from post";
                }
                $postParPage = 2;
                $requette = config::$bdd->prepare($sql);
                $requette->execute();
                $totalPost = $requette->rowCount();
                $totalPage = ceil($totalPost / $postParPage);
                if (isset($_GET['page']) and !empty($_GET['page']) and  $_GET['page'] > 0) {
                    $_GET["page"] = intval($_GET["page"]);
                    $pageCourante = $_GET["page"];
                    $pagePrecedent = ($pageCourante > 1) ? $pageCourante - 1 : $pageCourante;
                    $pageSuivant = ($pageCourante < $totalPage) ? $pageCourante + 1 : $totalPage;
                } else {
                    $pageCourante = 1;
                    $pagePrecedent = 1;
                    $pageSuivant = $totalPage > 1 ? 2 : 1;
                }
                $depart = ($pageCourante - 1) * $postParPage;
                Post::afficherBlog($depart, $postParPage, $sql);
                $temp = "&Search=";
                $temp .= isset($Search) ? $Search : "";
                $pagePrecedent .= isset($Search) ? $temp : "";
                $pageSuivant .= isset($Search) ? $temp : "";
                ?>

                <div class="uv_pagination_outer_wrap">
                    <ul>
                        <li><a href=<?= "blog.php?page=" . $pagePrecedent ?>><i class="fa fa-angle-double-left"></i></a></li>
                        <?php
                        for ($i = 1; $i <= $totalPage; $i++) {
                            $page = $i;
                            $page .= isset($Search) ? $temp : "";
                            ?>
                        <li class=<?= ($i == $pageCourante) ? "active" : "" ?>><a href=<?= "blog.php?page=" . $page ?>><?= $i ?></a></li>
                        <?php
                        } ?>
                        <li><a href=<?= "blog.php?page=" . $pageSuivant ?>><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>

            </div>

            <div class="col-sm-4 uv-sidebar">
                <div class="uv-widget">
                    <div class="uv-newsletter">
                        <form method="get" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" lpformnum="2" _lpchecked="1">
                            <input type="text" class="form-control" placeholder="What you are looking for?" name="Search">
                            <!-- <input type="submit" value="Rechercher" class="btn btn-fill btn-block" >  -->

                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
              
                <div class="uv-widget">
                    <div class="widget-title">
                        <h4>Les plus populaires</h4>
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
                        <h4>Commentaires récents
                        </h4>
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
<!-- SELECTIZE-->
<script src="assets/plugins/js/standalone/selectize.js"></script>
<!-- isotope js-->
<script src="assets/plugins/js/isotope.pkgd.js"></script>
<script src="assets/plugins/js/packery-mode.pkgd.js"></script>
<script src="assets/plugins/js/jquery.inview.min.js"></script>
<script src="assets/plugins/js/progressbar.min.js"></script>

<!-- init -->
<script src="assets/js/init.js"></script>
<script>
    $(function() {

        // $("#Search").keyup(function(e) {
        //     $.ajax({
        //         type: "get",
        //         data: {
        //             "Search": "manger",

        //         },
        //         // cache: false,
        //         // processData: false,
        //         // contentType: false,
        //         success: function(data) {
        //                 console.log(data);
        //         }
        //     });

        // });
    })
</script>
</body>

</html>