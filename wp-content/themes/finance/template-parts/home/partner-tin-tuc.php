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

<div class="col-md-6 ptop--30 pbottom--30">
    <div class="post--items-title" data-ajax="tab">
        <h2 class="h4">Tin Tức</h2>
    </div>
    <div class="post--items post--items-2" data-ajax-content="outer">
        <ul class="nav row gutter--15" data-ajax-content="inner">
            <?php
            $tin_tuc = new WP_Query(array(
                'post_type' => 'danh-muc',
                'post_status' => 'publish',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'id',
                        'terms' => '20'
                    )
                ),
                //thay id_của_category bằng id danh mục bạn muốn hiển thị nhé
                'orderby' => 'ID',
                'order' => 'DESC',
                'posts_per_page' => 5
            ));
            ?>
            <?php $i = 1;
            while ($tin_tuc->have_posts()) : $tin_tuc->the_post();
                $post_id = get_the_ID();
            ?>
                <?php if ($i == 1) {
                ?>
                    <li class="col-xs-12">
                        <div class="post--item post--layout-1">
                            <div class="post--img">
                                <a href="<?php the_permalink(); ?>" class="thumb"><img src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat"><?php $category = get_the_category(); echo get_primary_category($category); ?></a> 
                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#"><?php echo get_the_author(); ?></a></li>
                                        <li><a href="#"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date)) ?>"><?php echo date('d/m/Y', strtotime($post->post_date)) ?></time></a></li>
                                    </ul>
                                    <div class="title">
                                        <h3 class="h4"><a href="<?php the_permalink(); ?>" class="btn-link"><?php the_title(); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="col-xs-12">
                        <hr class="divider">
                    </li>
                <?php } else { ?>
                    <li class="col-xs-6">
                        <div class="post--item post--layout-2">
                            <div class="post--img">
                                <a href="<?php the_permalink(); ?>" class="thumb"><img src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#"><?php echo get_the_author(); ?></a></li>
                                        <li><a href="#"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date)) ?>"><?php echo date('d/m/Y', strtotime($post->post_date)) ?></time></a></li>
                                    </ul>
                                    <div class="title">
                                        <h3 class="h4"><a href="<?php the_permalink(); ?>" class="btn-link"><?php the_title(); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php if ($i == 3) {
                    ?>
                        <li class="col-xs-12">
                            <hr class="divider">
                        </li>
                    <?php } ?>
                <?php } ?>

            <?php $i++;
            endwhile;
            wp_reset_query(); ?>
        </ul>
        <div class="preloader bg--color-0--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div>
</div>