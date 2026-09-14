<?php
/**
 * The footer for our theme
 *
 * @package Seoind
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
        <!-- Footer Section -->
        <footer id="footer" role="contentinfo">
            <!-- Payment Methods -->
            <div id="ico-footer" class="ico-footer">
                <div class="container pd">
                    <div id="payment" class="row payment">
                        <div class="col-12 ico-title"><?php esc_html_e( 'Metode Pembayaran', 'seoind' ); ?></div>
                        <!-- Payment method logos -->
                        <div class="ico-img col-2"><img src="<?php echo esc_url( SEOIND_URI . '/images/payment/dana.png' ); ?>" alt="Dana" width="88" height="35"></div>
                        <div class="ico-img col-2"><img src="<?php echo esc_url( SEOIND_URI . '/images/payment/gopay.png' ); ?>" alt="GoPay" width="88" height="35"></div>
                        <div class="ico-img col-2"><img src="<?php echo esc_url( SEOIND_URI . '/images/payment/ovo.png' ); ?>" alt="OVO" width="88" height="35"></div>
                        <div class="ico-img col-2"><img src="<?php echo esc_url( SEOIND_URI . '/images/payment/linkaja.png' ); ?>" alt="LinkAja" width="88" height="35"></div>
                        <div class="ico-img col-2"><img src="<?php echo esc_url( SEOIND_URI . '/images/payment/shopeepay.png' ); ?>" alt="ShopeePay" width="88" height="35"></div>
                        <div class="ico-img col-2"><img src="<?php echo esc_url( SEOIND_URI . '/images/payment/qris.png' ); ?>" alt="QRIS" width="88" height="35"></div>
                    </div>
                </div>
            </div>

            <!-- Footer Widgets -->
            <div id="footer-widgets" class="footer-widgets">
                <div class="container pd">
                    <div class="row">
                        <div class="col-6 footer-widget-area">
                            <?php
                            if ( is_active_sidebar( 'footer-1' ) ) {
                                dynamic_sidebar( 'footer-1' );
                            }
                            ?>
                        </div>
                        <div class="col-6 footer-widget-area">
                            <?php
                            if ( is_active_sidebar( 'footer-2' ) ) {
                                dynamic_sidebar( 'footer-2' );
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Content -->
            <div id="post" class="post">
                <div class="container pd bt">
                    <div class="row">
                        <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) :
                                the_post();
                                ?>
                                <div class="col-12" id="post-<?php the_ID(); ?>">
                                    <?php the_content(); ?>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div id="copyright" class="copyright">
                <div class="container pd bt">
                    <div class="row">
                        <div class="col-12">
                            <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>. <?php esc_html_e( 'All rights reserved', 'seoind' ); ?> | 18+</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
