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
	<div class="container ">
		<div class="flex gap-5 items-center justify-between">
			<?php if (has_custom_logo()): ?>
				<?php the_custom_logo(); ?>
			<?php else: ?>
				<h1><?php bloginfo('name'); ?></h1>
			<?php endif; ?>

			<button id="btn-menu" aria-controls="primary-menu" aria-expanded="false" class="lg:hidden btn-menu">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
				</svg>
			</button>

			<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'procustom'); ?>" class="site-menu">
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
			<button id="open-contact" class="py-3 px-7 rounded-full bg-primary text-white"> Contact </button>
		</div>
	</div>
</header><!-- #masthead -->
<section id="contact" class="fixed top-0 left-0 w-full h-full min-h-screen flex justify-center items-center p-6 lg:p-10 z-[1002] "> 
		<div id="contact-form" class="max-w-[600px] mx-auto rounded-2xl p-6 lg:p-10 bg-dark text-slate-50 relative overflow-auto">
			<button id="close-contact" class="absolute top-2 right-2 w-7 h-7 rounded-full bg-primary">X</button>
			<h4 class="text-xl mb-5 text-center">Silakan isi pesan pada form di bawah ini, <br>
			 kami akan tindaklanjuti</h4>
			<span>
				<?php echo do_shortcode('[contact-form-7 id="49c0dd1" title="contact form2"]') ?>
			</span>
		</div>
</section>
