<?php include 'header.php' ?>

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
                    <h2>A Propos De Nous</h2>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto </span>
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
</section>
<div class="uv-pagination">
    <div class="container">

    </div>
</div>

<div class="uv-single-contest uv-course-details wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="bg_white uv_team_border uv_team_padding default_width mb30">
                <div class="">
                    <div class="col-md-5 padding-left-o">
                        <div class="uv_team_d_img default_width">
                            <img src="assets/images/kiki.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="uv_team_d_outer default_width">
                            <div class="uv_team_d_title">
                                <h4>WILLY KIKI KIAM</h4>
                                <p>profession</p>
                            </div>
                            <div class="uv_team_scl">
                                <ul class="uv_scl_icon">
                                    <li><a class="bg_fb" href="https://www.facebook.com/willykiki.kiam"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="bg_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="bg_gp" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="bg_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="bg_behance" href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a class="bg_vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a class="bg_youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uv_team_d_des default_width">
                            <p class="mb20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur eos, vero ad velit nobis rerum saepe, doloremque
                                illo maiores aliquid perferendis necessitatibus quidem est veritatis nihil ratione eius nam sapiente..
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur eos, vero ad velit nobis rerum saepe, doloremque
                                illo maiores aliquid perferendis necessitatibus quidem est veritatis nihil ratione eius nam sapiente..Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur eos, vero ad velit nobis rerum saepe, doloremque
                                illo maiores aliquid perferendis necessitatibus quidem est veritatis nihil ratione eius nam sapiente..</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur eos, vero ad velit nobis rerum saepe, doloremque
                                illo maiores aliquid perferendis necessitatibus quidem est veritatis nihil ratione eius nam sapiente..
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur eos, vero ad velit nobis rerum saepe, doloremque ente.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur eos, vero ad velit nobis rerum saepe, doloremque
                                illo maiores aliquid perferendis necessitatibus quidem est veritatis nihil ratione eius nam sapiente..</p>
                            <ul>
                                <li>
                                    <div class="uv_contact_icon"><i class="fa fa-phone"></i></div>
                                    <div class="uv_contact_des">
                                        <h6>Phone</h6>
                                        <p>+216 53 936 493</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="uv_contact_icon"><i class="fa fa-clock-o"></i></div>
                                    <div class="uv_contact_des">
                                        <h6>Experience</h6>
                                        <p>06 Ans</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="uv_contact_icon"><i class="fa fa-envelope"></i></div>
                                    <div class="uv_contact_des">
                                        <h6>Email</h6>
                                        <p>kiamconsulting2018@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<section class="it-half-section uv-mission white-bg" id="it-email-marketing">
    <div class="container-half container-half-left image-bg" style="background-image: url(assets/images/m-feature.jpg);"></div>
    <div class="container-half container-half-right gradient-bg"></div>
    <div class="container">
        <div class="row section-separator">
            <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 uv-mission-inner">
                <div class="mission-slide">
                    <div class="uv-mission-item">
                        <span>Lorem ipsum</span>
                        <h3><strong>NOTRE </strong>MISSION</h3>
                        <p>Phasellus nec dolor.Sed ornare semper ipsum. Sed pede orci volutpat
                            sed congue vels gravida non lacus.Vivamus quis sed metus quisque gravida
                            Quisque blandit sem esed erat. Maecenas porttitor neque eu sem. Nullam lectus neque,
                            blandit quis mattis quis varius eu eros. Vivamus ads metus. Mauris at tellus at sapien
                            .</p>
                        <?php
                        if (isset($_SESSION["id"])) {
                            $lien = "../Backoffice/client/index.php";
                        } else $lien = "../login/login-reg.php";
                        ?>
                        <a href=<?= $lien ?> class="btn btn-base">Postuler</a>
                    </div>
                    <div class="uv-mission-item">
                        <span>Lorem ipsum</span>
                        <h3><strong>NOTRE </strong>AUDIENCE</h3>
                        <p>Phasellus nec dolor.Sed ornare semper ipsum. Sed pede orci volutpat
                            sed congue vels gravida non lacus.Vivamus quis sed metus quisque gravida
                            Quisque blandit sem esed erat. Maecenas porttitor neque eu sem. Nullam lectus neque,
                            blandit quis mattis quis varius eu eros. Vivamus ads metus. Mauris at tellus at sapien.</p>

                        <a href=<?= $lien ?> class="btn btn-base">Postuler</a>
                    </div>
                    <div class="uv-mission-item">
                        <span>Lorem ipsum</span>
                        <h3><strong>NOS </strong>REALISATIONS</h3>
                        <p>Phasellus nec dolor.Sed ornare semper ipsum. Sed pede orci volutpat
                            sed congue vels gravida non lacus.Vivamus quis sed metus quisque gravida
                            Quisque blandit sem esed erat. Maecenas porttitor neque eu sem. Nullam lectus neque,
                            blandit quis mattis quis varius eu eros. Vivamus ads metus. Mauris at tellus at sapien.</p>

                        <a href=<?= $lien ?> class="btn btn-base">Postuler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uv-services-feature">
    <div class="container">
        <div class="row section-separator padding-top-none ">
            <div class="uv-services-items">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-list">
                        <div class="uv-service-icon">
                            <i class="fa fa-briefcase alignleft"></i>
                        </div>
                        <p><strong>Etudes</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-list">
                        <div class="uv-service-icon">
                            <i class="fa fa-bullhorn alignleft"></i>
                        </div>
                        <p><strong>Santé</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                        </p>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-list">
                        <div class="uv-service-icon">
                            <i class="fa fa-quora alignleft"></i>
                        </div>
                        <p><strong>Tourisme</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                            Lorem ipsum dolor sit amet, consectetur adipiing elit. Integer lorem quam..
                        </p>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="uv-happy-student">
    <div class="container">
        <div class="row section-separator">
            <div class="section-title col-xs-12 center">
                <h2>Etudiants satisfaits</h2>
                <span>Ce que nos étudiants disent</span>
            </div>
            <div class="uv-happy-student-inner">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="testimonial">
                        <img src="assets/images/t3.jpg" alt="" class="img-circle">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry. </p>
                        <div class="testimonial-meta">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="testimonial">
                        <img src="assets/images/student-1.png" alt="" class="img-circle">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry. </p>
                        <div class="testimonial-meta">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="testimonial">
                        <img src="assets/images/t2.jpg" alt="" class="img-circle">
                        <p>Lorem Ipsum is simply dummy text of the printing and industry. </p>
                        <div class="testimonial-meta">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="uv-student-join">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since
                        the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="button">
                        <a href="" class="btn btn-fill"><i class="fa fa-sign-in"></i> joignez nous ajourd'hui</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uv-our-clients">
    <div class="container">
        <div class="row section-separator">
            <div class="col-xs-12 center section-title">
                <h2>Nos partenaires</h2>
                <span>Parmi les meilleurs du monde professionel et à votre disposition</span>
            </div>
            <div class="clients-logos">
                <div class="col-md-2 col-sm-4">
                    <img src="assets/images/clients-logo/LOGO-SMEDI-2018.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="assets/images/clients-logo/0.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="assets/images/clients-logo/avatar.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="assets/images/clients-logo/xuas_logo.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="assets/images/clients-logo/LOGO-SMEDI-2018.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-2 col-sm-4">
                    <img src="assets/images/clients-logo/LOGO-SMEDI-2018.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="uv-about-inner">
            <div class="container">
                <div class="row ">
                    <div class="uv-about-content overflow">
                        <div class="bg-3 overflow">
                            <div class="col-sm-6 padding-o">
                                <img src="assets/images/girl.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-sm-6">
                                <div class="uv-about-info">
                                    <h4>About Our Journey</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                                    incididunt ut labore et.dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                    <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="uv-about-info">
                                    <h4>Our History & Passion</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                                    incididunt ut labore et.dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                    <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
         -->
