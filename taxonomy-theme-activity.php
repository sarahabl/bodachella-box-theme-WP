<?php get_header(); ?>

<h1> <?php single_term_title(); ?> </h1>


<?php if(have_posts()) : ?>
     <?php while (have_posts()) : the_post(); ?>

        <?php echo wp_kses_post( get_field('home__header_title')); ?>
        <?php echo wp_kses_post( get_field('home__header_title')); ?>

     <?php endwhile; ?>
<?php endif; ?>
    

<?php get_footer(); ?>