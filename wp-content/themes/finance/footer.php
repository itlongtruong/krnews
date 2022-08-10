<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

?>

 <footer class="footer--section">
    <!-- Footer Widgets Start -->
    <div class="footer--widgets pd--30-0 bg--color-2">
        <div class="container">
            <div class="row AdjustRow">
                <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">About Us</h2>

                            <i class="icon fa fa-exclamation"></i>
                        </div>

                        <!-- About Widget Start -->
                        <div class="about--widget">
                            <div class="content">
                                <p>19TH1, Khoa Công nghệ thông tin, trường Đại học An Giang.</p>
                            </div>

                            <div class="action">
                                <a href="#" class="btn-link"><i class="fa flm fa-angle-double-right"></i></a>
                            </div>

                            <ul class="nav">
                                <li>
                                    <i class="fa fa-map"></i>
                                    <span>18 Ung Văn Khiêm, phường Đông Xuyên, tp.Long Xuyên, An Giang.</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="mailto:example@example.com">19th1@student.agu.edu.vn</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+123456789">+123 456 (789)</a>
                                </li>
                            </ul>
                        </div>
                        <!-- About Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Usefull Info Links</h2>

                            <i class="icon fa fa-expand"></i>
                        </div>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <ul class="nav">
                                <li><a href="#" class="fa-angle-right">Gadgets</a></li>
                                <li><a href="#" class="fa-angle-right">Shop</a></li>
                                <li><a href="#" class="fa-angle-right">Term and Conditions</a></li>
                                <li><a href="#" class="fa-angle-right">Forums</a></li>
                                <li><a href="#" class="fa-angle-right">Top News of This Week</a></li>
                                <li><a href="#" class="fa-angle-right">Special Recipes</a></li>
                                <li><a href="#" class="fa-angle-right">Sign Up</a></li>
                            </ul>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Advertisements</h2>

                            <i class="icon fa fa-bullhorn"></i>
                        </div>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <ul class="nav">
                                <li><a href="#" class="fa-angle-right">Post an Add</a></li>
                                <li><a href="#" class="fa-angle-right">Adds Renew</a></li>
                                <li><a href="#" class="fa-angle-right">Price of Advertisements</a></li>
                                <li><a href="#" class="fa-angle-right">Adds Closed</a></li>
                                <li><a href="#" class="fa-angle-right">Monthly or Yearly</a></li>
                                <li><a href="#" class="fa-angle-right">Trial Adds</a></li>
                                <li><a href="#" class="fa-angle-right">Add Making</a></li>
                            </ul>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Career</h2>

                            <i class="icon fa fa-user-o"></i>
                        </div>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <ul class="nav">
                                <li><a href="#" class="fa-angle-right">Available Post</a></li>
                                <li><a href="#" class="fa-angle-right">Career Details</a></li>
                                <li><a href="#" class="fa-angle-right">How to Apply?</a></li>
                                <li><a href="#" class="fa-angle-right">Freelence Job</a></li>
                                <li><a href="#" class="fa-angle-right">Be a Member KCNews</a></li>
                                <li><a href="#" class="fa-angle-right">Apply Now</a></li>
                                <li><a href="#" class="fa-angle-right">Send Your Resume</a></li>
                            </ul>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widgets End -->

    <!-- Footer Copyright Start -->
    <div class="footer--copyright bg--color-3">
        <div class="social--bg bg--color-1"></div>

        <div class="container">
            <p class="text float--left">&copy; 2022 phát triển bởi <a href="#">KCNEWS</a>. All Rights Reserved.</p>

            <ul class="nav social float--right">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            </ul>

            <ul class="nav links float--right">
                <li><a href="#">Home</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Support</a></li>
            </ul>
        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>

</div>



 <!-- ==== jQuery Library ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>

 <!-- ==== Bootstrap Framework ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

 <!-- ==== StickyJS Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sticky.min.js"></script>

 <!-- ==== HoverIntent Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.hoverIntent.min.js"></script>

 <!-- ==== Marquee Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.marquee.min.js"></script>

 <!-- ==== Validation Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validate.min.js"></script>

 <!-- ==== Isotope Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.min.js"></script>

 <!-- ==== Resize Sensor Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/resizesensor.min.js"></script>

 <!-- ==== Sticky Sidebar Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theia-sticky-sidebar.min.js"></script>

 <!-- ==== Zoom Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.zoom.min.js"></script>

 <!-- ==== Bar Rating Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.barrating.min.js"></script>

 <!-- ==== Countdown Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.countdown.min.js"></script>

 <!-- ==== RetinaJS Plugin ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/retina.min.js"></script>

 <!-- ==== Google Map API ==== -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>

 <!-- ==== Main JavaScript ==== -->
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<!-- Footer Section End -->


</body>
</html>