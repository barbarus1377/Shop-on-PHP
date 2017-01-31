            <!-- Footer -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">

                    <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                        <a href="#top" class="logo">#VOLGSTORE</a>
                    </div>
                    <!-- End Footer Logo -->

                    <!-- Social Links -->
                    <div class="footer-social-links mb-110 mb-xs-60">
                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <!-- End Social Links -->  

                    <!-- Footer Text -->
                    <div class="footer-text">

                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            &copy;WEGETPAGE
                        </div>
                        <!-- End Copyright -->

                        <div class="footer-made">
                            <p>html-template by  <a href="http://themeforest.net/user/theme-guru/portfolio" target="_blank">&copy; Rhythm 2016</a>.
                                <br>development by <a href="http://wegetpage.ru"> WEGETPAGE 2017.</a></p>
                        </div>

                    </div>
                    <!-- End Footer Text --> 

                </div>


                <!-- Top Link -->
                <div class="local-scroll">
                    <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                </div>
                <!-- End Top Link -->

            </footer>
            <!-- End Foter -->


        </div>
        <!-- End Page Wrap -->


        <!-- JS -->
        <script type="text/javascript" src="/template/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="/template/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="/template/js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="/template/js/SmoothScroll.js"></script>
        <script type="text/javascript" src="/template/js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="/template/js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="/template/js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="/template/js/jquery.countTo.js"></script>
        <script type="text/javascript" src="/template/js/jquery.appear.js"></script>
        <script type="text/javascript" src="/template/js/jquery.sticky.js"></script>
        <script type="text/javascript" src="/template/js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="/template/js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="/template/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="/template/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="/template/js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="/template/js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="/template/js/gmap3.min.js"></script>
        <script type="text/javascript" src="/template/js/wow.min.js"></script>
        <script type="text/javascript" src="/template/js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="/template/js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="/template/js/all.js"></script>
        <script type="text/javascript" src="/template/js/contact-form.js"></script>
        <script type="text/javascript" src="/template/js/jquery.ajaxchimp.min.js"></script>        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
        <script>
            $(document).ready(function(){
                $(".add-to-cart").click(function () {
                    var id = $(this).attr("data-id");
                    $.post("/cart/addAjax/"+id, {}, function (data){
                        $("#cart-count").html(data);
                    });
                    return false;
                });    
            });
        </script>
    </body>
</html>
