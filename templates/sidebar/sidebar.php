<?php
/**
 * Sidebar Template
 *
 * @author: Alex Standiford
 * @date  : 12/21/19
 * @var Theme\Abstracts\Template $template
 */

if ( ! theme()->templates()->is_valid_template( $template ) ) {
	return;
}
?>
<div id="sidebar-primary" class="sidebar">
	<?php if ( is_active_sidebar( $template->sidebar ) ) : ?>
		<?php dynamic_sidebar( $template->sidebar ); ?>
	<?php endif; ?>
</div>