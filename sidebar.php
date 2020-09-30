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

$sidebar = theme()->sidebars()->get( 'sidebar' );

if ( ! is_wp_error( $sidebar ) ) {
	/** @noinspection PhpUndefinedMethodInspection */
	echo $sidebar->get_template( 'sidebar' );
}