<?php

/**
 * Template Name: Categorys Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */
get_header();
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
// $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$wp_query = new WP_Query( array(
    'post_type'        => 'danh-muc',
    'posts_per_page' => 2,
    'paged' =>  get_query_var( 'paged' ),
	  'cat'       => $cat_id
    
));
?>
<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <?php if ($wp_query->have_posts()) : ?>
                        <?php while ($wp_query->have_posts()) : $wp_query->the_post();
                            $post_id = get_the_ID();
                        ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="">
                                    <a href="<?php the_permalink(); ?>">
                                       
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2><?php echo $post->post_title; ?></h2>
                                    </a>
                                    <p> <?php the_excerpt(); ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="<?php the_permalink(); ?>"><i class="fa fa-user"></i><?php echo get_the_author();?> </a></li>
                                        <li><a href="<?php the_permalink(); ?>"><i class="fa fa-clock"></i> <time datetime="<?php echo date('Y-m-d', strtotime($post->post_date))?>"><?php echo date('M j, Y', strtotime($post->post_date))?></time></a></li>
                                        <li><a href="<?php the_permalink(); ?>"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></a></li>
                                    </ul>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php htmlwp_pagination(); 
           
           ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <form action="<?php bloginfo('url'); ?>/" method="GET" role="search">
                                        <input class="form-control" type="text" name="s" placeholder='Từ khóa...' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Từ khóa...'" <?php if (is_search()) { ?>value="<?php the_search_query(); ?>" <?php } else { ?>value="" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" <?php } ?>>
                                        <input type="hidden" name="post_type" value="danh-muc" />
                                        <div class="input-group-append">
                                            <button class="btns" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button> -->
                        </form>
                    </aside>

                    <?php get_template_part( 'template-parts/sidebar/category-sidebar' ); ?>

                    <?php get_template_part( 'template-parts/sidebar/recent-posts' ); ?>

                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>