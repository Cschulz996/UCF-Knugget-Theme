<?php
//  Initialize theme and add features
add_theme_support('menus');

register_nav_menus(
    array(
        'top_menu'      => __('Top Menu', 'theme'),
        'footer_menu'   => __('Footer Menu', 'theme'),
    )
);

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1200, 9999 );


//  All stylesheets go here
function load_styles() {
    wp_register_style('Athena UCF CSS', get_template_directory_uri() . '/assets/css/framework.min.css', array(), null, 'all');
    wp_enqueue_style('Athena UCF CSS');

    wp_register_style('Main Site CSS', get_template_directory_uri() . '/style.css', array(), null, 'all');
    wp_enqueue_style('Main Site CSS');
}
add_action('wp_enqueue_scripts', 'load_styles');

//  All scripts go here
function load_aascripts() {
    wp_deregister_script('jquery');
    wp_deregister_script('tether');

    wp_register_script('universitybar', '//universityheader.ucf.edu/bar/js/university-header.js?use-1200-breakpoint=1', '', null, true);
    wp_enqueue_script('universitybar');

    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', '', null, true);
    wp_enqueue_script('jquery');

    wp_register_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js', '', null, true);
    wp_enqueue_script('tether');

    wp_register_script('Athena UCF JS', get_template_directory_uri() . '/assets/js/framework.min.js', '', null, true);
    wp_enqueue_script('Athena UCF JS');

    wp_register_script('Header Images', get_template_directory_uri() . '/assets/js/header.js', '', null, true);
    wp_enqueue_script('Header Images');
    $headerImgDir = array('headerimg_directory_uri' => get_stylesheet_directory_uri());
    wp_localize_script('Header Images', 'directory_uri', $headerImgDir);
}
add_action('wp_enqueue_scripts', 'load_aascripts');


function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_list_item_class($classes, $item, $args) {
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

//  Add support for dropdown menus
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

?>