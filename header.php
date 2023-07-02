<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php get_template_directory_uri() . '/assets/img/logo-edit.svg'; ?> " />
    <title><?php if (is_front_page()) {
                echo "Home | ";
                echo bloginfo('name');
            } else {
                echo wp_title();
                echo " | ";
                echo bloginfo('name');
            }
            ?></title>
    <?php wp_head(); ?>
</head>

<body id=" page-top" <?php body_class(); ?>>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top mb-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?php echo home_url('/'); ?>"></a>
            <img class="logo" src="<?php echo get_template_directory_uri() . '/assets/img/logo-edit.svg'; ?>" width="160px" height="auto">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php
                wp_nav_menu(array(
                    'menu'               => 'Primary Menu',
                    'theme_location'     => 'menu',
                    'depth'              => 1,
                    'container'          => false,
                    'menu_class'         => 'nav navbar-nav ms-auto my-2 my-lg-0',
                    'menu_id'            => '',
                    'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                    'walker'             => new wp_bootstrap_navwalker(),
                ));

                ?>
            </div>
        </div>
    </nav>