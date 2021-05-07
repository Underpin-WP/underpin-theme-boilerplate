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
<main>
	<?php if ( have_posts() ): ?>
		<?php while ( have_posts() ): the_post(); ?>
			<?= $template->get_template( 'post' ); ?>
		<?php endwhile; ?>
	<?php else: ?>
		<?= $template->get_template( 'no-posts' ); ?>
	<?php endif; ?>
	<?php get_sidebar(); ?>
</main>