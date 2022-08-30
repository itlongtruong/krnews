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
<?php get_template_part('template-parts/content/partner-news-hot'); ?>

<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="main--content ptop--30 ">
            <?php get_template_part('template-parts/content/partner-header-home'); ?>
        </div>

        <?php get_template_part('template-parts/content/partner-category-home'); ?>

        <div class="row" style="transform: none;">
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 189.6px; top: 0px;">
                    <div class="row">

                        <?php get_template_part('template-parts/home/partner-thoi-su'); ?>

                        <?php get_template_part('template-parts/home/partner-tin-krong-no'); ?>
                        <!-- <div class="col-md-12 ptop--30 pbottom--30">
                            <div class="ad--space"> <a href="#"> <img src="img/ads-img/ad-728x90-01.jpg" alt="" class="center-block" data-rjs="2" data-rjs-processed="true"> </a> </div>
                        </div> -->
                        <?php get_template_part('template-parts/home/partner-gia-ca'); ?>
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
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Kết nối với chúng tôi</h2>
                            <i class="icon fa fa-share-alt"></i>
                        </div>
                        <!-- Social Widget Start -->
                        <div class="social--widget style--2">
                            <ul class="nav row gutter--20">
                                <li class="col-md-12 facebook">
                                    <a href="https://www.facebook.com/KRNews.TinTucKrongNo">
                                        <span class="icon">
                                            <i class="fa fa-facebook"></i>
                                            <span>Share</span>
                                        </span>
                                        <span class="text">
                                            <span>Facebook</span>
                                            <span>KRNews - Krông Nô News</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Social Widget End -->
                    </div>
                    <iframe style="width:1160px; height:660px; max-width:100%; border:0px;" src="https://cuahangbaoholaodong.com/11a/" title="TẾT NGUYÊN ĐÁN 2023" allowfullscreen="allowfullscreen" scrolling="no"></iframe>

                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Thời Tiết</h2>

                        </div>
                        <div class="social--widget style--1">
                            <iframe src="https://thoitiet.vn/embed/mlpbipguvkp?days=3&hC=%23ffffff&hB=%23119ee6&tC=%23848484&bC=%23119ee6&lC=%23dddddd" id="widgeturl" width="100%" height="297" scrolling="no" frameborder="0" allowtransparency="true" style="border:none;overflow:hidden;"></iframe><!-- End Widget -->
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Giá Cả Hôm Nay: <?php $current_date = current_datetime();
                                                            echo $current_date->format('d/m/Y'); ?></h2>
                            <i class="icon fa fa-share-alt"></i>
                        </div>
                        <div class="social--widget style--1">
                            <iframe frameborder="0" width="100%" height="370px" src="https://webtygia.com/api/gia-ca-thi-truong?bgheader=119ee6&colorheader=ffffff&padding=5&fontsize=15&border=0&hienthi=ca-phe&"></iframe>
                            <iframe frameborder="0" width="100%" height="450px" src="https://webtygia.com/api/xang-dau?bgheader=00aced&colorheader=ffffff&padding=5&fontsize=15&&hienthi=trongnuoc&"></iframe>
                        </div>

                    </div>



                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Quảng Cáo</h2>
                            <i class="icon fa fa-bullhorn"></i>
                        </div>

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
                        <?php get_template_part('template-parts/home/partner-cong-nghe'); ?>
                        <?php get_template_part('template-parts/home/partner-giao-duc'); ?>
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
                            <h2 class="h4">TỈ SUẤT GỬI NGÂN HÀNG</span></h2>
                        </div>
                        <div class="list--widget list--widget-1" data-ajax-content="outer">
                            <div class="post--items post--items-3">
                                <iframe frameborder="0" width="100%" height="400px" src="https://webtygia.com/api/laisuat?bgheader=119ee6&colorheader=ffffff&padding=5&fontsize=13&hienthi=BIDV,MBBank,Sacombank,Techcombank,Vietcombank,Agribank,DongA&"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget--title" data-ajax="tab">
                            <h2 class="h4">Xem nhiều nhất</h2>
                        </div>
                        <div class="list--widget list--widget-1" data-ajax-content="outer">
                            <div class="post--items post--items-3">
                                <ul class="nav" data-ajax-content="inner">
                                    <?php
                                    $wp_query = new WP_Query(array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 4,
                                        'meta_key'          =>  'post_views_count',
                                        'orderby'           =>  'meta_value_num',
                                        'paged' =>  get_query_var('paged')
                                    ));
                                    ?>
                                    <?php if ($wp_query->have_posts()) : ?>
                                        <?php while ($wp_query->have_posts()) : $wp_query->the_post();
                                            $post_id = get_the_ID();
                                        ?>
                                            <li>
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="<?php the_permalink(); ?>" class="thumb"><img height="75px" src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a></li>
                                                                <li><a href="<?php the_permalink(); ?>"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date)) ?>"><?php echo date('d/m/Y', strtotime($post->post_date)) ?></time></a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="<?php the_permalink(); ?>" class="btn-link"><?php the_title(); ?></a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        <?php endwhile; ?>
                                    <?php endif; ?>


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