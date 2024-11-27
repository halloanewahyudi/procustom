<section id="tagline" class="mb-20">
    <div class="container">
        <div class="max-w-screen-md mx-auto">
            <?php 
            $tagline = get_field('tagline');
            if (get_field('tagline')): ?>
                <h2 class="text-2xl lg:text-4xl text-center mb-2"><?php echo $tagline['title'] ?></h2>
                <p class="text-xl text-center mb-10"><?php echo $tagline['sub_title'] ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>