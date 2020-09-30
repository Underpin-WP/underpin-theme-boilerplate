<?php
/**
 * Header Template
 *
 * @author: Alex Standiford
 * @date  : 12/21/19
 */

if ( ! theme()->templates()->is_valid_template( $template ) ) {
	return;
}
?>

<header>
	<nav><?= theme()->menus()->get_menu( 'primary' ) ?></nav>
	<?php the_custom_logo(); ?>
</header>