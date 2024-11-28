<?php 
/**
 * Template Name: Project
 */
get_header();
get_template_part('template-parts/layout/page', 'header');
?>

<?php 
$args = [
    'post_type' => 'portofolio',
    'posts_per_page' => 3, // Mengambil 5 postingan
];

$query = new WP_Query( $args );
?>
<?php if ( $query->have_posts() ) : ?>
    <div class="container mb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php get_template_part('template-parts/content/content', 'project'); ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; 

?>
<?php get_footer(); ?>

