<?php

/**
 * Template Name: News hot Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */
get_header();
$category = get_category(get_query_var('cat'));
$cat_id = $category->cat_ID;
$wp_query = new WP_Query(array(
    'post_type'        => 'danh-muc',
    'posts_per_page' => 2,
    'paged' =>  get_query_var('paged'),
    'cat'       => $cat_id

));
$author_id  = get_post_field( 'post_author', get_the_ID() );
//$url = get_author_posts_url(get_the_author_meta('ID'));
//$author = the_author();
?>
<?php get_template_part('template-parts/content/partner-news-hot'); ?>
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo home_url(); ?>/" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
            <li class="active"><span><?php single_cat_title(); ?></span></li>
        </ul>
    </div>
</div>

<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row" style="transform: none;">

            <!-- <div class="main--content">
                <div class="post--items post--items-1 pd--30-0">
                    <div class="row gutter--15">
                        <div class="col-md-3">
                            <div class="row gutter--15">
                                <div class="col-md-12 col-xs-6 col-xxs-12">
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="news-single-v1-boxed.html" class="thumb"><img src="img/entertainment-img/banner-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Shooting</a> <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Corey I. Dean</a></li>
                                                    <li><a href="#">20 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h2 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Lorem Ipsum is simply dummy text of the printing</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-6 hidden-xxs">
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="news-single-v1-boxed.html" class="thumb"><img src="img/entertainment-img/banner-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Lifestyle</a> <a href="#" class="icon"><i class="fa fa-support"></i></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Corey I. Dean</a></li>
                                                    <li><a href="#">20 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h2 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Lorem Ipsum is simply dummy text of the printing</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                            <div class="post--item post--layout-1 post--title-larger">
                                <div class="post--img">
                                    <a href="news-single-v1-boxed.html" class="thumb"><img src="img/entertainment-img/banner-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Festival</a> <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="#">Norma R. Hogan</a></li>
                                            <li><a href="#">20 April 2017</a></li>
                                        </ul>
                                        <div class="title">
                                            <h2 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Siriyan civil war getting righteous indignation and dislike men who are so beguiled and demoralized by the sure.</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row gutter--15">
                                <div class="col-md-12 col-xs-6 col-xxs-12">
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="news-single-v1-boxed.html" class="thumb"><img src="img/entertainment-img/banner-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Games</a> <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Leraje</a></li>
                                                    <li><a href="#">20 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h2 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Lorem Ipsum is simply dummy text of the printing</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-6 hidden-xxs">
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="news-single-v1-boxed.html" class="thumb"><img src="img/entertainment-img/banner-05.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Concert</a> <a href="#" class="icon"><i class="fa fa-book"></i></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">Balam</a></li>
                                                    <li><a href="#">20 April 2017</a></li>
                                                </ul>
                                                <div class="title">
                                                    <h2 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">On the other hand, we denounce with righteous and deby</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="main--content col-md-8 col-sm-7" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 189.6px;">

                    <div class="post--items post--items-5 pd--30-0">
                        <ul class="nav">
                            <?php if ($wp_query->have_posts()) : ?>
                                <?php while ($wp_query->have_posts()) : $wp_query->the_post();
                                    $post_id = get_the_ID();
                                ?>
                                    <li>
                                        <div class="post--item post--title-larger">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="post--img"> <a href="<?php the_permalink(); ?>" class="thumb"><img height="153px" src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat"><?php $category = get_the_category();
                                                                                                                                                                                                                                                                                                echo get_primary_category($category); ?></a> </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a></li>
                                                            <li><a href="#"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date)) ?>"><?php echo date('d/m/Y', strtotime($post->post_date)) ?></time></a></li>
                                                        </ul>
                                                        <div class="title">
                                                            <h3 class="h4"><a href="<?php the_permalink(); ?>" class="btn-link"><?php the_title(); ?></a></h3>
                                                        </div>
                                                    </div>
                                                    <div class="post--content">
                                                        <p><?php the_excerpt(); ?></p>
                                                    </div>
                                                    <div class="post--action"> <a href="<?php the_permalink(); ?>">Đọc Thêm...</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php htmlwp_pagination(); ?>

                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 790px; height: 2921px;"></div>
                        </div>
                        <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <?php get_template_part('template-parts/sidebar/search-sidebar'); ?>
                    <?php get_template_part('template-parts/sidebar/category-sidebar'); ?>

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
                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 400px; height: 3370px;"></div>
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