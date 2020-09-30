<?php
/**
 * Service Locator for Plugin.
 * This file is the entry point for all files and functionality.
 * It is a singleton, and is accessed using plugin_name_replace_me()
 *
 * @since 1.0.0
 */

namespace Theme;

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Service Locator.
 * Handles autoloading, and service location. Check out the Underpin Class's logger method
 * for an example on how to set up a singleton that is accessed through this bootstrap.
 *
 * @since 1.0.0
 */
final class Service_Locator extends Underpin {

	/**
	 * The namespace for any loaders.
	 * The locator will look here before falling back to the default loader class.
	 * Feel free to change this to whatever namespace you want to use for your loaders.
	 *
	 * @since 1.0.0
	 *
	 * @var string
	 */
	protected $root_namespace = 'Theme';

	/**
	 * Current version of this plugin. Bump this when you update.
	 *
	 * @since 1.0.0
	 *
	 * @var string The current version of this plugin
	 */
	protected $version = '1.0.0';

	/**
	 * The minimum WP version for this plugin.
	 *
	 * @since 1.0.0
	 *
	 * @var string The minimum WP version for this plugin.
	 */
	protected $minimum_wp_version = '5.0';

	/**
	 * The minimum PHP version for this plugin.
	 *
	 * @since 1.0.0
	 *
	 * @var string The minimum PHP version.
	 */
	protected $minimum_php_version = '5.6';

	/**
	 * Fetches the template loader
	 *
	 * @return Loaders\Templates
	 */
	public function templates() {
		return $this->_get_loader( 'Templates' );
	}

	/**
	 * Set up active loader classes.
	 *
	 * This is where you can add anything that needs "registered" to WordPress,
	 * such as shortcodes, rest endpoints, blocks, and cron jobs.
	 *
	 * @since 1.0.0
	 */
	protected function _setup() {

		// Sets up the primary sidebar
		$this->sidebars()->add( 'sidebar', 'Theme\Sidebars\Sidebar' );

		// Sets up the primary menu
		$this->menus()->add( 'primary', 'Theme\Menus\Menu' );

		// Sets up templates
		$this->templates()->add( 'index', 'Theme\Templates\Index' );
		$this->templates()->add( 'header', 'Theme\Templates\Header' );
		$this->templates()->add( 'footer', 'Theme\Templates\Footer' );
	}
}