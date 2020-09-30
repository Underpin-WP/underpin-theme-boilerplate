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

</div><!-- #content -->

<footer>
	<nav><?= theme()->menus()->get_menu( 'primary' ) ?></nav>
	<small><em>Love What You Do.</em></small>
</footer>

<?php wp_footer(); ?>

</body>
</html>
