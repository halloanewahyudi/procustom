<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package procustom
 */

?>

<header id="masthead " class="navbar py-2 fixed top-0 left-0 w-full z-[1000]">
	<div class="container">
		<div class="flex gap-5 items-center justify-between">
			<?php if (has_custom_logo()): ?>
				<?php the_custom_logo(); ?>
			<?php else: ?>
				<h1><?php bloginfo('name'); ?></h1>
			<?php endif; ?>

			<button aria-controls="primary-menu" aria-expanded="false" class="lg:hidden">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
				</svg>
			</button>

			<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'procustom'); ?>" class="">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<a href="#" class="py-3 px-7 rounded-full bg-primary text-white"> Contact </a>
		</div>
	</div>
</header><!-- #masthead -->
<script>
	// masthead di scroll bg white
	const header = document.querySelector('.navbar');

	window.addEventListener('scroll', () => {
		if (window.scrollY > 0) {
			header.classList.add('scrolled');
		} else {
			header.classList.remove('scrolled');
		}
	});
</script>