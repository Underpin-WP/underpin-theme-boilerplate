<?php
use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Fetches the instance of the plugin.
 * This function makes it possible to access everything else in this plugin.
 * It will automatically initiate the plugin, if necessary.
 * It also handles autoloading for any class in the plugin.
 *
 * @since 1.0.0
 *
 * @return \Underpin\Factories\Underpin_Instance The bootstrap for this theme.
 */
function theme() {
	return Underpin::make_class( [
		'root_namespace'      => 'Theme',
		'text_domain'         => 'theme',
		'minimum_php_version' => '7.0',
		'minimum_wp_version'  => '5.1',
		'version'             => '1.0.0',
	] )->get( __FILE__ );
}

//Instantiate, and set up the template loader.
theme()->loaders()->add( 'templates', [ 'registry' => 'Theme\Loaders\Templates' ] );

/**
 * Templates.
 *
 * Underpin comes with a powerful template loading system, and this boilerplate expands on that with a template loader.
 * Below, you will see a few basic pre-set loaders built inline.
 *
 * These can be built inline as shown below, but they can also be added as a class that extends
 * Theme/Abstracts/Template. In circumstances where your template needs to prefetch a lot of data before render, it's
 * probably better to create a class, add your data, and then pass that data to the template.
 *
 * For more information, check out Underpin loader documentation here: https://github.com/underpin-WP/underpin#loaders
 *
 * Additionally, check out more information on how the template system works here:
 * https://github.com/underpin-WP/underpin#template-system-trait
 */

/**
 * Home Template
 */
theme()->templates()->add( 'index', [
	'description' => "Renders the home page.",
	'name'        => "Index Template.",
	'group'       => 'index',
	'templates'   => [
		'loop'     => [ 'override_visibility' => 'public' ],
		'post'     => [ 'override_visibility' => 'public' ],
		'no-posts' => [ 'override_visibility' => 'public' ],
	],
] );

/**
 * Header Template
 */
theme()->templates()->add( 'header', [
	'description' => "Renders the header.",
	'name'        => "Header Template.",
	'group'       => 'header',
	'templates'   => [
		'header' => [ 'override_visibility' => 'public' ],
	],
] );

/**
 * Footer Template
 */
theme()->templates()->add( 'footer', [
	'description' => "Renders the home page.",
	'name'        => "Index Template.",
	'group'       => 'footer',
	'templates'   => [
		'footer' => [ 'override_visibility' => 'public' ],
	],
] );