<?php
/**
 * The template for displaying single posts
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
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content' ); ?>>
                                <header class="entry-header">
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                    <div class="entry-meta">
                                        <span class="posted-on"><?php echo esc_html( get_the_date() ); ?></span>
                                        <span class="byline"> <?php esc_html_e( 'by', 'seoind' ); ?> <?php the_author(); ?></span>
                                    </div>
                                </header>

                                <?php
                                if ( has_post_thumbnail() ) :
                                    ?>
                                    <div class="entry-thumbnail">
                                        <?php the_post_thumbnail( 'large' ); ?>
                                    </div>
                                    <?php
                                endif;
                                ?>

                                <div class="entry-content">
                                    <?php
                                    the_content();
                                    wp_link_pages( array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seoind' ),
                                        'after'  => '</div>',
                                    ) );
                                    ?>
                                </div>

                                <footer class="entry-footer">
                                    <?php
                                    the_tags( '<span class="tag-links">', ', ', '</span>' );
                                    ?>
                                </footer>
                            </article>
                            <?php
                            // Comments
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        endwhile;
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
