<?php
/**
 *
 *
 * @since
 * @package
 */


namespace Theme\Sidebars;

use Theme\Traits\Theme_Templates;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Sidebar
 *
 *
 * @since
 * @package
 */
class Sidebar extends \Underpin\Abstracts\Sidebar {
	use Theme_Templates;

	public $name = 'Primary Sidebar';

	public $description = 'The primary sidebar for this site.';

	public $sidebar = 'sidebar';

	protected function get_templates() {
		return [
			'sidebar' => 'public',
		];
	}

	protected function get_template_group() {
		return $this->sidebar;
	}
}