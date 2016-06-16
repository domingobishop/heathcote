<?php

// Enqueue styles and scripts
function bc_styles() {
    wp_register_style( 'bc-styles', get_template_directory_uri() . '/style.css', array(), 1.0, 'all' );
    wp_register_style( 'google-fonts',
        'https://fonts.googleapis.com/css?family=Lora:400,700|Droid+Serif:400,700|Open+Sans:400,700,400italic', array(), 1.0, 'all' );
    wp_enqueue_style( 'bc-styles' );
    wp_enqueue_style( 'google-fonts' );
}
add_action( 'wp_enqueue_scripts', 'bc_styles' );

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Navigation Menu', 'blankcanvas' ) );
}

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
    global $post;
    return '<br><a class="btn btn-default btn-xs" role="button" href="'. get_permalink($post->ID) . '">Read more &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function bc_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name', 'display' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'bc_wp_title', 10, 2 );

function add_image_responsive_class($content) {
   global $post;
   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 img-responsive"$3>';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}
add_filter('the_content', 'add_image_responsive_class');

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

function bc_widgets_init() {
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'bc_sidebar',
        'before_widget' => '<div class="widget-area">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
    register_sidebar( array(
        'name' => 'Footer',
        'id' => 'bc_footer',
        'before_widget' => '<div class="col-sm-6 col-md-4 widget-area">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
}
add_action( 'widgets_init', 'bc_widgets_init' );

function add_categories_to_pages() {
    register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_categories_to_pages' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'wine-thumbnail', 80, 295 ); // Soft Crop Mode


