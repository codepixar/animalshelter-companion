<?php
/*
 * Plugin Name:       Animalshelter Companion
 * Plugin URI:        https://colorlib.com/wp/themes/animalshelter/
 * Description:       Animalshelter Companion is a companion for Animalshelter theme.
 * Version:           1.0
 * Author:            Colorlib
 * Author URI:        https://colorlib.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       animalshelter-companion
 * Domain Path:       /languages
 */

if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'ANIMALSHELTER_COMPANION_VERSION' ) ) {
    define( 'ANIMALSHELTER_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'ANIMALSHELTER_COMPANION_DIR_PATH' ) ) {
    define( 'ANIMALSHELTER_COMPANION_DIR_PATH', plugin_dir_path( __FILE__ ) );
}

// Define inc dir path constant
if( ! defined( 'ANIMALSHELTER_COMPANION_INC_DIR_PATH' ) ) {
    define( 'ANIMALSHELTER_COMPANION_INC_DIR_PATH', ANIMALSHELTER_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'ANIMALSHELTER_COMPANION_SW_DIR_PATH' ) ) {
    define( 'ANIMALSHELTER_COMPANION_SW_DIR_PATH', ANIMALSHELTER_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'ANIMALSHELTER_COMPANION_EW_DIR_PATH' ) ) {
    define( 'ANIMALSHELTER_COMPANION_EW_DIR_PATH', ANIMALSHELTER_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'ANIMALSHELTER_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'ANIMALSHELTER_COMPANION_DEMO_DIR_PATH', ANIMALSHELTER_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define plugin dir url constant
if( ! defined( 'ANIMALSHELTER_COMPANION_DIR_URL' ) ) {
    define( 'ANIMALSHELTER_COMPANION_DIR_URL', plugin_dir_url( __FILE__ ) );
}


$current_theme = wp_get_theme();

$is_parent = $current_theme->parent();

if( ( 'Animalshelter' ==  $current_theme->get( 'Name' ) ) || ( $is_parent && 'Animalshelter' == $is_parent->get( 'Name' ) ) ) {
    require_once ANIMALSHELTER_COMPANION_DIR_PATH . 'animalshelter-init.php';
} else {

    add_action( 'admin_notices', 'animalshelter_companion_admin_notice', 99 );
    function animalshelter_companion_admin_notice() {
        $url = 'https://wordpress.org/themes/animalshelter/';
    ?>
        <div class="notice-warning notice">
            <p><?php printf( __( 'In order to use the <strong>Animalshelter Companion</strong> plugin you have to also install the %1$sAnimalshelter Theme%2$s', 'animalshelter-companion' ), '<a href="' . esc_url( $url ) . '" target="_blank">', '</a>' ); ?></p>
        </div>
        <?php
    }
}
