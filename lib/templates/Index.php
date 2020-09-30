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
class Index extends Template {

	public $description = "Renders the home page.";
	public $name = "Index Template.";

	public function get_templates() {
		return [
			'loop'     => 'public',
			'post'     => 'public',
			'no-posts' => 'public',
		];
	}
}