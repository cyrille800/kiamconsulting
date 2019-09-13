<?php
include 'header.php';
require_once "../../entities/class_post.php";
?>
<!--
        |========================
        |   SLIDER CONTENT
        |========================
        -->
<section class="header-slider header-slider-preloader" id="header-slider">
    <div class="animation-slides owl-carousel owl-theme" id="animation-slide">
        <!--Slide 1-->
        <div style="background-image:url(assets/images/home2.jpg)" class="item">
            <div class="slide-table">
                <div class="slide-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-xs-12">
                                <div class="slide-text">
                                    <span>Assistance médicale assurée </span>
                                    <h1>MEILLEURES <br> SOLUTIONS SANITAIRES </h1>
                                    <p>Miker Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="slide-buttons">
                                        <?php 
                                        if(!isset($_SESSION["id"]))
                                        {
                                            ?>
                                              <a href="../login/login-reg.php" class="slide-btn btn btn-base">Se connecter</a>
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
        </div>

        <!--Slide 2-->
        <div style="background-image:url(assets/images/home3.jpg)" class="item">
            <div class="slide-table">
                <div class="slide-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slide-text">
                                    <span>meilleurs sites touristiques</span>
                                    <h1>VISITEZ LA TUNISIE </h1>
                                    <p>Miker Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    <div class="slide-buttons">
                                    <?php 
                                        if(!isset($_SESSION["id"]))
                                        {
                                            ?>
                                              <a href="../login/login-reg.php" class="slide-btn btn btn-base">Se connecter</a>
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
        </div>

        <!--Slide 3-->
        <div style="background-image:url(assets/images/header-bg-1.jpg)" class="item">
            <div class="slide-table">
                <div class="slide-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slide-text">
                                    <span> Education Septembre 2019</span>
                                    <h1>ÊTES VOUS PRÊTS <br> A POSTULER?</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore</p>
                                    <div class="slide-buttons">
                                    <?php 
                                        if(!isset($_SESSION["id"]))
                                        {
                                            ?>
                                              <a href="../login/login-reg.php" class="slide-btn btn btn-base">Se connecter</a>
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
        </div>

    </div>

    <!-- Preloader -->
    <div class="slider_preloader">
        <div class="slider_preloader_status">&nbsp;</div>
    </div>
</section>


<!--
        |========================
        |      Service
        |========================
        -->
<section class="uv-feature bg-2">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-4">
                <div class="uv-join-tagline wow fadeInRight" data-wow-delay="0.2s">
                    <h2><b>KIAM</b>CONSULTING</h2>
                    <?php 
                    if (isset($_SESSION["id"])) {
                        $lien="../Backoffice/client/index.php";
                    }
                    else $lien="../login/login-reg.php";
                    ?>
                    <a href=<?=$lien?> class="btn btn-base">Postuler<i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="uv-featured-icon wow fadeIn" data-wow-delay="0.2s">
                    <div class="row">
                        <ul>
                            <li class="col-sm-3 col-xs-6"><i class="fa flaticon-mortarboard-1"></i><span>Université Ouverte
                                </span></li>
                            <li class="col-sm-3 col-xs-6"><i class="fa flaticon-monitor"></i><span>Education Digitale</span></li>
                            <li class="col-sm-3 col-xs-6"><i class="fa flaticon-light-bulb "></i><span>Soins médicaux</span></li>
                            <li class="col-sm-3 col-xs-6"><i class="fa flaticon-open-book"></i><span>Tourisme</span></li>
                        </ul>
                    </div>
                    <h5>Notre slogan </h5>
                </div>
                <div class="featured-content">
                    <div class="row">
                        <div class="col-sm-6 wow fadeInRight" data-wow-delay="0.4s">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                        </div>
                        <div class="col-sm-6 wow fadeInLeft" data-wow-delay="0.4s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation dolore eu fugiat nulla pariatur. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
        |========================
        | About
        |========================
        -->
<section class="uv-feature-2">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-4 wow fadeInUp">
                <div class="uv-featured-post-title" data-wow-delay="0.2s">
                    <h4>Etudes En Tunisie</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="featured-post-inner uv-hover-style">
                    <img src="assets/images/e1.jpg" alt="" class="img-responsive">
                    <div class="uv-post-inner-content">
                        <h6>
                            Parmi les  meilleurs du maghreb</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                            incididunt ut labore et.dolore magna aliqua.</p>
                        <a href="about.php" class="btn btn-base">Lire Plus</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="uv-featured-post-title">
                    <h4>Se Soigner En Tunisie</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="featured-post-inner uv-hover-style">
                    <img src="assets/images/image.jpg" alt="" class="img-responsive">
                    <div class="uv-post-inner-content">
                        <h6>La Tunisie une référence pour les soins médicaux</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                            incididunt ut labore et.dolore magna aliqua.</p>
                        <a href="about.php" class="btn btn-base">Lire Plus</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="uv-featured-post-title">
                    <h4>Visiter la Tunisie</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="featured-post-inner uv-hover-style">
                    <img src="assets/images/149.jpg" alt="" class="img-responsive">
                    <div class="uv-post-inner-content">
                        <h6>Des sites archélogiques et pittoresques </h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                            incididunt ut labore et.dolore magna aliqua.</p>
                        <a href="Tunisie.php" class="btn btn-base">Lire Plus</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--
        |========================
        |  Join
        |========================
        -->
<section class="uv-join bg-2">
    <div class="container">
        <div class="section-separator">
            <div class="uv-join-inner image-bg" style="background-image: url(assets/images/join-bg.jpg);">
                <div class="join-content wow fadeIn" data-wow-delay="0.2s">
                    <span>Cliquer pour postuler maintenant</span>
                    <h3>Les inscriptions continuent</h3>
                    <div class="join-btn">
                        <a href="<?= $lien ?>" class="btn btn-base">Postuler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
        |========================
        |      Course
        |========================
        -->
<section class="uv-course image-bg" style="background-image: url(assets/images/course-bg.jpg);">
    <div class="overlay">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                    <h2>François Coppée</h2>
                    <span>“Un bon consultant c'est quelqu'un qui regarde la montre de son client pour lui donner l'heure.”</span>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="uv-event">
    <div class="container">
        <div class="row section-separator">
            <div class="section-title col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                <h2>Nos Qualités</h2>
                <span>ce qui fait notre force</span>
                <hr class="uv-hr">
                <!-- <a href="" class="btn btn-base view-full-event"> View All</a> -->
            </div>
            <div class="uv-each-events col-xs-12">
                <ul>
                    <!-- Event list-->
                    <li class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="col-sm-3">
                            <div class="uv-event-date">
                                <h3>1</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="uv-event-content">
                                <a href="">
                                    <h4>première qualité</h4>
                                </a>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                                    auctor a ornare odio. Sed non mauris itae erat conuat</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img src="assets/images/ev1.jpg" alt="" class="img-responsive">
                        </div>
                    </li>
                    <!-- Event list-->
                    <li class="wow fadeInUp" data-wow-delay="0.4s">
                        <div class="col-sm-3">
                            <div class="uv-event-date">
                                <h3>2</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="uv-event-content">
                                <a href="">
                                    <h4>Seconde qualité</h4>
                                </a>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                                    auctor a ornare odio. Sed non mauris itae erat conuat</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img src="assets/images/ev2.jpg" alt="" class="img-responsive">
                        </div>
                    </li>
                    <!-- Event list-->
                    <li class="wow fadeInUp" data-wow-delay="0.6s">
                        <div class="col-sm-3">
                            <div class="uv-event-date">
                                <h3>3</h3>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="uv-event-content">
                                <a href="">
                                    <h4>Troisème qualité</h4>
                                </a>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                                    auctor a ornare odio. Sed non mauris itae erat conuat</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img src="assets/images/ev3.jpg" alt="" class="img-responsive">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--
        |========================
        |  video
        |========================
        -->
<section class="uv-video image-bg" style="background-image: url(assets/images/SidiBousaid2.jpg);">
    <div class="overlay">
        <div class="container">
            <div class="row section-separator wow fadeIn" data-wow-delay="0.2s">
                <h2>Etudier en Tunisie</h2>
                <div class="button">
                    <a data-fancybox href="https://www.youtube.com/watch?v=99WrONXC3Oo"><i class="fa flaticon-play-button"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
        |========================
        |  blog 1
        |========================
        -->
<section class="uv-blog">
    <div class="container">
        <div class="row section-separator">
            <div class="section-title wow fadeIn col-xs-12" data-wow-delay="0.2s">
                <h2>Blog Posts</h2>
                <span>Education blog to feed your brain</span>
                <hr class="uv-hr">
                <a href="blog.php" class="btn btn-base view-full-event">Tout voir</a>
            </div>
            <div class="each-blogs col-xs-12 wow fadeIn" data-wow-delay="0.3s" id="uv-blog-carousel">
               <?php Post::afficherPostAccueil(); ?>
              
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
                                                    <h3>Lorem ipsum</h3>
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
                                                    <h3>Lorem ipsum</h3>
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
                                                    <h3>Lorem ipsum</h3>
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
                                                    <h3>Lorem ipsum</h3>
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
<?php include 'footer.php'; ?>


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
<!-- progressbar-->
<script src="assets/plugins/js/progressbar.min.js"></script>
<!-- inview -->
<script src="assets/plugins/js/jquery.inview.min.js"></script>
<!---->

<!-- init -->
<script src="assets/js/init.js"></script>
<script>
$(function(){
    $(".uv-event-content a").click(function (e) { 
        e.preventDefault();
        
    });
    $(".footer-item.uv-program,.footer-item").click(function (e) { 
        e.preventDefault();
    });
})
</script>
</body>

</html>