<section class="bg-dark text-slate-50 pt-5 ">
    <div class="container">
    <?php
$args = [
    'post_type'      => 'client',
    'posts_per_page' => 5, // Mengambil 5 postingan
];
$client = new WP_Query($args);
if ($client->have_posts()): ?>
    <div id="slider4" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php 
                $slides = [];
                while ($client->have_posts()): 
                    $client->the_post(); 
                    $slides[] = '<li class="splide__slide">
                                    <img src="' . get_the_post_thumbnail_url() . '" alt="">
                                 </li>';
                endwhile;

                // Tampilkan slide asli
                foreach ($slides as $slide) {
                    echo $slide;
                }

                // Gandakan slide untuk mengisi kekosongan
                foreach ($slides as $slide) {
                    echo $slide;
                }
                ?>
            </ul>
        </div>
    </div>
<?php
endif;
wp_reset_postdata();
?>

    </div>
</section>