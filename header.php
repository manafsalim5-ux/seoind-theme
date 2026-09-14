<?php
/**
 * The header for our theme
 *
 * @package Seoind
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Mobile Sidebar -->
    <div id="sidebar" class="page-sidebar mobile">
        <div class="page-sidebar-scroll">
            <div class="menu-games-container">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'mobile',
                    'menu_id'        => 'menu-games',
                    'menu_class'     => 'nav-item',
                    'fallback_cb'    => 'wp_page_menu',
                    'depth'          => 2,
                ) );
                ?>
            </div>
            <div class="menu-contact-container">
                <ul id="menu-contact" class="nav-item">
                    <li><a href="<?php echo esc_url( seoind_get_option( 'link_livechat', '#' ) ); ?>" target="_blank" rel="nofollow noopener noreferrer"><i class="ico-menu whatsapp"></i><?php esc_html_e( 'Whatsapp', 'seoind' ); ?></a></li>
                    <li><a href="<?php echo esc_url( seoind_get_option( 'link_livechat', '#' ) ); ?>" target="_blank" rel="nofollow noopener noreferrer"><i class="ico-menu telegram"></i><?php esc_html_e( 'Telegram', 'seoind' ); ?></a></li>
                    <li><a href="<?php echo esc_url( seoind_get_option( 'link_livechat', '#' ) ); ?>" target="_blank" rel="nofollow noopener noreferrer"><i class="ico-menu livechat"></i><?php esc_html_e( 'Livechat', 'seoind' ); ?></a></li>
                </ul>
            </div>
        </div>
    </div>

    <input class="tg mobile" id="side-opener" type="checkbox">
    
    <div id="content" class="page-content" data-snap-ignore="true">
        <!-- Header Navigation -->
        <header id="header" role="banner">
            <!-- Top Header -->
            <div id="top-header" class="top-header">
                <div class="container">
                    <div class="row">
                        <!-- Contact Menu -->
                        <div id="menu" role="navigation" class="col-6 contact-menu float">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <ul id="menu-contact-1" class="contact-menu">
                                            <li><a href="<?php echo esc_url( seoind_get_option( 'link_livechat', '#' ) ); ?>" target="_blank" rel="nofollow noopener noreferrer"><i class="ico-menu whatsapp"></i><?php esc_html_e( 'Whatsapp', 'seoind' ); ?></a></li>
                                            <li><a href="<?php echo esc_url( seoind_get_option( 'link_livechat', '#' ) ); ?>" target="_blank" rel="nofollow noopener noreferrer"><i class="ico-menu telegram"></i><?php esc_html_e( 'Telegram', 'seoind' ); ?></a></li>
                                            <li><a href="<?php echo esc_url( seoind_get_option( 'link_livechat', '#' ) ); ?>" target="_blank" rel="nofollow noopener noreferrer"><i class="ico-menu livechat"></i><?php esc_html_e( 'Livechat', 'seoind' ); ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Login Menu -->
                        <div id="menu" role="navigation" class="col-6 site-login desktop">
                            <ul id="menu-login" class="login-menu">
                                <li class="sign-up"><a href="<?php echo esc_url( seoind_get_option( 'link_register', '#' ) ); ?>" target="_blank" rel="nofollow noopener noreferrer"><?php esc_html_e( 'Daftar', 'seoind' ); ?></a></li>
                                <li class="sign-in"><a href="<?php echo esc_url( seoind_get_option( 'link_login', '#' ) ); ?>" target="_blank" rel="nofollow noopener noreferrer"><?php esc_html_e( 'Login', 'seoind' ); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Header -->
            <div id="nav-header" role="navigation" class="nav-header header-mobile">
                <div class="container">
                    <div class="row">
                        <label class="deploy-sidebar" for="side-opener"></label>
                        <!-- Logo -->
                        <div id="logo" role="img" class="site-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php
                                if ( has_custom_logo() ) {
                                    the_custom_logo();
                                } else {
                                    echo '<h1>' . esc_html( get_bloginfo( 'name' ) ) . '</h1>';
                                }
                                ?>
                            </a>
                        </div>
                        <!-- Main Menu -->
                        <div id="menu" role="navigation" class="col-10 site-menu desktop">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'menu-games-1',
                                'menu_class'     => 'games-menu',
                                'fallback_cb'    => 'wp_page_menu',
                                'depth'          => 2,
                            ) );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="sticky"></div>
