<section class="main-about">
    <img alt="Imagen about" class="main-about__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/image_7@3x.png">
    <div class="container padding-top-bottom">
      <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        ACERCA DE
      </h3>
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Nuestros Servicios
      </h2>
      <p class="main-general__description main-general__description--dark">
        Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per eros massa feugiat imperdiet elementum urna nulla erat.
      </p>
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'servicios', 'posts_per_page' => 4 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="main-about__item">
          <a href="<?php the_permalink(); ?>">
<img alt="icon chat" src="<?php the_field('icono'); ?>">
 <?php the_title(); ?>
</a>


        </div>
<?php endwhile;  ?>
        <!-- <div class="main-about__item">
          <a href="<?php bloginfo('url')?>/interna">
<img alt="icon chat" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_8@2x.png">
Economía Circular
</a>
        </div>
        <div class="main-about__item">
          <a href="<?php bloginfo('url')?>/interna">
<img alt="icon chat" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_9@2x.png">
ODS
</a>
        </div>
        <div class="main-about__item">
          <img alt="icon chat" src="<?php echo get_template_directory_uri(); ?>/assets/img/sprout@2x.png">
          <a href="<?php bloginfo('url')?>/interna">
Cambio Climático
</a>
        </div> -->
      </div>
    </div>
  </section>
  