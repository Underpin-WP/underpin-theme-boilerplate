<?php
/**
 * Sorry developer, but your code is in another castle.
 *
 * Underpin manages everything inside the templates directory, using the template system.
 *
 * You're probably looking for /templates/index/loop.php
 */
?>
<?php
get_header();
theme()->logger()->log( 'error', 'error_test', 'This is an error test', [
	'test' => 'this',
] );
echo theme()->templates()->get_template( 'index', 'loop' );
get_footer();