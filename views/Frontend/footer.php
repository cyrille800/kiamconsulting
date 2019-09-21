<footer class="uv-footer footer-bg section-separator">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="footer-item">
                    <h6>Contact</h6>
                    <address>Avenue 18 Janvier Ariana Centre Escalier Bureau 408 C</address>
                    <ul>
                        <li><a href=""><i class="fa fa-phone"></i>+237 694 30 34 23</a></li>
                        <li><a href=""><i class="fa fa-phone"></i>+216 53 936 493</a></li>
                        <li><a href=""><i class="fa fa-envelope-o"></i>kiamconsulting2018@gmail.com</a></li>
                    </ul>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/etudetunisieafrique/"><i class="fa fa-facebook"></i>kiam consulting</a></li>

                        <!-- <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="footer-item uv-program">
                    <h6>Nos programmes</h6>
                    <ul>
                        <li><a href="">premier programme</a></li>
                        <li><a href="">Second programme</a></li>
                        <li><a href="">Troisième programme</a></li>
                        <li><a href="">Quatrième programme</a></li>
                        <li><a href="">Cinquième programme</a></li>
                        <li><a href="">Sixième programme</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="
                        ">
                    <h6>Nos ressources </h6>
                    <ul>
                        <li><a href="">Ressources pour étudiants</a></li>
                        <li><a href="">développement de carrière</a></li>
                        <li><a href="">Technologie</a></li>
                        <li><a href="">Diversité et accès</a></li>
                        <li><a href="">Dining Services</a></li>
                        <li><a href="">Logement et vie en résidence</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="footer-item">
                    <h6>Newsletter</h6>
                    <p>Entrez votre email et nous vous enverrons plus d'informations sur les cours et les bourses.</p>
                    <form class="uv-form footer-form">
                        <div class="form-group relative">
                            <div class="relative">
                                <input type="text" class="form-control" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="footer-subs-btn">
                            <button type="submit" class="btn btn-base" value="subscribe">Souscire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr class="f-hr">
        <div class="row">
            <div class="uv-copyright center wow fadeInUp" data-wow-delay="0.5s">
                <p> kiam consulting à votre service.</p>
            </div>
        </div>
    </div>
</footer>
<script src="assets/plugins/js/jquery-1.11.3.min.js"></script>
<script>
    var sPath = window.location.pathname;
    var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
    $(".dropdown.xt-drop-nav a").each(function(index, element) {
        if ($(this).attr("href")==sPage) {
            $(this).css("color", "#2D89AB");
        }
    });
</script>