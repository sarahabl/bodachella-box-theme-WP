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




    <div class="activity">
        <!-- Header Section -->
        <header class="activity__header">
            <h1> <?php echo wp_kses_post( get_field('activity__header_title')); ?> </h1>
            <img src="<?php the_field('activity__header_image'); ?>" alt="Image de l'activité">
            <span class="activity__header_duration">
                Durée : <?php the_field('activity__header_duration'); ?> heures
            </span>
        </header>
        
        <!-- Content Section -->
        <section class="activity__content">
            <!-- Description -->
            <div class="activity__content_description">
                <h2>Description</h2>
                <p><?php the_field('activity__content_description'); ?></p>
            </div>
            
            <!-- Ce qui est inclu -->
            <div class="activity__content_include">
                <h2>Ce qui est inclus</h2>
                <ul>
                    <?php if (have_rows('activity__content_include')) : ?>
                        <?php while (have_rows('activity__content_include')) : the_row(); ?>
                            <li><?php the_sub_field('activity__content_include_detail'); ?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            
            <!-- Pourquoi cette activité ? -->
            <div class="activity__content_benefices">
                <h2>Pourquoi cette activité ?</h2>
                <ul>
                    <?php if (have_rows('activity__content_benefices')) : ?>
                        <?php while (have_rows('activity__content_benefices')) : the_row(); ?>
                            <li><?php the_sub_field('activity__content_benefices_details'); ?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            
            <!-- Pour quel type d'EVJF ? -->
            <div class="activity__content_group-info">
                <h2>Pour quel type d'EVJF ?</h2>
                <ul>
                    <?php if (have_rows('activity__content_group-info')) : ?>
                        <?php while (have_rows('activity__content_group-info')) : the_row(); ?>
                            <li><?php the_sub_field('activity__content_group-info_details'); ?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- Personnalisation -->
            <div class="activity__content_group-info">
                <h2>Personnalisation</h2>
                <ul>
                    <?php if (have_rows('activity__content_personnalisation')) : ?>
                        <?php while (have_rows('activity__content_personnalisation')) : the_row(); ?>
                            <li><?php the_sub_field('activity__content_personnalisation_details'); ?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

<?php get_footer(); ?>