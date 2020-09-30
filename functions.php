<?php
/**
 * $FILE_DESCRIPTION
 *
 * @since   $VERSION
 * @package $PACKAGE
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


// Setup Underpin
require_once( plugin_dir_path( __FILE__ ) . 'vendor/autoload.php' );

// Load in the bootstrap that runs the rest of the plugin.
require_once( plugin_dir_path( __FILE__ ) . 'lib/Service_Locator.php' );

/**
 * Fetches the instance of the plugin.
 * This function makes it possible to access everything else in this plugin.
 * It will automatically initiate the plugin, if necessary.
 * It also handles autoloading for any class in the plugin.
 *
 * @since 1.0.0
 *
 * @return Theme\Service_Locator|Underpin\Abstracts\Underpin The bootstrap for this plugin
 */
function theme() {
	return ( new Theme\Service_Locator )->get( __FILE__ );
}

//Instantiate, and set up the theme.
theme();