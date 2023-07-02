<?php

/**
 * Bootstrap Navwalker
 */

if (is_front_page() && !is_page_template('login') && !is_page_template('dashboad')) {

    require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
}

function delivermeat_setup()
{
    load_theme_textdomain('delivermeat', get_template_directory_uri() . '/languages');
    add_theme_support('post-thumbnails');
    add_image_size('blog_image', 300, 200, true);

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            'navigation-widgets',
        )
    );

    register_nav_menus(array(
        'menu' => esc_html(__('Primary Menu', 'delivermeat')),
    ));
}
add_action('after_setup_theme', 'delivermeat_setup');


function delivermeat_scripts()
{
    $ajaxurl = admin_url("admin-ajax.php");
    $nonce  = wp_create_nonce('submit');

    wp_enqueue_style('font-google', "//fonts.googleapis.com/css?family=Merriweather+Sans:400,700", array(), false, 'all');
    wp_enqueue_style('font-google-api', "//fonts.googleapis.com/css?family=Merriweather+Sans:400,700", array(), false, 'all');
    wp_enqueue_style('coresansa-font', get_template_directory_uri() . "/assets/css/coresansa_stylesheet.css", array(), false, 'all');
    wp_enqueue_style('lightbox', "//cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css", array(), false, 'all');
    wp_enqueue_style('bootstrap-icon', "//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css", array(), false, 'all');
    wp_enqueue_style('style-css', get_stylesheet_uri(), array(), time(), 'all');

    wp_enqueue_script('jquery', "//code.jquery.com/jquery-3.7.0.js", array(), time(), true);
    wp_enqueue_script('lightbox', "https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js", array(), false, true);
    wp_enqueue_script('bootstrap-min', "//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js", array(), false, true);
    // wp_enqueue_script('sb-foms-cdn', "//cdn.startbootstrap.com/sb-forms-latest.js", array('jquery'), time(), true);
    wp_enqueue_script('script-js', get_template_directory_uri() . "/assets/js/scripts.js", array('jquery'), time(), true);
    wp_localize_script('contact-js', 'submiturl', array('ajaxurl' => $ajaxurl, 'nonce' => $nonce));
}
add_action('wp_enqueue_scripts', 'delivermeat_scripts');

function delivermeat_custom_mime_types($mimes)
{

    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    $mimes['doc'] = 'application/msword';

    return $mimes;
}
add_filter('upload_mimes', 'delivermeat_custom_mime_types');


add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    global $wp_version;

    $filetype = wp_check_filetype($filename, $mimes);

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');
