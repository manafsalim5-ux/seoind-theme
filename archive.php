<?php
/**
 * The template for displaying archive pages
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
        <div class="row">
            <div class="col-8">
                <main id="main" role="main" class="site-main">
                    <header class="page-header">
                        <h1 class="page-title">
                            <?php
                            if ( is_category() ) {
                                single_cat_title();
                            } elseif ( is_tag() ) {
                                single_tag_title();
                            } elseif ( is_author() ) {
                                the_author();
                            } else {
                                esc_html_e( 'Archives', 'seoind' );
                            }
                            ?>
                        </h1>
                        <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
                    </header>

                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-preview' ); ?>>
                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="entry-meta"><?php echo esc_html( get_the_date() ); ?></div>
                                <div class="entry-excerpt"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'seoind' ); ?></a>
                            </article>
                            <?php
                        endwhile;

                        // Pagination
                        the_posts_pagination( array(
                            'prev_text' => esc_html__( 'Previous', 'seoind' ),
                            'next_text' => esc_html__( 'Next', 'seoind' ),
                        ) );
                    else :
                        ?>
                        <p><?php esc_html_e( 'No posts found.', 'seoind' ); ?></p>
                        <?php
                    endif;
                    ?>
                </main>
            </div>
            <div class="col-4">
                <aside id="sidebar" role="complementary" class="sidebar">
                    <?php
                    if ( is_active_sidebar( 'primary-sidebar' ) ) {
                        dynamic_sidebar( 'primary-sidebar' );
                    }
                    ?>
                </aside>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
