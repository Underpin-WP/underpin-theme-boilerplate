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

	protected function get_template_group() {
		return theme()->templates()->get_key( $this );
	}
}