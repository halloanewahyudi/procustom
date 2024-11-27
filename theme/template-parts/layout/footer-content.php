<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package procustom
 */

?>

<footer id="colophon" class="bg-dark text-slate-300 pt-20 pb-2">

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<aside role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'procustom' ); ?>">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside>
	<?php endif; ?>

	<div class="p-2 inline-block text-center text-sm w-full text-slate-400">
	Copyright © 2022 | PT. Proweb Indonesia | All Rights Reserved
	</div>

</footer><!-- #colophon -->
