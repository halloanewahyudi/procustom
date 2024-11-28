<section class="page-header">
    <div class="container">
        <div class="max-w-screen-md mx-auto text-center min-h-[380px] flex flex-col justify-center items-center pt-20">
            <h1 class="text-4xl lg:text-6xl"> <?php the_title(); ?> </h1>
            <?php $sub_title = get_field('sub_title'); echo $sub_title; 
            if ($sub_title):?>
            <p><?php echo $sub_title; ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>