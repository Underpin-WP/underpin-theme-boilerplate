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
class Footer extends Template {

	public $description = "Renders the footer content.";
	public $name = "Footer Template.";

	public function get_templates() {
		return [
			'footer' => 'public',
		];
	}
}