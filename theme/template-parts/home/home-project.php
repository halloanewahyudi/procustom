<section id="project" class="mb-20">
  <div class="container pb-10">
    <div class="max-w-screen-md mx-auto text-center ">
      <?php
      $project = get_field('project_section');
      if (get_field('proses_section')): ?>
        <h2 class="text-2xl lg:text-4xl"><?php echo $project['title'] ?></h2>
        <p class="text-xl"><?php echo $project['sub_title'] ?></p>
      <?php endif; ?>
    </div>
  </div>
  <?php
  // Query untuk post type 'portofolio'
  $args = [
    'post_type' => 'portofolio',
    'posts_per_page' => 5, // Menampilkan semua postingan
  ];
  $slide = new WP_Query($args);
  if ($slide->have_posts()): // Perbaikan: Menggunakan have_posts() yang benar
  ?>
    <!-- Slider container -->
    <div id="slider1" class="splide" aria-label="Splide Basic HTML Example">
      <div class="splide__track">
        <ul class="splide__list">
          <?php while ($slide->have_posts()): $slide->the_post(); ?>
            <!-- Slide item -->
            <li class="splide__slide rounded-2xl bg-black text-white overflow-hidden lg:w-[480px] h-[300px]">
              <div class="relative">
                <?php if (has_post_thumbnail()): ?>
                  <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="w-full  h-[300px] object-cover opacity-85 hover:opacity-60 duration-300">
                <?php endif; ?>
                <div class="absolute p-4 lg:p-6 z-20 bottom-0 left-0">
                  <h4 class="text-xl"><?php the_title() ?></h4>
                  <?php if (get_field('description')): ?>
                    <p><?php the_field('description'); ?></p>
                  <?php endif; ?>
                  <?php if (get_field('visit_web')): ?>
                    <a href="<?php echo get_field('visit_web'); ?>" target="_blank" rel="" class="italic text-secondary hover:text-primary duration-300 flex items-center gap-2">
                      Visite website
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="group-hover:translate-x-2 transition duration-300 ease-in-out">
                        <path fill="currentColor" d="M16.175 13H4v-2h12.175l-5.6-5.6L12 4l8 8l-8 8l-1.425-1.4z" />
                      </svg>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <div class="splide__arrows max-w-[280px] mx-auto relative mt-8 flex justify-center items-center gap-4">
        <button class="splide__arrow splide__arrow--prev !bg-primary !p-5 !text-white ">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-arrow-right !text-white !fill-white absolute" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
          </svg>
        </button>
        <a href="#" class="btn">selengkapnya</a>
        <button class="splide__arrow splide__arrow--next  !bg-primary !p-5 text-white ">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#fff" class="bi bi-arrow-right !text-white !fill-white absolute" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
          </svg>
        </button>
      </div>
    </div>
    </div>
  <?php endif;
  wp_reset_postdata(); ?>
</section>