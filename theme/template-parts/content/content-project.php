<?php

/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package procustom
 */

?>
<div class="porto-item">
    <?php if (has_post_thumbnail()): ?>
        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="w-full h-[300px] object-cover rounded-2xl mb-3">
    <?php endif; ?>
    <div>
        <h4 class="font-medium"><?php the_title(); ?></h4>
        <?php
        if (get_field('description')):
            echo get_field('description');
        endif; ?>
        <!-- visit web -->
        <?php if (get_field('visit_web')): ?>
            <a href="<?php echo get_field('visit_web'); ?>" target="_blank" rel="" class="italic text-primary hover:text-secondary duration-300 flex items-center gap-2">
                Visit website
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="group-hover:translate-x-2 transition duration-300 ease-in-out">
                    <path fill="currentColor" d="M16.175 13H4v-2h12.175l-5.6-5.6L12 4l8 8l-8 8l-1.425-1.4z" />
                </svg>
            </a>
        <?php endif; ?>
    </div>
</div>