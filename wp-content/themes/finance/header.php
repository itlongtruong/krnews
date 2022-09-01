<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

$current_date = current_datetime();
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <?PHP if (IS_HOME()) : ?>
        <meta property="og:image" content="https://krongnonews.com/wp-content/uploads/2022/08/123logo.png" />
        <meta property="og:image:width" content="1280">
        <meta property="og:image:height" content="720" ; />
    <?PHP endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/123logo.png">



    <link rel="icon" href="favicon.png" type="<?php echo get_template_directory_uri(); ?>/assets/img/logonkrn.png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">

    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">

    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome-stars-o.min.css">

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">

    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive-style.css">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/colors/theme-color-2.css" id="changeColorScheme">

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">

</head>
<style>
    @media only screen and (max-width:480px) {
    .header--mainbar {
        display: none !important;
    }
}
</style>
<body class="boxed" data-bg-img="<?php echo get_template_directory_uri(); ?>/assets/img/bg-pattern.png" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">

        <header class="header--section header--style-3">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg--color-1">
                <div class="container">
                    <div class="float--left float--xs-none text-xs-center">
                        <!-- Header Topbar Info Start -->
                        <ul class="header--topbar-info nav">
                            <li><a href="<?php echo home_url(); ?>/lien-he"><i class="fa fm fa-map-marker"></i>Krông Nô, Đăk Nông</a></li>
                            <!-- <li><i class="fa fm fa-mixcloud"></i>25<sup>0</sup> C</li> -->
                            <li><i class="fa fm fa-calendar"></i><span id="hvn"></span></li>
                        </ul>
                        <!-- Header Topbar Info End -->
                    </div>

                    <div class="float--right float--xs-none text-xs-center">
                        <!-- Header Topbar Action Start -->
                        <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                            <li><a href="https://www.facebook.com/KRNews.TinTucKrongNo" target="_blank"><i class="fa fa-facebook"></i></a></li>
                          
                        </ul>
                        <!-- <ul class="header--topbar-action nav">

                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fm fa-user-o"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="" href="">Đăng xuất</a></li>
                                <li><a href="">Home</a></li>
                                <form id="logout-form" action="" method="POST" class="d-none">

                                </form>
                            </ul>
                        </li> 


                            <li><a href="<?php echo home_url(); ?>/login"><i class="fa fm fa-user-o"></i>Đăng nhập/Đăng ký</a></li>


                        </ul> -->

                    </div>
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Mainbar Start -->
            <div class="header--mainbar">
                <div class="container">
                    <!-- Header Logo Start -->
                    <div class="header--logo float--left float--sm-none text-sm-center">
                        <h1 class="h1">
                            <a href="<?php echo home_url(); ?>/" class="btn-link">
                                <video autoplay loop muted plays-inline width="60%">
                                    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/KRNew1.mp4" style="video/mp4">
                                </video>

                            </a>
                        </h1>
                    </div>
                    
                    <!-- Header Logo End -->

                    <!-- Header Ad Start -->
                    <?php
                    $ads = new WP_Query(array(
                        'post_type' => 'quang-cao',
                        'post_status' => 'publish',
                        'orderby' => 'ID',
                        'order' => 'DESC',
                        'posts_per_page' => 5
                    ));
                    $i = 1;
                    while ($ads->have_posts()) : $ads->the_post();
                        $post_id = get_the_ID();
                        $link_dang_ky = get_field_object('link_dang_ky', $post_id);
                    ?>
                        <?php if ($i == 1) {
                        ?>
                            <div class="header--ad float--right float--sm-none hidden-xs" style="width:60% ;margin-top:60px">
                                <a href="<?php echo $link_dang_ky['value']; ?>" target="_blank">
                                    <img src="<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>" alt="Advertisement">
                                </a>
                            </div>

                        <?php } ?>

                    <?php $i++;
                    endwhile;
                    wp_reset_query(); ?>

                    <!-- Header Ad End -->
                </div>
            </div>
            <!-- Header Mainbar End -->

            <!-- Header Navbar Start -->
            <div class="header--navbar navbar bd--color-1 bg--color-0" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--left">
                        <!-- Header Menu Links Start -->

                        <nav class="main-nav d-none d-lg-block">

                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'header-menu',
                                    'container' => 'false',
                                    'menu_id' => 'header-menu',
                                    'menu_class' => 'menu'
                                )
                            ); ?>

                        </nav>
                        <!-- <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                           
                             <li class="dropdown">
                            <a href="<?php echo home_url(); ?>/" class="dropdown-toggle" data-toggle="dropdown">Trang<i class="fa flm fa-angle-down"></i></a>

                            <ul class="dropdown-menu">

                                <li><a href="">About</a></li>

                                <li><a href="">Coming Soon</a></li>
                                <li><a href="">404</a></li>
                            </ul>
                        </li> 
                        </ul>-->
                        <!-- Header Menu Links End -->
                    </div>

                    <!-- Header Search Form Start -->
                    <form method="GET" action="<?php bloginfo('url'); ?>/" class="header--search-form float--right" data-form="validate">

                        <input type="search" name="s" placeholder="Tìm Kiếm..." class="header--search-control form-control" required <?php if (is_search()) { ?>value="<?php the_search_query(); ?>" <?php } else { ?>value="" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" <?php } ?>>

                        <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>
                    </form>
                    <!-- Header Search Form End -->
                </div>
            </div>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->

        <!-- Posts Filter Bar Start -->