<section class="uv-achivement">
    <div class="container">
        <div class="row section-separator">
            <div class="section-title col-xs-12">
                <h2>Nos Réalisations</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing aelit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-xs-12">
                <div class="row">
                    <div class="uv-achivement-circle">
                        <ul>
                            <li class="col-md-3 col-sm-6">
                                <div class="row">
                                    <div class="circles col-sm-6 col-xs-6">
                                        <div class="progress progress-circle" data-progress="45"></div>
                                    </div>
                                    <div class="uv-circle-info col-sm-6 col-xs-6">
                                        <i class="fa flaticon-presentation"></i>
                                        <span>Presentation</span>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="row">
                                    <div class="circles col-sm-6 col-xs-6">
                                        <div class="progress progress-circle" data-progress="99"></div>
                                    </div>
                                    <div class="uv-circle-info col-sm-6 col-xs-6">
                                        <i class="fa flaticon-photo-camera"></i>
                                        <span>Video Lecture</span>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="row">
                                    <div class="circles col-sm-6 col-xs-6">
                                        <div class="progress progress-circle" data-progress="70"></div>
                                    </div>
                                    <div class="uv-circle-info col-sm-6 col-xs-6">
                                        <i class="fa flaticon-diploma-paper-roll"></i>
                                        <span>Alumni</span>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6">
                                <div class="row">
                                    <div class="circles col-sm-6 col-xs-6">
                                        <div class="progress progress-circle" data-progress="65"></div>
                                    </div>
                                    <div class="uv-circle-info col-sm-6 col-xs-6">
                                        <i class="fa flaticon-mortarboard"></i>
                                        <span>Certificates</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="uv-video image-bg" style="background-image: url(assets/images/SadBousaid3.webp);">
    <div class="overlay">
        <div class="container">
            <div class="row section-separator">
                <h2>Visiter la  Tunisie.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit.</p>
                <div class="button">
                    <a data-fancybox href="https://www.youtube.com/watch?v=xfUML-3s7tU"><i class="fa flaticon-play-button"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uv-blog bg-2">
    <div class="container">
        <div class="row section-separator">
            <div class="section-title col-xs-12">
                <h2>Nos Spécialistes</h2>
                <span>Lorem ipsum dolor sit amet consectetur</span>
                <hr class="uv-hr">
            </div>
            <div class="each-blogs col-xs-12" id="uv-blog-carousel">
                <div class="item">
                    <div class="blog-inner">
                        <div class="blog-banner">
                            <img src="assets/images/tc3.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="blog-content">
                            <h4>Lorep ipsum</h4>
                            <div class="blog-schedule">
                                <a href="">
                                    <h4>Lorep ipsum</h4>
                                </a>
                                <span>fonction</span>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-inner">
                        <div class="blog-banner">
                            <img src="assets/images/tc1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="blog-content">
                            <h4>Lorep ipsum</h4>
                            <div class="blog-schedule">
                                <a href="">
                                    <h4>Lorep ipsum</h4>
                                </a>
                                <span>fonction</span>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-inner">
                        <div class="blog-banner">
                            <img src="assets/images/tc2.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="blog-content">
                            <h4>Lorep ipsum</h4>
                            <div class="blog-schedule">
                                <a href="">
                                    <h4>Lorep ipsum</h4>
                                </a>
                                <span>fonction</span>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uv-topics">
    <div class="container">
        <div class="row section-separator">
            <div class="col-xs-12 section-title">
                <h2>FAQ</h2>
            </div>
            <div class="col-xs-12">
                <div id="integration-list" class="uv-accordinaton">
                    <ul>
                        <li>
                            <a class="uv-accordinaton-list">
                                <div class="uv-right-arrow">+</div>
                                <h2>première question?</h2>
                            </a>
                            <div class="uv-accordition-detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a
                                    urna in nunc auctor faucibus vitae et dui. Suspendisse iaculis, tellus non
                                    volutpat volutpat, felis dolor faucibus felis, at iaculis est sem eu dui.
                                    Vivamus erat quam, ultrices eu accumsan non, imperdiet vitae nunc. Ut ultrices volutpat mollis. </p>
                            </div>
                        </li>
                        <li>
                            <a class="uv-accordinaton-list">
                                <div class="uv-right-arrow">+</div>
                                <h2>Seconde question?</h2>
                            </a>
                            <div class="uv-accordition-detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a
                                    urna in nunc auctor faucibus vitae et dui. Suspendisse iaculis, tellus non
                                    volutpat volutpat, felis dolor faucibus felis, at iaculis est sem eu dui.
                                    Vivamus erat quam, ultrices eu accumsan non, imperdiet vitae nunc. Ut ultrices volutpat mollis. </p>
                            </div>
                        </li>
                        <li>
                            <a class="uv-accordinaton-list">
                                <div class="uv-right-arrow">+</div>
                                <h2>Troisième question?</h2>
                            </a>
                            <div class="uv-accordition-detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a
                                    urna in nunc auctor faucibus vitae et dui. Suspendisse iaculis, tellus non
                                    volutpat volutpat, felis dolor faucibus felis, at iaculis est sem eu dui.
                                    Vivamus erat quam, ultrices eu accumsan non, imperdiet vitae nunc. Ut ultrices volutpat mollis. </p>
                            </div>
                        </li>
                        <li>
                            <a class="uv-accordinaton-list">
                                <div class="uv-right-arrow">+</div>
                                <h2>Quatrième question?</h2>
                            </a>
                            <div class="uv-accordition-detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a
                                    urna in nunc auctor faucibus vitae et dui. Suspendisse iaculis, tellus non
                                    volutpat volutpat, felis dolor faucibus felis, at iaculis est sem eu dui.
                                    Vivamus erat quam, ultrices eu accumsan non, imperdiet vitae nunc. Ut ultrices volutpat mollis. </p>
                            </div>
                        </li>
                        <li>
                            <a class="uv-accordinaton-list">
                                <div class="uv-right-arrow">+</div>
                                <h2>Cinquième question?</h2>
                            </a>
                            <div class="uv-accordition-detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a
                                    urna in nunc auctor faucibus vitae et dui. Suspendisse iaculis, tellus non
                                    volutpat volutpat, felis dolor faucibus felis, at iaculis est sem eu dui.
                                    Vivamus erat quam, ultrices eu accumsan non, imperdiet vitae nunc. Ut ultrices volutpat mollis. </p>
                            </div>
                        </li>
                        <li>
                            <a class="uv-accordinaton-list">
                                <div class="uv-right-arrow">+</div>
                                <h2>Titre ou assertion.</h2>
                            </a>
                            <div class="uv-accordition-detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a
                                    urna in nunc auctor faucibus vitae et dui. Suspendisse iaculis, tellus non
                                    volutpat volutpat, felis dolor faucibus felis, at iaculis est sem eu dui.
                                    Vivamus erat quam, ultrices eu accumsan non, imperdiet vitae nunc. Ut ultrices volutpat mollis. </p>
                            </div>
                        </li>
                    </ul>
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
<!--jquery-ui.min-->
<script src="assets/plugins/js/bars.js"></script>
<!--validator -->
<script src="assets/plugins/js/validator.min.js"></script>
<!--smooth scroll-->
<script src="assets/plugins/js/smooth-scroll.js"></script>
<!-- Fancybox js-->
<script src="assets/plugins/js/jquery.fancybox.min.js"></script>
<script src="assets/plugins/js/jquery.matchHeight.js"></script>
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
<script src="assets/js/init.js">


</script>
<script>
    $(function() {
        $(".uv-event-content a").click(function(e) {
            e.preventDefault();
        });
        $(".footer-item.uv-program,.footer-item").click(function(e) {
            e.preventDefault();
        });
        $(".blog-schedule").children("a").click(function(e) {
            e.preventDefault();

        });

    })
</script>
</body>

</html>