<?php
/**
 *
 *
 * @since
 * @package
 */

namespace Theme\Abstracts;

use Theme\Traits\Theme_Templates;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Template
 *
 *
 * @since
 * @package
 */
abstract class Template {
	use Theme_Templates;

	protected $templates = [];
	protected $group     = '';

	public function get_templates() {
		return $this->templates;
	}

	protected function get_template_group() {
		return $this->group;
	}

}