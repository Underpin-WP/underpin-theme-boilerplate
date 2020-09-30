<?php
/**
 * Index Loop Template
 *
 * @author: Alex Standiford
 * @date  : 12/21/19
 */

if ( ! theme()->templates()->is_valid_template( $template ) ) {
	return;
}
?>
<div>
	<?= theme()->__('Sorry, there is no content to show.') ?>
</div>