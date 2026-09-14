<?php
/**
 * Seoind Theme Functions
 *
 * @package Seoind
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define theme constants
define( 'SEOIND_VERSION', '2.0.0' );
define( 'SEOIND_DIR', get_template_directory() );
define( 'SEOIND_URI', get_template_directory_uri() );

/**
 * Setup Theme Supports
 */
function seoind_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary'   => esc_html__( 'Primary Menu', 'seoind' ),
        'footer'    => esc_html__( 'Footer Menu', 'seoind' ),
        'mobile'    => esc_html__( 'Mobile Menu', 'seoind' ),
    ) );

    // Add support for HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ) );

    // Add theme support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 70,
        'width'       => 320,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Set content width
    if ( ! isset( $content_width ) ) {
        $content_width = 1280;
    }

    load_theme_textdomain( 'seoind', SEOIND_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'seoind_setup' );

/**
 * Enqueue Styles and Scripts
 */
function seoind_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'seoind-style', SEOIND_URI . '/assets/style.css', array(), SEOIND_VERSION );
    wp_enqueue_style( 'seoind-responsive', SEOIND_URI . '/responsive.css', array( 'seoind-style' ), SEOIND_VERSION );

    // Enqueue main script
    wp_enqueue_script( 'seoind-script', SEOIND_URI . '/assets/script.js', array( 'jquery' ), SEOIND_VERSION, true );

    // Localize script data
    wp_localize_script( 'seoind-script', 'seoindData', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'seoind_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'seoind_enqueue_assets' );

/**
 * Register Widget Areas
 */
function seoind_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'seoind' ),
        'id'            => 'primary-sidebar',
        'description'   => esc_html__( 'Main sidebar widget area', 'seoind' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 1', 'seoind' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'First footer widget area', 'seoind' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 2', 'seoind' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Second footer widget area', 'seoind' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'seoind_widgets_init' );

/**
 * Custom Theme Settings
 */
function seoind_customize_register( $wp_customize ) {
    // Add panel
    $wp_customize->add_panel( 'seoind_settings', array(
        'title'       => esc_html__( 'Seoind Settings', 'seoind' ),
        'description' => esc_html__( 'Customize your seoind theme', 'seoind' ),
        'priority'    => 160,
    ) );

    // Links Section
    $wp_customize->add_section( 'seoind_links', array(
        'title'       => esc_html__( 'External Links', 'seoind' ),
        'panel'       => 'seoind_settings',
        'priority'    => 10,
    ) );

    // Register Link
    $wp_customize->add_setting( 'seoind_link_register', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'seoind_link_register', array(
        'label'       => esc_html__( 'Register Link', 'seoind' ),
        'section'     => 'seoind_links',
        'type'        => 'url',
    ) );

    // Login Link
    $wp_customize->add_setting( 'seoind_link_login', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'seoind_link_login', array(
        'label'       => esc_html__( 'Login Link', 'seoind' ),
        'section'     => 'seoind_links',
        'type'        => 'url',
    ) );

    // Livechat Link
    $wp_customize->add_setting( 'seoind_link_livechat', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'seoind_link_livechat', array(
        'label'       => esc_html__( 'Livechat Link', 'seoind' ),
        'section'     => 'seoind_links',
        'type'        => 'url',
    ) );
}
add_action( 'customize_register', 'seoind_customize_register' );

/**
 * Get customizer option
 */
function seoind_get_option( $option, $default = '' ) {
    return get_theme_mod( 'seoind_' . $option, $default );
}
