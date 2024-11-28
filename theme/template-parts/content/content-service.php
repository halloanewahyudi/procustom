<div class="service-item">
   <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-8 items-center">
    <div class="shrink-0">
        <?php if (has_post_thumbnail()) : the_post_thumbnail( 'full', array( 'class' => 'w-full h-full object-cover rounded-2xl' ) ); endif; ?>
    </div>
    <div>
        <h2 class="font-medium text-3xl lg:text-6xl"><?php the_title(); ?></h2>
        <?php the_excerpt(10); ?>
        <a href="<?php the_permalink(); ?>" class="btn inline-block mt-4">Read More</a>
    </div>
   </div>
</div>