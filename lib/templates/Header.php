<?php
/**
 *
 *
 * @since
 * @package
 */


namespace Theme\Templates;


use Theme\Abstracts\Template;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Index
 *
 *
 * @since
 * @package
 */
class Header extends Template {

	public $description = "Renders the header, including the primary navigation menu.";
	public $name = "Header Template.";

	public function get_templates() {
		return [
			'header' => 'public',
			'nav' => 'public'
		];
	}
}