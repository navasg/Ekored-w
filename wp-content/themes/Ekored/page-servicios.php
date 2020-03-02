<?php get_header(); ?>

  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/servicios/image@3x.png')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Servicios
      </h2>
    </div>
  </section>
  <section class="services-content">
    <div class="container padding-top-bottom">
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'servicios', 'posts_per_page' => 4 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="services-card">
          <span class="service-card__line"></span>
          <div class="services-card__img">
            <img alt="imagen servicio" src="<?php echo get_template_directory_uri(); ?>/assets/img/servicios/service4.png">
          </div>
          <div class="services-card__body">
            <a class="services-title" href="<?php the_permalink(); ?>">
              <img alt="icono servicio" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/sprout@2x.png">
              <?php the_title(); ?>
            </a>
            <p class="services-description">
            <?php the_content(); ?>
            </p>
          </div>
        </div>


        <?php endwhile;  ?>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>