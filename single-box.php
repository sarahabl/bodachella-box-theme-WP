<?php get_header(); ?>

    <div class="box-content">
        <h1> <?php echo wp_kses_post( get_field('box__presentation_title')); ?> </h1>
        <div class="box-price"> <?php echo wp_kses_post( get_field('box__presentation_price')); ?> <span> <?php echo wp_kses_post( get_field('box__presentation_mention')); ?> </span></div>
        <div class="box-cta">
            <a href=" <?php echo wp_kses_post( get_field('box__presentation_cta-link')); ?> "> <?php echo wp_kses_post( get_field('
box__presentation_cta-label')); ?> </a>
        </div>
        <div class="box-composition">  <?php echo wp_kses_post( get_field('box__presentation_composition')); ?>  </div>
    </div>
    <div class="photo">
        <img src=" <?php echo wp_kses_post( get_field('box__photo')); ?> " alt="Composition-box-bodachella">
    </div>

<?php get_footer(); ?>