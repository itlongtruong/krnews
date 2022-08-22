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

<div class="post--items post--items-1 pd--30-0">
    <div class="row gutter--15">
        <?php
        $tin_tuc = new WP_Query(array(
            'post_type' => 'danh-muc',
            'post_status' => 'publish',
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
                <div class="col-md-6">
                    <div class="post--item post--layout-1 post--title-larger">
                        <div class="post--img">
                            <a href="<?php the_permalink(); ?>" class="thumb"><img height="389px" src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"></a><a href="#" class="cat"><?php $category = get_the_category(); echo get_primary_category($category); ?></a>
                            <div class="post--map">
                            </div>
                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a></li>
                                    <li><a href="<?php the_permalink(); ?>"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date)) ?>"><?php echo date('d/m/Y', strtotime($post->post_date)) ?></time></a></li>
                                </ul>
                                <div class="title">
                                    <h2 class="h4"><a href="<?php the_permalink(); ?>" class="btn-link"><?php the_title(); ?></a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row gutter--15">
                    <?php } else { ?>
                        <div class="col-xs-6 col-xss-12">
                            <div class="post--item post--layout-1 post--title-large">
                                <div class="post--img">
                                    <a href="<?php the_permalink(); ?>" class="thumb"><img height="187px" src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat"><?php $category = get_the_category(); echo get_primary_category($category); ?></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a></li>
                                            <li><a href="<?php the_permalink(); ?>"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date)) ?>"><?php echo date('d/m/Y', strtotime($post->post_date)) ?></time></a></li>
                                        </ul>
                                        <div class="title">
                                            <h2 class="h4"><a href="<?php the_permalink(); ?>" class="btn-link"><?php the_title(); ?></a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                <?php $i++;
            endwhile;
            wp_reset_query(); ?>


                    </div>
                </div>
    </div>
</div>