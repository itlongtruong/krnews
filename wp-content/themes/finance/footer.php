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

    <!-- Footer Widgets End -->
    <div id="backToTop"> <a href="#"><i class="fa fa-angle-double-up"></i></a> </div>
    <!-- Footer Copyright Start -->
    <div class="footer--copyright bg--color-3">
        <div class="social--bg bg--color-1"></div>

        <div class="container">
            <p class="text float--left">&copy; 2022 Phát triển bởi Admin <a href="#">KRNews</a>. All Rights Reserved.</p>

            <ul class="nav social float--right">
                <li><a href="https://www.facebook.com/KRNews.TinTucKrongNo"><i class="fa fa-facebook"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li> -->
            </ul>

            <ul class="nav links float--right">
                <li><a href="<?php echo home_url(); ?>/">Trang Chủ</a></li>
                <li><a href="<?php echo home_url(); ?>/lien-he">Liên Hệ</a></li>
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


<!-- ==== Resize Sensor Plugin ==== -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/resizesensor.min.js"></script>

<!-- ==== Sticky Sidebar Plugin ==== -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/theia-sticky-sidebar.min.js"></script>

<!-- ==== RetinaJS Plugin ==== -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/retina.min.js"></script>

<!-- ==== Main JavaScript ==== -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<!-- Footer Section End -->
<script>
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function startTime() {
        // Lấy Object ngày hiện tại
        var today = new Date();

        // Giờ, phút, giây hiện tại
        var d = today.getDate();
        var thu = today.getDay();
        var month = today.getMonth() + 1;
        var y = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();

        // Chuyển đổi sang dạng 01, 02, 03
        m = checkTime(m);
        s = checkTime(s);
        d = checkTime(d);
        month = checkTime(month);
        const dayname = ['Chủ Nhật', 'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7'];
        // Ghi ra trình duyệt
        document.getElementById('hvn').innerHTML = dayname[thu] + ", Ngày " + d + "/" + month + "/" + y + "  " + h + ":" + m + ":" + s;

        // Dùng hàm setTimeout để thiết lập gọi lại 0.5 giây / lần
        var t = setTimeout(function() {
            startTime();
        }, 500);
    }

    startTime();
</script>
<?php wp_footer(); ?>
</body>

</html>