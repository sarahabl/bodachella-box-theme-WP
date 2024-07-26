<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

<?php get_header(); ?>

<section class="hero">
  <div class="hero__left">
    <h3 class="hero__subtitle"><?php echo wp_kses_post( get_field('home__header_subtitle')); ?></h3>
    <h1 class="hero__title"><?php echo wp_kses_post( get_field('home__header_title')); ?></h1>
    <p class="hero__description"><?php echo wp_kses_post( get_field('home__header_description')); ?></p>
    <div class="hero__cta">
      <a href="<?php echo esc_url( get_field('home__header_cta_link')); ?>" class="hero__cta-button"><?php echo esc_html( get_field('home__header_cta_label')); ?></a>
    </div>
  </div>
  <div class="hero__right"> 
    <div class="hero__right_image">
      <img src="<?php echo esc_url( get_field('home__header_img')); ?>" alt="Plein d'activités" class="hero__image">
    </div>
  </div>
</section>

<section class="concept">
  <div class="concept__container">
    <h3 class="concept__container_subtitle"><?php echo wp_kses_post( get_field('home__concept_subtitle')); ?></h3>
    <h2 class="concept__container_title"><?php echo wp_kses_post( get_field('home__concept_title')); ?></h2>
    <p class="concept__container_description"><?php echo wp_kses_post( get_field('home__concept_description')); ?></p>
  </div>
</section>

<section class="box">
  <div class="box__container">
    <h3 class="box__subtitle"><?php echo wp_kses_post( get_field('home__box_subtitle')); ?></h3>
    <h2 class="box__title"><?php echo wp_kses_post( get_field('home__box_title')); ?></h2>
    <p class="box__description"><?php echo wp_kses_post( get_field('home__box_description')); ?></p>
    <div class="box__items">
      <?php if(have_rows('home__box_presentation')) : ?>
        <?php while (have_rows('home__box_presentation')) : the_row(); ?>
          <div class="box__item">
            <img src="<?php echo esc_url( get_sub_field('home__box_presentation_image')); ?>" alt="" class="box__item_image">
            <h3 class="box__item_title"><?php echo esc_html( get_sub_field('home__box_presentation_title')); ?></h3>
            <p class="box__item_description"><?php echo wp_kses_post( get_sub_field('home__box_presentation_description')); ?></p>
            <a href="<?php echo esc_url( get_sub_field('home__box_presentation_cta_link')); ?>" class="box__item-cta_button"><?php echo esc_html( get_sub_field('home__box_presentation_cta_label')); ?></a>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p class="box__no-items">Aucune box disponible pour le moment.</p>
      <?php endif; ?>  
    </div>
  </div>
</section>

<section class="values">
  <div class="values__container">
    <h3 class="values__subtitle"><?php echo wp_kses_post( get_field('home__values_subtitle')); ?></h3>
    <h2 class="values__title"><?php echo wp_kses_post( get_field('home__values_title')); ?></h2>
    <div class="values__items">
      <?php if(have_rows('home__values_presentation')) : ?>
        <?php while (have_rows('home__values_presentation')) : the_row(); ?>
          <div class="values__item">
            <img src="<?php echo esc_url( get_sub_field('home__values_presentation_image')); ?>" alt="" class="values__item-image">
            <div class="values__item-details">
              <h3 class="values__item-title"><?php echo esc_html( get_sub_field('home__values_presentation_title')); ?></h3>
              <p class="values__item-description"><?php echo wp_kses_post( get_sub_field('home__values_presentation_description')); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p class="values__no-items">Aucune valeur disponible pour le moment.</p>
      <?php endif; ?>    
    </div>
  </div>
</section>


<section class="blog">
  <div class="blog__container">
    <h3 class="blog__subtitle"><?php echo wp_kses_post( get_field('home__blog_subtitle')); ?></h3>
    <h2 class="blog__title"><?php echo wp_kses_post( get_field('home__blog_title')); ?></h2>
    <p class="blog__description"><?php echo wp_kses_post( get_field('home__blog_description')); ?></p>
  </div>
  <div class="blog__grid">
    <?php 
    $blog_posts = new WP_Query(array(
        'posts_per_page' => 3, // Nombre de posts à afficher
        'post_type' => 'post' // Type de post (article de blog)
    ));
    ?>
    <?php if ($blog_posts->have_posts()) : ?>
      <?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
        <div class="blog__post">
          <div class="blog__post-image-container">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('full', ['class' => 'blog__post-image']); ?>
              </a>
            <?php endif; ?>
          </div>
          <div class="blog__post-details">
            <h3 class="blog__post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="blog__post-excerpt"><?php the_excerpt(); ?></p>
            <div class="blog__post-cta">
              <a href="<?php the_permalink(); ?>" class="blog__post-cta-button">Lire la suite</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p class="blog__no-posts">Aucun article disponible pour le moment.</p>
    <?php endif; ?>  
  </div>
</section>

<?php get_footer(); ?>
