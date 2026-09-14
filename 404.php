<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Seoind
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- 404 Error Section -->
<div class="bg-row">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'seoind' ); ?></h1>
                    </header>

                    <div class="page-content">
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'seoind' ); ?></p>

                        <?php get_search_form(); ?>

                        <nav class="post-navigation">
                            <h2 class="screen-reader-text"><?php esc_html_e( 'Posts navigation', 'seoind' ); ?></h2>
                            <div class="nav-links">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="post-page-link"><?php esc_html_e( 'Back to Home', 'seoind' ); ?></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
