<?php
/**
 * The template for displaying comments
 *
 * @package Seoind
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php
    if ( have_comments() ) :
        ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ( 1 === $comment_count ) {
                esc_html_e( '1 Comment', 'seoind' );
            } else {
                echo esc_html( sprintf( _n( '%s Comment', '%s Comments', $comment_count, 'seoind' ), $comment_count ) );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
            ) );
            ?>
        </ol>

        <?php
        the_comments_pagination( array(
            'prev_text' => esc_html__( 'Older Comments', 'seoind' ),
            'next_text' => esc_html__( 'Newer Comments', 'seoind' ),
        ) );
    endif;

    comment_form();
    ?>
</div>
