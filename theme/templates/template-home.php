<?php

/**
 * Template Name: Home
 * 
 * @package procustom
 * @since 1.0.0
 */

get_header();

?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();

        get_template_part('template-parts/home/home', 'cover');
        get_template_part('template-parts/home/home', 'project');
        get_template_part('template-parts/home/home', 'process');
        get_template_part('template-parts/home/home', 'tagline');
        get_template_part('template-parts/home/home', 'meeting');
        get_template_part('template-parts/home/home', 'client');

    // end if content
    endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>