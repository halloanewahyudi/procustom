<section class=" lg:pt-20">
    <div class="bg-dark text-slate-50 rounded-t-[100px]">
        <div class="container">
            <div class="max-w-screen-lg mx-autop-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="kiri py-20 relative">
                    <img class="absolute top-36 -right-0 z-20 hidden lg:block" src="<?php echo get_stylesheet_directory_uri(  ) . '/assets/panah-line-white.svg'; ?>" alt="">
                        <?php
                        $jadwal_meeting = get_field('jadwal__meeting');
                        if (get_field('jadwal__meeting')): ?>
                            <h2 class="text-3xl lg:text-6xl mb-5"><?php echo $jadwal_meeting['title'] ?></h2>
                            <p class="text-xl leading-normal"><?php echo $jadwal_meeting['description'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="kanan relative lg:pb-12 flex flex-col justify-center items-center">
                        <div class="p-6 lg:p-10 rounded-2xl bg-white lg:-mt-24 border border-slate-200 shadow-2xl max-w-[460px] mx-auto">
                            <?php echo do_shortcode('[contact-form-7 id="0c8a338" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>