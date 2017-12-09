<?php
/**
 * Custom post types
 */

/***************** RNS post type ****************/

add_action( 'init', 'register_rns', 0 );

function register_rns()
{

    $name = 'RNS items';
    $single = 'RNS item';

    $labels = array(
    'name'                => _x( $name, 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( $single, 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( $name, 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( "All $name", 'text_domain' ),
    'view_item'           => __( 'View', 'text_domain' ),
    'add_new_item'        => __( 'Add new', 'text_domain' ),
    'add_new'             => __( 'Add new', 'text_domain' ),
    'edit_item'           => __( 'Edit', 'text_domain' ),
    'update_item'         => __( 'Update', 'text_domain' ),
    'search_items'        => __( 'Search', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
    'label'               => __( $name, 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 30,
    'menu_icon'           => 'dashicons-media-document',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    );
    register_post_type( 'rns', $args );
}

/***************** News post type ****************/

add_action( 'init', 'register_news', 0 );

function register_news()
{

    $name = 'News';
    $single = 'News Item';

    $labels = array(
    'name'                => _x( $name, 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( $single, 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( $name, 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( "All $name", 'text_domain' ),
    'view_item'           => __( 'View', 'text_domain' ),
    'add_new_item'        => __( 'Add new', 'text_domain' ),
    'add_new'             => __( 'Add new', 'text_domain' ),
    'edit_item'           => __( 'Edit', 'text_domain' ),
    'update_item'         => __( 'Update', 'text_domain' ),
    'search_items'        => __( 'Search', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
    'label'               => __( $name, 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 30,
    'menu_icon'           => 'dashicons-format-chat',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'rewrite' => array('slug' => 'news-archive'),
    );
    register_post_type( 'news', $args );
}

/***************** Share price post type ****************/

add_action( 'init', 'register_share_price', 0 );

function register_share_price()
{

    $name = 'Share price';
    $single = 'Share price';

    $labels = array(
    'name'                => _x( $name, 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( $single, 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( $name, 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( "All $name", 'text_domain' ),
    'view_item'           => __( 'View', 'text_domain' ),
    'add_new_item'        => __( 'Add new', 'text_domain' ),
    'add_new'             => __( 'Add new', 'text_domain' ),
    'edit_item'           => __( 'Edit', 'text_domain' ),
    'update_item'         => __( 'Update', 'text_domain' ),
    'search_items'        => __( 'Search', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
    'label'               => __( $name, 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 30,
    'menu_icon'           => 'dashicons-chart-area',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    );
    register_post_type( 'share-price', $args );
}