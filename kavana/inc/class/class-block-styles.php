<?php
/**
 * Block Style Class
 *
 * @author Jegstudio
 * @package kavana
 * @since 1.0.0
 */

namespace Kavana;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Init Class
 *
 * @package kavana
 */
class Block_Styles {

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
		$this->register_block_styles();
	}

	/**
	 * Register Block Patterns
	 */
	private function register_block_styles() {
		register_block_style(
			'core/heading',
			array(
				'name'  => 'customheadingstyle',
				'label' => __( 'Custom Heading Style', 'kavana' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonstyle1',
				'label' => __( 'Custom Button Style 1', 'kavana' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonstyle2',
				'label' => __( 'Custom Button Style 2', 'kavana' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonstyle3',
				'label' => __( 'Custom Button Style 3', 'kavana' ),
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'  => 'custombuttonstyle4',
				'label' => __( 'Custom Button Style 4', 'kavana' ),
			)
		);

		register_block_style(
			'core/post-title',
			array(
				'name'  => 'customposttitle',
				'label' => __( 'Custom Post Title', 'kavana' ),
			)
		);

		register_block_style(
			'core/query-title',
			array(
				'name'  => 'customposttitle',
				'label' => __( 'Custom Post Title', 'kavana' ),
			)
		);

		register_block_style(
			'core/navigation',
			array(
				'name'  => 'customnav',
				'label' => __( 'Navigation Padding', 'kavana' ),
			)
		);
	}
}
