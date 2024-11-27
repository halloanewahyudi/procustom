<section id="process" class="mb-20">
    <div class="container pb-10">
        <div class="max-w-screen-md mx-auto text-center">
            <?php
            $proses = get_field('proses_section');
            if (get_field('proses_section')): ?>
                <h2 class="text-2xl lg:text-4xl"><?php echo $proses['title'] ?></h2>
                <p class="text-xl"><?php echo $proses['sub_title'] ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="container">
        <?php
        $nomor = 1;
        $slide = new WP_Query([
            'post_type' => 'process'
        ]);
        if ($slide->have_posts()): ?>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-center">
            <div class="kiri">
            <div id="slider2" class="splide" aria-label="">
                <div class="splide__track rounded-2xl overflow-hidden">
                    <ul class="splide__list ">
                        <?php while ($slide->have_posts()) : $slide->the_post(); ?>
                            <div class="splide__slide">
                                    <?php if (has_post_thumbnail()): ?>
                                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="w-full h-auto lg:h-[360px] object-cover  hover:opacity-60 duration-300 rounded-2xl">
                                    <?php endif; ?>
                            </div>
                        <?php endwhile;  ?>
                    </ul>
                </div>
            </div>
            </div> <!-- end kiri -->
            <div class="kanan">
            <div id="slider3" class="splide " aria-label="">
                <div class="splide__track">
                    <ul class="splide__list ">
                        <?php while ($slide->have_posts()) : $slide->the_post(); ?>
                            <div class="splide__slide p-4 lg:p-6 bg-white ">
                                <div class="content">
                                    <div class="flex items-center gap-2 mb-5">
                                    <div class="w-10 h-10 rounded-full shrink-0 text-xl font-medium bg-primary text-white flex items-center justify-center">
                                       <?php echo $nomor; ?>
                                    </div>
                                    <h4 class="text-2xl lg:text-4xl"><?php the_title() ?></h4>
                                    </div>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        <?php 
                            $nomor++;
                        endwhile;  ?>
                    </ul>
                </div>
                <div class="splide__arrows  slider-3-arrows  relative  flex p-4 lg:p-6  items-center gap-4">
        <button class="splide__arrow--prev slider-3-arrow-prev btn flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-arrow-right mr-2" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
          </svg>
          Prev
        </button>

        <button class=" splide__arrow--next slider-3-arrow-next btn flex items-center gap-3">
            Next
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-arrow-right ml-2" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
          </svg>
        </button>
      </div>
            </div>
            </div>
        </div>
            
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</section>