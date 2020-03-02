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
      Somos una compañía enfocada en el diseño y operación de un modelo sostenible que nos permite que el reciclaje de productos posindustriales se puedan incorporar a la cadena de abastecimiento mediante un modelo de economía circular que incluye recicladores, bodegas e industria; permitiendo reducir el impacto ambiental y generar una transformación social y ambiental.
      <br>  
      Siendo una filial de Enka de Colombia, contamos con el reconocimiento nacional por el aporte al progreso sostenible, a través de la captación, separación, compactación y comercialización de material reciclado, aportando en la disminución de la explotación de los recursos naturales y la generación de empleo.
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
       
      </div>
    </div>
  </section>
  