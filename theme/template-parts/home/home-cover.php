<?php
        // get_field cover
        $cover = get_field('cover');
        $title = $cover['title'];
        $sub_title = $cover['sub_title'];
        $description = $cover['description'];
        $button_text = $cover['button_text'];
        $button_link = $cover['button_link'];
        $cover_image = $cover['image'];

        // aksen
        $aksen_1 = get_field('aksen_1');
        $aksen_2 = get_field('aksen_2');
        $aksen_3 = get_field('aksen_3');
        ?>
        <section id="cover" class="min-h-screen flex flex-col justify-center items-center py-20 lg:mb-20">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-6 lg:gap-12">
                    <div class="kiri relative">
                        <img class="absolute top-60 -right-20 z-20 hidden lg:block" src="<?php echo get_stylesheet_directory_uri(  ) . '/assets/panah-line.svg'; ?>" alt="">
                        <p class="text-xl"> <?php echo $sub_title; ?></p>
                        <h1 class="text-4xl lg:text-8xl mb-5"><?php echo $title; ?></h1>
                        <p class="text-xl"> <?php echo $description; ?></p>
                        <a href="<?php echo $button_link; ?>" class="btn group flex items-center gap-2 max-w-max mt-4"><?php echo $button_text; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="group-hover:translate-x-2 transition duration-300 ease-in-out">
                                <path fill="currentColor" d="M16.175 13H4v-2h12.175l-5.6-5.6L12 4l8 8l-8 8l-1.425-1.4z" />
                            </svg>
                        </a>
                    </div>
                    <div class="kanan relative z-0">
                        <div class="aksen aksen-1 hidden lg:flex gap-5 items-center rounded-full bg-yellow-50 max-w-[300px] p-3 shadow-2xl">
                            <img src=" <?php echo $aksen_1['icon']['url']; ?>" alt="">
                            <p class="font-mono text-sm"> <?php echo $aksen_1['description']; ?> </p>
                        </div>
                        <div class="aksen aksen-2 hidden lg:flex gap-5 items-center rounded-full bg-yellow-50 max-w-[300px] p-3 shadow-2xl">
                            <img src=" <?php echo $aksen_2['icon']['url']; ?>" alt="">
                            <p class="font-mono text-sm"> <?php echo $aksen_2['description']; ?> </p>
                        </div>
                        <div class="aksen aksen-3 hidden lg:flex gap-5 items-center rounded-full bg-yellow-50 max-w-[300px] p-3 shadow-2xl">
                            <img src=" <?php echo $aksen_3['icon']['url']; ?>" alt="">
                            <p class="font-mono text-sm"> <?php echo $aksen_3['description']; ?> </p>
                        </div>
                        <img src="<?php echo $cover_image; ?>" alt="">

                    </div>
                </div>
            </div>
        </section>