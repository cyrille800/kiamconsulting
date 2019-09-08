<?php include "header.php" ?>

        

        <!--
        |========================
        |   SLIDER CONTENT 
        |========================
        -->
        <section class="uv-subpage-heading image-bg" style="background-image: url(assets/images/header-bg-1.jpg);">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="uv-subhead-content col-xs-12">
                            <h2>Tourisme</h2>
                            <span>La Tunisie une référence touristique</span>
                            <div class="slide-buttons " style="margin-top:50px;">
                            <?php
                        if (!isset($_SESSION["id"])) {
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
        </section>

        <div class="uv-clients-logo bg-4">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title col-xs-12 center">
                        <h2>Tourisme en Tunisie</h2>
                        <span>lorem ipsum sldkfus sdmfk</span>
                    </div>
                </div>
            </div>
        </div>
        <section>

        <div id="elastic_grid_demo"></div>
    </section>
    <!-- <section class="uv-feature-2">
            <div class="container">
                <div class="row section-separator">
                  
                </div>
            </div>
        </section> -->

        <section class="uv-about-inner">
            <div class="container">
                <div class="row ">
                    <div class="uv-about-content overflow">
                        <div class="bg-3 overflow">
                            <div class="col-sm-6 padding-o">
                                <img src="assets/images/donne_tunisine_vergini.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-sm-6">
                                <div class="uv-about-info">
                                    <h4>Au Sujet de La Tunisie</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                                    incididunt ut labore et.dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                    <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="uv-about-info">
                                    <h4>Son Histoire et Sa Passion</h4>
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
   

        <!--
        |========================
        |      Clients logo
        |========================
        -->

        
        <!--
        |========================
        |  Featured courses
        |========================
        -->
       
        
        <!--
        |========================
        |   Course slide
        |========================
        -->
        <section class="uv-course-slide image-bg" style="background-image:url(assets/images/tunisian-flag-2000x1111.jpg);margin-top:30px;">
            <div class="color-overlay-2">
                <div class="container">
                    <div class="row section-separator">
                        <div class="each-inner-top col-xs-12">
                            <h2>Quelques Vidéos Touristiques</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, obcaecati dictaeius?</p>
                        </div>
                        <div class="col-xs-12" id="uv-course-slide">
                            <!--TESTIMONIAL 1 -->
                            <div class="item" >
                                <div class="shadow-effect uv-course-slide-inner">
                                    <div class="image-bg" style="background-image:url(assets/images/SidiBousaid2.jpg)">
                                        <div class="color-overlay-3 each-inner">
                                            <a data-fancybox href="https://www.youtube.com/watch?v=99WrONXC3Oo"><i class="fa flaticon-play-button-1 video-icon"></i></a>
                                            <h3>Visiter la Tunisie 1 </h3>
                                           
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="item" >
                                <div class="shadow-effect uv-course-slide-inner">
                                    <div class="image-bg" style="background-image:url(assets/images/SadBousaid3.webp)">
                                        <div class="color-overlay-3 each-inner">
                                            <a data-fancybox href="https://www.youtube.com/watch?v=xfUML-3s7tU"><i class="fa flaticon-play-button-1 video-icon"></i></a>
                                            <h3>visiter la Tunsisie 2 </h3>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="item" >
                                <div class="shadow-effect uv-course-slide-inner">
                                    <div class="image-bg" style="background-image:url(assets/images/Thalassa-hotel-monastir.jpg)">
                                        <div class="color-overlay-3 each-inner">
                                            <a data-fancybox href="https://www.youtube.com/watch?v=Yh7It8bwFME"><i class="fa flaticon-play-button-1 video-icon"></i></a>
                                            <h3>Visiter la Tunisie 3 </h3>
                                        </div>
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
        |   Blog 2
        |========================
        -->
 
        
        <!--
        |========================
        |  Teacher
        |========================
        -->
    
        <!--
        |========================
        |  footer
        |========================
        -->
        <footer class="uv-footer footer-bg section-separator">
    
        <?php include "footer.php" ?>

        
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
        <!-- plugin name -->
        <script src="assets/plugins/js/progressbar.min.js"></script>
        <!-- plugin name -->
        <script src="assets/plugins/js/jquery.inview.min.js"></script>

        <!-- init -->
        <script src="assets/js/init.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="assets/plugins/js/modernizr.custom.js"></script>
<script src="assets/plugins/js/classie.js"></script>
<!--- uncompress-->

<script type="text/javascript" src="assets/plugins/js/jquery.elastislide.js"></script>
<script type="text/javascript" src="assets/plugins/js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="assets/plugins/js/elastic_grid.js"></script>
<script type="text/javascript">
    $(function(){
        $("#elastic_grid_demo").elastic_grid({
            'showAllText' : 'Tout',
            'filterEffect': 'popup', // moveup, scaleup, fallperspective, fly, flip, helix , popup
            'hoverDirection': true,
            'hoverDelay': 0,
            'hoverInverse': false,
            'expandingSpeed': 500,
            'expandingHeight': 500,
            'items' :
            [
                {
                    'title'         : 'Sousse',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/sousse4.jpg', 'assets/images/small/sousse1.jpg', 'assets/images/small/sousse3.jpg', 'assets/images/small/sousse0.jpg'],
                    'large'         : ['assets/images/large/sousse4.jpg', 'assets/images/large/sousse1.jpg', 'assets/images/large/sousse3.jpg', 'assets/images/large/sousse0.jpg'],
                    'img_title'     : ['jquery elastic grid 1 ', 'jquery elastic grid 2', 'jquery elastic grid 3', 'jquery elastic grid 4', 'jquery elastic grid 5'],
                    'button_list'   :[],
                    'tags'          : ['balnéaire']
                },
                {
                    'title'         : 'djerba',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/djerba0.jpg', 'assets/images/small/djerba2.jpg', 'assets/images/small/djerba3.jpg', 'assets/images/small/djerba4.jpg'],
                    'large'         : ['assets/images/large/djerba0.jpg', 'assets/images/large/djerba2.jpg', 'assets/images/large/djerba3.jpg', 'assets/images/large/djerba4.jpg'],
                    'img_title'     : ['jquery elastic grid 6 ', 'jquery elastic grid 7 ', 'jquery elastic grid 8', 'jquery elastic grid 9', 'jquery elastic grid 9'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['balnéaire']
                },
                {
                    'title'         : 'Nabeul-Hammamet',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/nabeul3.jpg','assets/images/small/nabeul0.jpg', 'assets/images/small/nabeul1.jpg', 'assets/images/small/nabeul4.jpg'],
                    'large'         : ['assets/images/large/nabeul3.jpg','assets/images/large/nabeul0.jpg', 'assets/images/large/nabeul1.jpg', 'assets/images/large/nabeul4.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['balnéaire']
                },
                {
                    'title'         : 'sfax-Monastir',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/sfax0.jpg', 'assets/images/small/sfax1.jpg', 'assets/images/small/sfax2.jpg', 'assets/images/small/sfax3.jpg'],
                    'large'         : ['assets/images/large/sfax0.jpg', 'assets/images/large/sfax1.jpg', 'assets/images/large/sfax2.jpg', 'assets/images/large/sfax3.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['balnéaire']
                },
                {
                    'title'         : 'Yasmine Hammamet',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/hammamet3.jpg','assets/images/small/hammamet1.jpg', 'assets/images/small/hammamet2.jpg', 'assets/images/small/hammamet0.jpg'],
                    'large'         : ['assets/images/large/hammamet3.jpg','assets/images/large/hammamet1.jpg', 'assets/images/large/hammamet2.jpg', 'assets/images/large/hammamet0.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['balnéaire']
                },
                {
                    'title'         : 'kairouan',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/kairouan0.jpg', 'assets/images/small/kairouan1.jpg', 'assets/images/small/kairouan2.jpg',  'assets/images/small/kairouan4.jpg'],
                    'large'         : ['assets/images/large/kairouan0.jpg', 'assets/images/large/kairouan1.jpg', 'assets/images/large/kairouan2.jpg',  'assets/images/large/kairouan4.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['patrimoine unesco']
                },
                {
                    'title'         : 'gafsa',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/gafsa0.jpg', 'assets/images/small/gafsa1.jpg', 'assets/images/small/gafsa2.jpg', 'assets/images/small/gafsa3.jpg'],
                    'large'         : ['assets/images/large/gafsa0.jpg', 'assets/images/large/gafsa1.jpg', 'assets/images/large/gafsa2.jpg', 'assets/images/large/gafsa3.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['saharien']
                },
                {
                    'title'         : 'Dougga / Thugga',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/Dougga-Thugga0.jpg','assets/images/small/Dougga-Thugga1.jpg', 'assets/images/small/Dougga-Thugga2.jpg', 'assets/images/small/Dougga-Thugga3.jpg'],
                    'large'         : ['assets/images/large/Dougga-Thugga0.jpg','assets/images/large/Dougga-Thugga1.jpg', 'assets/images/large/Dougga-Thugga2.jpg', 'assets/images/large/Dougga-Thugga3.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['patrimoine unesco']
                },
                {
                    'title'         : 'nefzaoua Guermessa ksour ksar Ghilane',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/nefzaoua0.jpg','assets/images/small/nefzaoua1.jpg', 'assets/images/small/nefzaoua2.jpg', 'assets/images/small/1nefzaoua3.jpg'],
                    'large'         : ['assets/images/large/nefzaoua0.jpg','assets/images/large/nefzaoua1.jpg', 'assets/images/large/nefzaoua2.jpg', 'assets/images/large/1nefzaoua3.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['saharien']
                },
                {
                    'title'         : 'palmyra',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/palmyra4.jpg', 'assets/images/small/palmyra1.jpg', 'assets/images/small/palmyra2.jpg', 'assets/images/small/palmyra0.jpg'],
                    'large'         : ['assets/images/large/palmyra4.jpg',  'assets/images/large/palmyra1.jpg', 'assets/images/large/palmyra2.jpg', 'assets/images/large/palmyra0.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['patrimoine unesco']
                },
                {
                    'title'         : 'matmata',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/matmata0.jpg', 'assets/images/small/matmata1.jpg', 'assets/images/small/matmata2.jpg', 'assets/images/small/matmata3.jpg'],
                    'large'         : ['assets/images/large/matmata0.jpg', 'assets/images/large/matmata1.jpg', 'assets/images/large/matmata2.jpg', 'assets/images/large/matmata3.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['saharien']
                },
                {
                    'title'         : 'El Jem',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['assets/images/small/El Jem1.jpg','assets/images/small/El Jem0.jpg', 'assets/images/small/El Jem2.jpg', 'assets/images/small/El Jem3.jpg'],
                    'large'         : ['assets/images/large/El Jem1.jpg','assets/images/large/El Jem0.jpg', 'assets/images/large/El Jem2.jpg', 'assets/images/large/El Jem3.jpg'],
                    'img_title'     : ['jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid', 'jquery elastic grid'],
                    'button_list'   :
                    [
                    
                    ],
                    'tags'          : ['patrimoine unesco']
                }

            ]
        });
    });
 
</script>

    </body>
</html>
