<?php
/**
 * Template part for games grid
 *
 * @package Seoind
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Games data
$games = array(
    array( 'name' => 'Sword of Ares', 'image' => 'Sword-of-Ares.webp' ),
    array( 'name' => 'Alchemy Gold', 'image' => 'Alchemy-Gold.webp' ),
    array( 'name' => 'Football Finals X UP', 'image' => 'Football-Finals-X-UP.webp' ),
    array( 'name' => 'Mobox Olympia', 'image' => 'Mobox-Olympia.webp' ),
    array( 'name' => 'Power Of Thor', 'image' => 'Power-Of-Thor.webp' ),
    array( 'name' => 'Tiger New Year', 'image' => 'Tiger-New-Year.webp' ),
);

foreach ( $games as $game ) :
    ?>
    <div class="col-2">
        <div class="column">
            <div class="game-image">
                <div class="image-wrapper">
                    <img alt="<?php echo esc_attr( $game['name'] ); ?>" src="<?php echo esc_url( SEOIND_URI . '/images/game/home/jackpot/' . $game['image'] ); ?>" width="200" height="200">
                </div>
                <div class="game-title"><?php echo esc_html( $game['name'] ); ?></div>
            </div>
        </div>
    </div>
    <?php
endforeach;
