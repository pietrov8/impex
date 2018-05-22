<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

            function register_my_menus() {
            register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
)
);
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );

// Register Custom Post Type Home page
// Post Type Key: homepage
function create_homepage_cpt() {

$labels = array(
'name' => __( 'Custom Posts', 'Post Type General Name', 'textdomain' ),
'singular_name' => __( 'Custom Posts', 'Post Type Singular Name', 'textdomain' ),
'menu_name' => __( 'Custom Posts', 'textdomain' ),
'name_admin_bar' => __( 'Home page', 'textdomain' ),
'archives' => __( 'Home page Archives', 'textdomain' ),
'attributes' => __( 'Home page Attributes', 'textdomain' ),
'parent_item_colon' => __( 'Parent Home page:', 'textdomain' ),
'all_items' => __( 'All Custom Posts', 'textdomain' ),
'add_new_item' => __( 'Add New Home page', 'textdomain' ),
'add_new' => __( 'Add New', 'textdomain' ),
'new_item' => __( 'New Home page', 'textdomain' ),
'edit_item' => __( 'Edit Home page', 'textdomain' ),
'update_item' => __( 'Update Home page', 'textdomain' ),
'view_item' => __( 'View Home page', 'textdomain' ),
'view_items' => __( 'View Custom Posts', 'textdomain' ),
'search_items' => __( 'Search Home page', 'textdomain' ),
'not_found' => __( 'Not found', 'textdomain' ),
'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
'featured_image' => __( 'Featured Image', 'textdomain' ),
'set_featured_image' => __( 'Set featured image', 'textdomain' ),
'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
'insert_into_item' => __( 'Insert into Home page', 'textdomain' ),
'uploaded_to_this_item' => __( 'Uploaded to this Home page', 'textdomain' ),
'items_list' => __( 'Custom Posts list', 'textdomain' ),
'items_list_navigation' => __( 'Custom Posts list navigation', 'textdomain' ),
'filter_items_list' => __( 'Filter Custom Posts list', 'textdomain' ),
);
$args = array(
'label' => __( 'Home page', 'textdomain' ),
'description' => __( '', 'textdomain' ),
'labels' => $labels,
'menu_icon' => '',
'supports' => array(),
'taxonomies' => array(),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_position' => 5,
'show_in_admin_bar' => true,
'show_in_nav_menus' => true,
'can_export' => true,
'has_archive' => true,
'hierarchical' => false,
'exclude_from_search' => false,
'show_in_rest' => true,
'publicly_queryable' => true,
'capability_type' => 'page',
);
register_post_type( 'homepage', $args );
}
add_action( 'init', 'create_homepage_cpt', 0 );

/** FOOTER WIDGETS **/
register_sidebar( array(
'name' => 'Footer Box 1',
'id' => 'footer-sidebar-1',
'description' => 'Kolumna pierwsz w stopce',
'before_widget' => '
<aside id="%1$s" class="col1">',
    'after_widget' => '
</aside>',
'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Box 2',
'id' => 'footer-sidebar-2',
'description' => 'Kolumna druga w stopce',
'before_widget' => '
<aside id="%1$s" class="col2">',
    'after_widget' => '
</aside>',
'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Box 3',
'id' => 'footer-sidebar-3',
'description' => 'Kolumna trzecia w stopce',
'before_widget' => '
<aside id="%1$s" class="col3">',
    'after_widget' => '
</aside>',
'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer Box 4',
'id' => 'footer-sidebar-4',
'description' => 'Kolumna czwarta w stopce',
'before_widget' => '
<aside id="%1$s" class="col4">',
    'after_widget' => '
</aside>',
'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer copyright',
'id' => 'footer-sidebar-5',
'description' => 'Informacje o stronie w stopce',
'before_widget' => '
<aside id="%1$s" class="col5">',
    'after_widget' => '
</aside>',
'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

register_sidebar( array(
'name' => 'Footer cookies',
'id' => 'footer-sidebar-6',
'description' => 'Informacje o ciasteczka w stopce',
'before_widget' => '
<aside id="%1$s" class="col6">',
    'after_widget' => '
</aside>',
'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );


?>