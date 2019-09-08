<?php
include 'header.php';
require_once "../../entities/class_client.php";
?>

<section class="uv-map">
    <div id="map">
    </div>
</section>

<section class="uv-contact">
    <div class="container">
        <div class="row section-separator">
            <div class="col-md-9 col-sm-12 col-xs-12 content-widget">
                <div class="col-xs-12 widget-title">
                    <h4>Envoyer un Message</h4>

                    <hr class="uv-hr">
                </div>
                <form id="contactForm" class="single-form quate-form" data-toggle="validator" method="post" >
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <?php
                    if (!isset($_SESSION["id"])) {
                        ?>
                        <div class="col-md-4">
                            <input class="contact-name form-control" id="name" name="firstName" type="text" placeholder="Prénom" required>
                            <input class="contact-email form-control" id="L_name" name="lastName" type="text" placeholder="Nom" required>
                            <input class="contact-subject form-control" id="email" name="mail" type="text" placeholder="Mail" required>
                        </div>
                    <?php   }
                    ?>
                    <div class="col-sm-12 col-md-8">
                        <textarea class="contact-message form-control" id="message" name="message" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn btn-fill">Envoyer <i class="icon icons8-advance" id="form-submit"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 content-widget uv-contact-details-1">
                <div class="widget-title">
                    <h4>Contact </h4>
                    <hr class="uv-hr">
                </div>
                <div class="contact-list">
                    <ul class="contact-details">
                        <li><i class="fa fa-link"></i> <a href="#">www.kiamconsulting.com</a></li>
                        <li><i class="fa fa-envelope"></i> <a style="font-size:15px;" href="mailto:info@yoursite.com">kiamconsulting2018@gmail.com</a></li>
                        <li><i class="fa fa-phone"></i> +237 694 30 34 23</li>
                        <li><i class="fa fa-fax"></i> +216 53 936 493</li>
                        <li><i class="fa fa-home"></i> Avenue 18 Janvier Ariana Centre Escalier Bureau 408 C</li>
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
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>



<!-- init -->
<script src="assets/js/init.js"></script>
<script>
    $(".contact-details").find("a").click(function (e) { 
        e.preventDefault();
    }); 
    $.validator.setDefaults({
        errorClass: 'error',
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
    var isOneFieldEmpty = false;
    var submit = false;

    $("#contactForm").validate({
        onkeyup: (element) => {
            $(element).valid();
        },
        rules: {
            mail: {
                required: true,
                email: true,
            },
            firstName: {
                required: true,
            },
            lastName: {
                required: true,
            },
            message: {
                required: true,
            }

        },
        messages: {
            mail: {
                required: 'ce champ est requis.',
                email:"svp entrer une adresse valide",
            },
            firstName: {
                required: 'ce champ est requis',
            },
            lastName: {
                required: 'ce champ est requis',
            },
            message: {
                required: 'ce champ est requis',
            },
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "../../entities/client.php",
                data: $("#contactForm").serialize() + "&operation=envoyerMessage&repondu=non",
                success: function(data) {
                    alert(data);
                    swal.fire({
                            title: 'Email!',
                            type: 'success',
                            text: 'message envoyé',
                            button: {
                                text: "OK",
                                value: true,
                                visible: true,
                                className: "btn btn-primary",
                            }
                        })
                    setTimeout(() => {
                     window.location.href = "index.php";
                    }, 3000);
                }
            })
            .fail(function(){
                alert("cela n'a pas marche");
            })
            return false;
        }

    })
</script>

</body>

</html>