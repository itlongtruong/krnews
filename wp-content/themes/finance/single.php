<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

get_header();
?>
<?php setPostViews(get_the_ID()); ?>

<?php get_template_part('template-parts/content/partner-news-hot'); ?>
<?php if (have_posts()) the_post(); ?>
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo home_url(); ?>/" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
            <li><a href="#" class="btn-link"><?php $category = get_the_category();
                                                echo get_primary_category($category); ?></a></li>
            <li class="active"><span><?php the_title(); ?></span></li>
        </ul>
    </div>
</div>

<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row" style="transform: none;">
            <div class="main--content col-md-8" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">

                    <div class="post--item post--single post--title-largest pd--30-0">
                        <div class="post--img">
                            <a href="<?php the_permalink(); ?>" class="thumb"><img height="500px" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" data-rjs="2" data-rjs-processed="true"></a>

                        </div>
                        <div class="post--cats">
                            <ul class="nav">
                                <li><span><i class="fa fa-folder-open-o"></i></span></li>
                                <li><a href="#"><?php $category = get_the_category();
                                                echo get_primary_category($category); ?></a></li>
                            </ul>
                        </div>
                        <div class="post--info">
                            <ul class="nav meta">
                                <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a></li>
                                <li><a href="<?php the_permalink(); ?>"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date)) ?>"><?php echo date('d-m-Y H:i:s', strtotime($post->post_date)) ?></time></a></li>
                                <li><span><i class="fa fm fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></span></li>
                                <!-- <li><a href="<?php the_permalink(); ?>"><i class="fa fm fa-comments-o"></i>02</a></li> -->
                            </ul>
                            <div class="title">
                                <h2 class="h4"><?php the_title(); ?></h2>
                            </div>
                        </div>
                        <div class="post--content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>

                    <!-- <div class="ad--space pd--20-0-40"> <a href="#"> <img src="img/ads-img/ad-728x90-02.jpg" alt="" class="center-block" data-rjs="2" data-rjs-processed="true"> </a> </div> -->




                    <div class="post--related ptop--30">
                        <div class="post--items-title" data-ajax="tab">
                            <h2 class="h4">Bài viết liên quan:
                            </h2>

                        </div>
                        <div class="post--items post--items-2" data-ajax-content="outer">
                            <ul class="nav row" data-ajax-content="inner">
                                <?php
                                $categories = get_the_category(get_the_ID());
                                $category_ids = array();
                                foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                                $query = new WP_Query(array(
                                    'post_type'        => 'post',
                                    'showposts'      =>  2,
                                    'post__not_in' => array($post->ID),
                                    'cat'       => $category_ids,
                                ));
                                ?>
                                <?php if ($query->have_posts()) : ?>
                                    <?php while ($query->have_posts()) : $query->the_post();
                                        $post_id = get_the_ID();
                                    ?>
                                        <li class="col-sm-6 pbottom--30">
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="<?php the_permalink(); ?>" class="thumb"><img height="195px" src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat"><?php $category = get_the_category();
                                                                                                                                                                                                                                                                        echo get_primary_category($category); ?></a>
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
                                                <div class="post--content">
                                                    <p> <?php the_excerpt(); ?></p>
                                                </div>
                                                <div class="post--action"> <a href="<?php the_permalink(); ?>">Đọc thêm... </a> </div>
                                            </div>
                                        </li>

                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>

                            </ul>

                        </div>
                    </div>
                    <!-- <div class="comment--list pd--30-0">
                        <div class="post--items-title">
                            <h2 class="h4">03 Comments</h2>
                            <i class="icon fa fa-comments-o"></i>
                        </div>
                        <ul class="comment--items nav">
                            <li>
                                <div class="comment--item clearfix">
                                    <div class="comment--img float--left"> <img src="img/news-single-img/comment-avatar-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"> </div>
                                    <div class="comment--info">
                                        <div class="comment--header clearfix">
                                            <p class="name">Karla Gleichauf</p>
                                            <p class="date">12 May 2017 at 05:28 pm</p>
                                            <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                        </div>
                                        <div class="comment--content">
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="comment--item clearfix">
                                    <div class="comment--img float--left"> <img src="img/news-single-img/comment-avatar-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"> </div>
                                    <div class="comment--info">
                                        <div class="comment--header clearfix">
                                            <p class="name">M Shyamalan</p>
                                            <p class="date">12 May 2017 at 05:28 pm</p>
                                            <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                        </div>
                                        <div class="comment--content">
                                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="comment--items nav">
                                    <li>
                                        <div class="comment--item clearfix">
                                            <div class="comment--img float--left"> <img src="img/news-single-img/comment-avatar-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"> </div>
                                            <div class="comment--info">
                                                <div class="comment--header clearfix">
                                                    <p class="name">Liz Montano</p>
                                                    <p class="date">12 May 2017 at 05:28 pm</p>
                                                    <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                                </div>
                                                <div class="comment--content">
                                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div> -->
                    <!-- <div class="comment--form pd--30-0">
                        <div class="post--items-title">
                            <h2 class="h4">Leave A Comment</h2>
                            <i class="icon fa fa-pencil-square-o"></i>
                        </div>
                        <div class="comment-respond">
                            <form action="#" data-form="validate" novalidate="novalidate">
                                <p>Don’t worry ! Your email address will not be published. Required fields are marked (*).</p>
                                <div class="row">
                                    <div class="col-sm-6"> <label> <span>Comment *</span> <textarea name="comment" class="form-control" required="" aria-required="true"></textarea> </label> </div>
                                    <div class="col-sm-6"> <label> <span>Name *</span> <input type="text" name="name" class="form-control" required="" aria-required="true"> </label> <label> <span>Email Address *</span> <input type="email" name="email" class="form-control" required="" aria-required="true"> </label> <label> <span>Website</span> <input type="text" name="website" class="form-control"> </label> </div>
                                    <div class="col-md-12"> <button type="submit" class="btn btn-primary">Post a Comment</button> </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                        <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 790px; height: 3727px;"></div>
                        </div>
                        <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main--sidebar col-md-4 ptop--30 pbottom--30" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <?php get_template_part('template-parts/sidebar/search-sidebar'); ?>
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
                        <div class="widget--title" data-ajax="tab">
                            <h2 class="h4">Xem nhiều nhất</h2>
                        </div>
                        <div class="list--widget list--widget-1" data-ajax-content="outer">
                            <div class="post--items post--items-3">
                                <ul class="nav" data-ajax-content="inner">
                                    <?php
                                    $wp_query = new WP_Query(array(
                                        'post_type' => 'post',
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
                                                                <li><a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a></li>
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
                            <div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 400px; height: 4061px;"></div>
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