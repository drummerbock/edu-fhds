<?php
/**
 * Fast Hands Drum Studio Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function fhds_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'fhds' ),
        'footer'  => __( 'Footer Menu', 'fhds' ),
    ) );
}
add_action( 'after_setup_theme', 'fhds_setup' );

function fhds_assets() {
    wp_enqueue_style(
        'fhds-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'fhds_assets' );
