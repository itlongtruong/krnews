<?php

/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

get_header();
?>

<!-- Posts Filter Bar End -->

<!-- News Ticker Start -->


<?php get_template_part('template-parts/content/partner-news-hot'); ?>

<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="main--content ptop--30 ">
            <?php
            echo do_shortcode('[smartslider3 slider="2"]');
            ?>
        </div>

        <?php get_template_part('template-parts/content/partner-category-home'); ?>

        <div class="row" style="transform: none;">
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 189.6px; top: 0px;">
                    <div class="row">

                        <?php get_template_part('template-parts/home/partner-tin-tuc'); ?>

                        <?php get_template_part('template-parts/home/partner-su-kien'); ?>
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <div class="ad--space"> <a href="#"> <img src="img/ads-img/ad-728x90-01.jpg" alt="" class="center-block" data-rjs="2" data-rjs-processed="true"> </a> </div>
                        </div>
                        <?php get_template_part('template-parts/home/partner-bat-dong-san'); ?>
                        <?php get_template_part('template-parts/home/partner-the-thao'); ?>
                        <?php get_template_part('template-parts/home/partner-xe-co'); ?>
                    </div>
                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 790px; height: 2039px;"></div>
                        </div>
                        <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">


                    <?php
                    $ads = new WP_Query(array(
                        'post_type' => 'quang-cao',
                        'post_status' => 'publish',
                        'orderby' => 'ID',
                        'order' => 'DESC',
                        'posts_per_page' => 2
                    ));
                    $i = 1;
                    while ($ads->have_posts()) : $ads->the_post();
                        $post_id = get_the_ID();
                        $link_dang_ky = get_field_object('link_dang_ky', $post_id);
                    ?>
                        <?php if ($i == 2) {
                        ?>

                            <div class="widget">
                                <div class="ad--widget"> <a href="<?php echo $link_dang_ky['value']; ?> " target="_blank"> <img src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"> </a> </div>
                            </div>

                        <?php } ?>

                    <?php $i++;
                    endwhile;
                    wp_reset_query(); ?>




                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Kết Nối Với Chúng Tôi</h2>
                            <i class="icon fa fa-share-alt"></i>
                        </div>
                        <div class="social--widget style--1">
                            <ul class="nav">
                                <li class="facebook"> <a href="#"> <span class="icon"><i class="fa fa-facebook-f"></i></span> <span class="count">521</span> <span class="title">Likes</span> </a> </li>
                                <li class="twitter"> <a href="#"> <span class="icon"><i class="fa fa-twitter"></i></span> <span class="count">3297</span> <span class="title">Followers</span> </a> </li>
                                <li class="google-plus"> <a href="#"> <span class="icon"><i class="fa fa-google-plus"></i></span> <span class="count">596282</span> <span class="title">Followers</span> </a> </li>
                                <li class="rss"> <a href="#"> <span class="icon"><i class="fa fa-rss"></i></span> <span class="count">521</span> <span class="title">Subscriber</span> </a> </li>
                                <li class="vimeo"> <a href="#"> <span class="icon"><i class="fa fa-vimeo"></i></span> <span class="count">3297</span> <span class="title">Followers</span> </a> </li>
                                <li class="youtube"> <a href="#"> <span class="icon"><i class="fa fa-youtube-square"></i></span> <span class="count">596282</span> <span class="title">Subscriber</span> </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Nhận Tin Tức Mới</h2>
                            <i class="icon fa fa-envelope-open-o"></i>
                        </div>
                        <div class="subscribe--widget">
                            <div class="content">
                                <p>Subscribe to our newsletter to get latest news, popular news and exclusive updates.</p>
                            </div>
                            <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax" novalidate="novalidate">
                                <div class="input-group">
                                    <input type="email" name="EMAIL" placeholder="E-mail address" class="form-control" autocomplete="off" required="" aria-required="true">
                                    <div class="input-group-btn"> <button type="submit" class="btn btn-lg btn-default active"><i class="fa fa-paper-plane-o"></i></button> </div>
                                </div>
                                <div class="status"></div>
                            </form>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Advertisement</h2>
                            <i class="icon fa fa-bullhorn"></i>
                        </div>

                        <?php
                        $ads = new WP_Query(array(
                            'post_type' => 'quang-cao',
                            'post_status' => 'publish',
                            'orderby' => 'ID',
                            'order' => 'DESC',
                            'posts_per_page' => 3
                        ));
                        $i = 1;
                        while ($ads->have_posts()) : $ads->the_post();
                            $post_id = get_the_ID();
                            $link_dang_ky = get_field_object('link_dang_ky', $post_id);
                        ?>
                            <?php if ($i == 3) {
                            ?>

                                <div class="widget">
                                    <div class="ad--widget"> <a href="<?php echo $link_dang_ky['value']; ?> " target="_blank"> <img src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"> </a> </div>
                                </div>

                            <?php } ?>

                        <?php $i++;
                        endwhile;
                        wp_reset_query(); ?>

                    </div>
                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 400px; height: 2060px;"></div>
                        </div>
                        <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/home/partner-du-lich'); ?>
        <?php
        $ads = new WP_Query(array(
            'post_type' => 'quang-cao',
            'post_status' => 'publish',
            'orderby' => 'ID',
            'order' => 'DESC',
            'posts_per_page' => 4
        ));
        $i = 1;
        while ($ads->have_posts()) : $ads->the_post();
            $post_id = get_the_ID();
            $link_dang_ky = get_field_object('link_dang_ky', $post_id);
        ?>
            <?php if ($i == 4) {
            ?>

                <div class="widget">
                    <div class="ad--space pd--30-0"> <a href="<?php echo $link_dang_ky['value']; ?> " target="_blank"> <img class="center-block" src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"> </a> </div>
                </div>

            <?php } ?>

        <?php $i++;
        endwhile;
        wp_reset_query(); ?>



        <div class="row" style="transform: none;">
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 2001px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: absolute; transform: translateY(383.91px); width: 750px; top: 0px;">
                    <div class="row">
                        <?php get_template_part('template-parts/home/partner-thoi-trang'); ?>
                        <?php get_template_part('template-parts/home/partner-suc-khoe'); ?>
                        <?php get_template_part('template-parts/home/partner-am-thuc'); ?>
                        <?php get_template_part('template-parts/home/partner-lam-dep'); ?>
                    </div>
                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 760px; height: 1627px;"></div>
                        </div>
                        <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">

                    <div class="widget">
                        <div class="widget--title" data-ajax="tab">
                            <h2 class="h4">Lựa Chọn Của Biên Tập Viên</h2>
                            <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_editors_choice_widget"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_editors_choice_widget"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                        </div>
                        <div class="list--widget list--widget-1" data-ajax-content="outer">
                            <div class="post--items post--items-3">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/widgets-img/editors-choice-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Ninurta</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/widgets-img/editors-choice-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Orcus</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/widgets-img/editors-choice-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Rahab</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/widgets-img/editors-choice-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Tannin</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 400px; height: 2012px;"></div>
                        </div>
                        <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>