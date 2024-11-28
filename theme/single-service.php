<?php 
get_header();?>

<section>
    <div class="container">
        <div class="6 mb-20">
            <?php
            if (have_posts()) : ?>
                <div class="flex flex-col gap-4">
                    <?php while (have_posts()) : the_post();
                       the_content();
                    endwhile; ?>
                </div>
            <?php endif;
             ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>