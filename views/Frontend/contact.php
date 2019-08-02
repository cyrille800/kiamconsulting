<?php include 'header.php' ?>
        
        <section class="uv-map">
            <div id="map">
            </div>
        </section>
        
        <section class="uv-contact">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-md-9 col-sm-12 col-xs-12 content-widget">
                        <div class="col-xs-12 widget-title">
                            <h4>Leave a Message</h4>
                            <hr class="uv-hr">
                        </div>
                        <form id="contactForm" class="single-form quate-form" data-toggle="validator">
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="col-md-4">
                                <input name="name" class="contact-name form-control" id="name" type="text" placeholder="First Name" required>
                                <input name="name" class="contact-email form-control" id="L_name" type="text" placeholder="Last Name" required>
                                <input name="email" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <textarea class="contact-message form-control" id="message" placeholder="Your Message" required></textarea>
                                <button type="submit" class="btn btn-fill">send message <i class="icon icons8-advance" id="form-submit"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 content-widget uv-contact-details-1">
                        <div class="widget-title">
                            <h4>Contact Details</h4>
                            <hr class="uv-hr">
                        </div>
                        <div class="contact-list">
                            <ul class="contact-details">
                                <li><i class="fa fa-link"></i> <a href="#">www.curricular.com</a></li>
                                <li><i class="fa fa-envelope"></i> <a href="mailto:info@yoursite.com">info@curricular.com</a></li>
                                <li><i class="fa fa-phone"></i> +90 123 45 67</li>
                                <li><i class="fa fa-fax"></i> +90 123 45 68</li>
                                <li><i class="fa fa-home"></i> Curricular INC 22 Elizabeth Str. Melbourne. Victoria 8777.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        |===================
        |  footer
        |===================
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
        <script src="assets/plugins/js/jquery.matchHeight.js"></script>
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
       <!-- Map api -->
        <script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCRP2E3BhaVKYs7BvNytBNumU0MBmjhhxc"></script>


        <!-- init -->
        <script src="assets/js/init.js"></script>
        
    </body>
</html>