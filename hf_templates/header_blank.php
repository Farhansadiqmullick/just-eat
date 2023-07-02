
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
    <?php 
    wp_head();
     ?>
</head>