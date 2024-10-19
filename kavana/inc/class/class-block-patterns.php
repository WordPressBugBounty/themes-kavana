<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package kavana
 * @since 1.0.0
 */

namespace Kavana;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Init Class
 *
 * @package kavana
 */
class Block_Patterns {

	/**
	 * Instance variable
	 *
	 * @var $instance
	 */
	private static $instance;

	/**
	 * Class instance.
	 *
	 * @return BlockPatterns
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Class constructor.
	 */
	public function __construct() {
		$this->register_block_patterns();
	}

	/**
	 * Register Block Patterns
	 */
	private function register_block_patterns() {
		$block_pattern_categories = array(
			'kavana-basic' => array( 'label' => __( 'Kavana Basic Patterns', 'kavana' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['kavana-gutenverse'] = array( 'label' => __( 'Kavana Gutenverse Patterns', 'kavana' ) );
		}

		$block_pattern_categories = apply_filters( 'kavana_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'core-404-hero',
			'core-archive-blog',
			'core-archive-hero',
			'core-archive-newsletter',
			'core-footer',
			'core-header',
			'core-home-aboutme',
			'core-home-exploretopic',
			'core-home-hero',
			'core-home-latestarticle',
			'core-home-mostpopular',
			'core-home-newsletter',
			'core-index-blog',
			'core-index-hero',
			'core-index-newsletter',
			'core-page-content',
			'core-page-hero',
			'core-page-newsletter',
			'core-search-blog',
			'core-search-content',
			'core-search-hero',
			'core-search-newsletter',
			'core-single-content',
			'core-single-hero',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-404-hero';
			$block_patterns[] = 'gutenverse-about-biografi';
			$block_patterns[] = 'gutenverse-about-exploretopic';
			$block_patterns[] = 'gutenverse-about-hero';
			$block_patterns[] = 'gutenverse-about-my-story';
			$block_patterns[] = 'gutenverse-about-newsletter';
			$block_patterns[] = 'gutenverse-archive-blog';
			$block_patterns[] = 'gutenverse-archive-hero';
			$block_patterns[] = 'gutenverse-archive-newsletter';
			$block_patterns[] = 'gutenverse-contact-hero';
			$block_patterns[] = 'gutenverse-contact-main-bar';
			$block_patterns[] = 'gutenverse-contact-side-bar';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-gallery-hero';
			$block_patterns[] = 'gutenverse-gallery-newsletter';
			$block_patterns[] = 'gutenverse-gallery-photo';
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-home-about-me';
			$block_patterns[] = 'gutenverse-home-exploretopic';
			$block_patterns[] = 'gutenverse-home-hero';
			$block_patterns[] = 'gutenverse-home-latest-article';
			$block_patterns[] = 'gutenverse-home-most-popular';
			$block_patterns[] = 'gutenverse-home-newsletter';
			$block_patterns[] = 'gutenverse-home-popup';
			$block_patterns[] = 'gutenverse-index-blog';
			$block_patterns[] = 'gutenverse-index-hero';
			$block_patterns[] = 'gutenverse-index-newsletter';
			$block_patterns[] = 'gutenverse-page-content';
			$block_patterns[] = 'gutenverse-page-hero';
			$block_patterns[] = 'gutenverse-page-newsletter';
			$block_patterns[] = 'gutenverse-search-blog';
			$block_patterns[] = 'gutenverse-search-content';
			$block_patterns[] = 'gutenverse-search-hero';
			$block_patterns[] = 'gutenverse-search-newsletter';
			$block_patterns[] = 'gutenverse-single-content';
			$block_patterns[] = 'gutenverse-single-hero';
		}

		$block_patterns = apply_filters( 'kavana_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'kavana/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
