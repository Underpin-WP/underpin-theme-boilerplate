<?php
/**
 *
 *
 * @since
 * @package
 */


namespace Theme\Menus;

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
class Menu extends \Underpin\Abstracts\Menu {

	public $name = 'Primary Menu';

	public $description = 'The primary menu for this site.';

	public $location = 'primary';

}