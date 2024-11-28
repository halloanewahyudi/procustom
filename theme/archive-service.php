<?php

/**
 * Template Name: Portofolio
 */
get_header();
// get_template_part('template-parts/layout/page', 'header');
?>
<section class="page-header">
    <div class="container">
        <div class="max-w-screen-md mx-auto text-center min-h-[480px] flex flex-col justify-center items-center gap-5 pt-20">
            <h1 class="title text-4xl lg:text-6xl"> 
                Layanan Kami
            </h1>
          <!--  <p class="sub-title"> Kami membuat website sejak 2010 </p> -->
        </div>
    </div>
</section>
<section class="mb-20">
    <div class="container">
        <div class="max-w-screen-lg mx-auto ">
        <?php
        if (have_posts()) : ?>
            <div class="flex flex-col gap-5 lg:gap-12">
                <?php while (have_posts()) : the_post();
                    get_template_part('template-parts/content/content', 'service');
                endwhile; ?>
            </div>
        <?php endif;
         ?>
              </div>
    </div>
    <div class="pt-10 inline-block text-center text-sm w-full">
        <?php pagination()?>
        </div>
</section>


<?php
get_footer();
?>