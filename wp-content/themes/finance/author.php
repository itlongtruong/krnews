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
$iduser = get_queried_object_id();

get_the_author_meta( 'nicename', $iduser );
$wp_query = new WP_Query(array(
    'post_type'        => 'danh-muc',
    'author' => $iduser,
    'posts_per_page' => 2,
    'paged' =>  get_query_var('paged'),


));

?>
<?php get_template_part('template-parts/content/partner-news-hot'); ?>
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo home_url(); ?>/" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
            <li class="active"><span> <?php echo get_the_author_meta( 'display_name', $iduser ); ?> </span></li>
        </ul>
    </div>
</div>

<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row" style="transform: none;">
            <div class="main--content col-md-8 col-sm-7" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 189.6px;">
                <div class="page--title ptop--30"> <h2 class="h2">Tác Giả: <?php echo get_the_author_meta( 'display_name', $iduser ); ?></h2> </div>
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
                                                            <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a></li>
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