<?php get_header(); ?>

<div class="article-header">
    <div class="article-title"> <?php the_title(); ?> </div>
    <div class="article-description"> <?php the_excerpt(); ?> </div>
    <div class="reading-time"> <?php echo wp_kses_post( get_field('post__header_reading_time')); ?> </div>
</div>

<div class="article-body"> <?php the_content(); ?></div>

<?php get_footer(); ?>