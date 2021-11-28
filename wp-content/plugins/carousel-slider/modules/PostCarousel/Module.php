<?php

namespace CarouselSlider\Modules\PostCarousel;

use CarouselSlider\Helper;
use CarouselSlider\Supports\Validate;

defined( 'ABSPATH' ) || exit;

class Module {
	/**
	 * The instance of the class
	 *
	 * @var self
	 */
	protected static $instance;

	/**
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @return self
	 */
	public static function init() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();

			add_filter( 'carousel_slider/register_view', [ self::$instance, 'view' ] );
			Admin::init();
		}

		return self::$instance;
	}

	/**
	 * Render view
	 *
	 * @param array $views
	 *
	 * @return array
	 */
	public function view( array $views ): array {
		$views['post-carousel'] = new View();

		return $views;
	}
}
