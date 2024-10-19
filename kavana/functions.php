<?php
/**
 * Kavana functions and definitions
 *
 * @author Jegstudio
 * @package kavana
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

defined( 'KAVANA_VERSION' ) || define( 'KAVANA_VERSION', '1.0.3' );
defined( 'KAVANA_DIR' ) || define( 'KAVANA_DIR', trailingslashit( get_template_directory() ) );
defined( 'KAVANA_URI' ) || define( 'KAVANA_URI', trailingslashit( get_template_directory_uri() ) );

require get_parent_theme_file_path( 'inc/autoload.php' );
require get_parent_theme_file_path( 'inc/helper.php' );
require get_parent_theme_file_path( 'inc/wptt-webfont-loader.php' );

Kavana\Init::instance();
