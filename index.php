<?php
/**
 * The main template file
 *
 * @package Seoind
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- Banner Section -->
<div id="banner" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo esc_url( SEOIND_URI . '/images/banner/slider.jpg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="1280" height="720">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Area -->
<div class="bg-row">
    <div class="container">
        <!-- Jackpot Section -->
        <div class="jackpot">
            <div class="row">
                <div class="col-12">
                    <img alt="jackpot maxwin" src="<?php echo esc_url( SEOIND_URI . '/images/banner/jackpot.jpg' ); ?>" width="1280" height="223">
                </div>
            </div>
        </div>

        <!-- Games Section -->
        <div class="top-games">
            <div class="title-row col-12"><i class="svg-new svg-content"></i> <?php esc_html_e( 'New Games', 'seoind' ); ?></div>
            <div class="bg-game">
                <div class="row">
                    <?php get_template_part( 'template-parts/games', 'grid' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Download App Section -->
<div id="apps" role="region" aria-label="Download App" class="download">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="#" target="_blank" rel="nofollow">
                    <img src="<?php echo esc_url( SEOIND_URI . '/images/banner/download.jpg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="1280" height="390">
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
