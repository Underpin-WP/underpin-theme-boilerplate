<?php
/**
 * Template Loader Trait
 * Handles template loading and template inheritance.
 *
 * @since   1.0.0
 * @package Underpin\Traits
 */

namespace Theme\Traits;

use Underpin\Traits\Templates;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme-specific Template Trait.
 * Creates templates based off of the location of Underpin.
 *
 * @since   1.0.0
 * @package underpin\traits
 */
trait Theme_Templates {
	use Templates;

	protected function get_template_root_path() {
		return theme()->template_dir();
	}

}