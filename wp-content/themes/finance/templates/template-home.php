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


<?php get_template_part( 'template-parts/content/partner-news-hot' ); ?>

<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="main--content ptop--30 ">
        <?php
        echo do_shortcode('[smartslider3 slider="2"]');
         ?>
        </div>

        <?php get_template_part( 'template-parts/content/partner-category-home' ); ?>

        <div class="row" style="transform: none;">
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 189.6px; top: 0px;">
                    <div class="row">
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Tin Tức</h2>
                                <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_world_news_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_world_news_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                            </div>
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-xs-12">
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/world-news-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">War</a> <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Siriya attaced by a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-12">
                                        <hr class="divider">
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/world-news-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Hantu Raya</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/world-news-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-12">
                                        <hr class="divider">
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/world-news-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/world-news-05.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Hantu Raya</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
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
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Sự Kiện</h2>
                                <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_technology_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_technology_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                            </div>
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/technology-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Computer</a> <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bathin</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/technology-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/technology-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/technology-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/technology-05.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
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
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <div class="ad--space"> <a href="#"> <img src="img/ads-img/ad-728x90-01.jpg" alt="" class="center-block" data-rjs="2" data-rjs-processed="true"> </a> </div>
                        </div>
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Du Lịch</h2>
                                <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_finance_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_finance_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                            </div>
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row" data-ajax-content="inner">
                                    <li class="col-md-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/finance-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Business</a> <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Vassago</a></li>
                                                        <li><a href="#">Today 03:30 am</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <ul class="nav row">
                                            <li class="col-xs-12 hidden-md hidden-lg">
                                                <hr class="divider">
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/finance-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Zepar</a></li>
                                                                <li><a href="#">Today 03:52 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/finance-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Demiurge</a></li>
                                                                <li><a href="#">Today 03:02 pm</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-12">
                                                <hr class="divider">
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/finance-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Demiurge</a></li>
                                                                <li><a href="#">Today 02:05 am</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-xs-6">
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/finance-05.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Zepar</a></li>
                                                                <li><a href="#">Today 12:35 am</a></li>
                                                            </ul>
                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Thể Thao</h2>
                                <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_politics_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_politics_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                            </div>
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-xs-12">
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/politics-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Election</a> <a href="#" class="icon"><i class="fa fa-fire"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-12">
                                        <hr class="divider">
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/politics-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Hantu Raya</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/politics-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-12">
                                        <hr class="divider">
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/politics-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/politics-05.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Hantu Raya</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
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
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Xe Cộ</h2>
                                <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_sports_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_sports_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                            </div>
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/sports-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Basketball</a> <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bathin</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/sports-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/sports-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/sports-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/sports-05.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
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
                        <div class="ad--widget"> <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ads-img/ad-300x250-1.jpg" alt="" data-rjs="2" data-rjs-processed="true"> </a> </div>
                    </div>
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
                            <h2 class="h4">Featured News</h2>
                            <i class="icon fa fa-newspaper-o"></i>
                        </div>
                        <div class="list--widget list--widget-1">
                            <div class="list--widget-nav" data-ajax="tab">
                                <ul class="nav nav-justified">
                                    <li> <a href="#" data-ajax-action="load_widget_hot_news">Hot News</a> </li>
                                    <li class="active"> <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a> </li>
                                    <li> <a href="#" data-ajax-action="load_widget_most_watched">Most Watched</a> </li>
                                </ul>
                            </div>
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/widgets-img/news-widget-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
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
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="img/widgets-img/news-widget-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
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
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/widgets-img/news-widget-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
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
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/widgets-img/news-widget-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
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
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Advertisement</h2>
                            <i class="icon fa fa-bullhorn"></i>
                        </div>
                        <div class="ad--widget"> <a href="#"> <img src="img/ads-img/ad-300x250-2.jpg" alt="" data-rjs="2" data-rjs-processed="true"> </a> </div>
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
        <div class="main--content pd--30-0">
            <div class="post--items-title" data-ajax="tab">
                <h2 class="h4">Du Lịch</h2>
                <div class="nav"> <a href="#" class="prev btn-link" > <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" > <i class="fa fa-long-arrow-right"></i> </a> </div>
            </div>
            <div class="post--items post--items-4" data-ajax-content="outer">
                <ul class="nav row" data-ajax-content="inner">
                    <li class="col-md-8">
                        <div class="post--item">
                            <div class="post--img">
                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/audio-video-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Wave</a> <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                <div class="post--info">
                                    <ul class="nav meta">
                                        <li><a href="#">Succubus</a></li>
                                        <li><a href="#">Today 03:52 pm</a></li>
                                    </ul>
                                    <div class="title">
                                        <h2 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="divider hidden-md hidden-lg">
                    </li>
                    <li class="col-md-4">
                        <ul class="nav">
                            <li>
                                <div class="post--item  post--layout-3">
                                    <div class="post--img">
                                        <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/audio-video-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Maclaan John</a></li>
                                                <li><a href="#">16 April 2017</a></li>
                                            </ul>
                                            <div class="title">
                                                <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post--item  post--layout-3">
                                    <div class="post--img">
                                        <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/audio-video-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Maclaan John</a></li>
                                                <li><a href="#">16 April 2017</a></li>
                                            </ul>
                                            <div class="title">
                                                <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post--item  post--layout-3">
                                    <div class="post--img">
                                        <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/audio-video-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Maclaan John</a></li>
                                                <li><a href="#">16 April 2017</a></li>
                                            </ul>
                                            <div class="title">
                                                <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post--item  post--layout-3">
                                    <div class="post--img">
                                        <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/audio-video-05.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">Maclaan John</a></li>
                                                <li><a href="#">16 April 2017</a></li>
                                            </ul>
                                            <div class="title">
                                                <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="preloader bg--color-0--b" data-preloader="1">
                    <div class="preloader--inner"></div>
                </div>
            </div>
        </div>
        <div class="ad--space pd--30-0"> <a href="#"> <img src="img/ads-img/ad-970x90.jpg" alt="" class="center-block" data-rjs="2" data-rjs-processed="true"> </a> </div>
        <div class="row" style="transform: none;">
            <div class="main--content col-md-8 col-sm-7" data-sticky-content="true" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 2001px;">
                <div class="sticky-content-inner" style="padding-top: 0px; padding-bottom: 1px; position: absolute; transform: translateY(383.91px); width: 750px; top: 0px;">
                    <div class="row">
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Thời Trang</h2>
                                <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_health_fitness_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_health_fitness_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                            </div>
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/health-and-fitness-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Business</a> <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bathin</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/health-and-fitness-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Maclaan John</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Established fact that a reader will be distracted by the readable content</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/health-and-fitness-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Ziminiar</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/health-and-fitness-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Vanth</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/health-and-fitness-05.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Vanth</a></li>
                                                        <li><a href="#">16 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Long established fact that a reader will be distracted by the readable</a></h3>
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
                        <div class="col-md-6 ptop--30 pbottom--30">
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Sức Khỏe</h2>
                                <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_lifestyle_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_lifestyle_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                            </div>
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-xs-12">
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/lifestyle-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Fashion</a> <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Siriya attaced by a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-12">
                                        <hr class="divider">
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/lifestyle-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/lifestyle-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-12">
                                        <hr class="divider">
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/lifestyle-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-6">
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/lifestyle-05.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">17 April 2017</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will done</a></h3>
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
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Ẩm Thực</h2>
                                <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_food_resturent_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_food_resturent_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                            </div>
                            <div class="post--items" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/food-and-resturent-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-xs-12 hidden shown-xxs">
                                        <hr class="divider">
                                    </li>
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/food-and-resturent-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 hidden-sm hidden-xs">
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/food-and-resturent-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h3>
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
                        <div class="col-md-12 ptop--30 pbottom--30">
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Làm Đẹp</h2>
                                <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_photo_gallery_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_photo_gallery_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                            </div>
                            <div class="post--items post--items-1" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-md-12">
                                        <div class="post--item post--layout-1 post--title-large">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/photo-gallery-01.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a> <a href="#" class="cat">Serfer</a> <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 05:52 pm</a></li>
                                                    </ul>
                                                    <div class="title text-xxs-ellipsis">
                                                        <h2 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/photo-gallery-02.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h2 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/photo-gallery-03.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h2 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-4 hidden-sm hidden-xs">
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1-boxed.html" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-img/photo-gallery-04.jpg" alt="" data-rjs="2" data-rjs-processed="true"></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                    </ul>
                                                    <div class="title">
                                                        <h2 class="h4"><a href="news-single-v1-boxed.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
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
                        <div class="ad--widget">
                            <div class="row">
                                <div class="col-sm-6"> <a href="#"> <img src="img/ads-img/ad-150x150-1.jpg" alt="" data-rjs="2" data-rjs-processed="true"> </a> </div>
                                <div class="col-sm-6"> <a href="#"> <img src="img/ads-img/ad-150x150-2.jpg" alt="" data-rjs="2" data-rjs-processed="true"> </a> </div>
                            </div>
                        </div>
                    </div>
                  
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