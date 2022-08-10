<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

?>
<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Bài Viết Gần Đây</h3>
    <div class="media post_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/post_1.png" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>From life was you fish...</h3>
            </a>
            <p>January 12, 2019</p>
        </div>
    </div>
    <div class="media post_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/post_2.png" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>The Amazing Hubble</h3>
            </a>
            <p>02 Hours ago</p>
        </div>
    </div>
    <div class="media post_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/post_3.png" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>Astronomy Or Astrology</h3>
            </a>
            <p>03 Hours ago</p>
        </div>
    </div>
    <div class="media post_item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post/post_4.png" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>Asteroids telescope</h3>
            </a>
            <p>01 Hours ago</p>
        </div>
    </div>
</aside>