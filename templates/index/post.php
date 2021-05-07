<?php
/**
 * Index Loop Template
 *
 * @author: Alex Standiford
 * @date  : 12/21/19
 * @var Theme\Abstracts\Template $template
 */

if ( ! theme()->templates()->is_valid_template( $template ) ) {
	return;
}

?>
<article>
	<h2><?php the_title() ?></h2>
	<p><?php the_excerpt() ?></p>
</article>