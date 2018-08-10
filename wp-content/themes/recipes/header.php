<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package recipes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.1&appId=217865502194937&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'recipes' ); ?></a>



    <div id="preloader">
        <div class="yummy-load"></div>
    </div>



    <!-- ****** Top Header Area Start ****** -->
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <?php

                        // check if the repeater field has rows of data
                        if( have_rows('header_social_media_block', 'option') ):

                            // loop through the rows of data
                            while ( have_rows('header_social_media_block', 'option') ) : the_row();?>

                                <a href="<?php echo get_sub_field('header_social_media_block_link', 'option'); ?> " target="_blank"><i class="<?php echo get_sub_field('header_social_media_block_icon', 'option'); ?>" aria-hidden="true"></i></a>

                         <?php   endwhile;

                        else :

                            // no rows found

                        endif;

                        ?>
                    </div>
                </div>
                <!--  Login Register Area -->
                <div class="col-7 col-sm-6">
                    <div class="signup-search-area d-flex align-items-center justify-content-end">
<!--
                        <!-- Search Button Area -->
                        <div class="search_button">
                            <a class="searchBtn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                        <!-- Search Form -->
                        <div class="search-hidden-form">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search-anything" placeholder="Search Anything...">
                                <input type="submit" value="" class="d-none">
                                <span class="searchBtn"><i class="fa fa-times" aria-hidden="true"></i></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Top Header Area End ****** -->

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="yummy-logo"><?php echo get_field('Header_heading_site_name', 'option'); ?></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false"
                                aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> <?php _e('Menu'); ?> </button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">

                            <?php

                            $args = array(
                                    'theme_location' => 'menu-1',
                                    'container'       => FALSE,
                                    'menu_class'      => 'navbar-nav ',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'walker'          => new recipes_Navwalker()
                            );


                            wp_nav_menu($args);


                            ?>
<!---->
<!--                            <ul class="navbar-nav" id="yummy-nav">-->
<!--                                <li class="nav-item active">-->
<!--                                    <a class="nav-link" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">--><?php //bloginfo( 'name' ); ?><!-- <span class="sr-only">(current)</span></a>-->
<!--                                </li>-->
<!--                                <li class="nav-item dropdown">-->
<!--                                    <a class="nav-link dropdown-toggle" href="#" id="yummyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>-->
<!--                                    <div class="dropdown-menu" aria-labelledby="yummyDropdown">-->
<!--                                        <a class="dropdown-item" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">--><?php //bloginfo( 'name' ); ?><!--</a>-->
<!--                                        <a class="dropdown-item" href="archive.html">Archive</a>-->
<!--                                        <a class="dropdown-item" href="single.html">Single Blog</a>-->
<!--                                        <a class="dropdown-item" href="static.html">Static Page</a>-->
<!--                                        <a class="dropdown-item" href="contact.html">Contact</a>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="nav-item">-->
<!--                                    <a class="nav-link" href="#">Features</a>-->
<!--                                </li>-->
<!--                                <li class="nav-item">-->
<!--                                    <a class="nav-link" href="#">Categories</a>-->
<!--                                </li>-->
<!--                                <li class="nav-item">-->
<!--                                    <a class="nav-link" href="archive.html">Archive</a>-->
<!--                                </li>-->
<!--                                <li class="nav-item">-->
<!--                                    <a class="nav-link" href="#">About</a>-->
<!--                                </li>-->
<!--                                <li class="nav-item">-->
<!--                                    <a class="nav-link" href="contact.html">Contact</a>-->
<!--                                </li>-->
<!--                            </ul>-->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->



    <div id="content" class="site-content">
