<?php get_header(); ?>

  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/servicios/image@3x.png')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Quienes somos
      </h2>
    </div>
  </section>
  <section class="general-colum">
    <div class="container padding-top-bottom">
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'about', 'posts_per_page' => 1 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="general-colum__img">
          <img alt="img" src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
        <div class="general-colum__text">
          <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            ACERCA DE
          </h3>
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          <?php the_title(); ?>
          </h2>
          <p class="main-general__description main-general__description--dark">
              <?php the_content(); ?>
          </p>
          <!-- <p class="main-general__description main-general__description--dark">
            ENKA DE COLOMBIA consciente de la necesidad de cerrar el ciclo de vida del PET y aprovechando su conocimiento y experiencia en la producción de resina y fibras sintéticas, desarrolló un ambicioso proyecto para recuperar las botellas de PET y transformarlas
            mediante proyectos de alta tecnología en resinas, fibras y filamentos, los cuales son empleados en múltiples usos textiles o plásticos con propiedades similares a aquellos provenientes de la cadena petroquímica.
          </p>
          <p class="main-general__description main-general__description--dark">
            Con el lema ¡Nosotros PETciclamos! el proyecto PETCICLO de Cooperenka generó alternativas de desarrollo y sostenimiento, con el fortalecimiento de la Red de Reciclaje Nacional, este bonito proyecto se fortalece con el departamento de la multiactividad
            de COOPERENKA, desarrollado en los últimos 40 años.
          </p>
          <p class="main-general__description main-general__description--dark">
            Continuado con este proyecto sustentable la alianza PETCICLO + EKO = EKORED como EMPRESA VERDE será reconocida por su triple estrategia de valor:
          </p> -->
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </section>
  <section class="about-icons">
    <div class="container container-grid">
      <div class="about-icons__item wow animated fadeIn" style="visibility: visible; animation-delay: .1s  ;">
        <div class="about-icons__img">
          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/nosotros/plant@3x.png">
        </div>
        <div class="main-general__description main-general__description--dark">
          Responsabilidad social empresarial
        </div>
      </div>
      <div class="about-icons__item wow animated fadeIn" style="visibility: visible; animation-delay: .2s  ;">
        <div class="about-icons__img">
          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/nosotros/plant@3x.png">
        </div>
        <div class="main-general__description main-general__description--dark">
          Responsabilidad ambiental empresarial
        </div>
      </div>
      <div class="about-icons__item wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        <div class="about-icons__img">
          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/nosotros/plant@3x.png">
        </div>
        <div class="main-general__description main-general__description--dark">
          Crecimiento económico
        </div>
      </div>
    </div>
  </section>


  <!-- section de enfoque  -->


  <section class="about-history">
    <div class="container padding-top-bottom">
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'enfoque', 'posts_per_page' => 3 ); ?>
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="about-history__item wow animated fadeInRight" style="visibility: visible; animation-delay: .1s  ;">
          <div class="about-history__icon">
            <img alt="" src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
          <div class="main-general__title">
             <?php the_title(); ?>
          </div>
          <div class="main-general__description">
          <?php the_content(); ?>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>


  <!-- section de nuestro equipo -->

  <section class="about-team">
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Nuestro equipo
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
          Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per eros massa feugiat imperdiet elementum urna nulla erat.
        </p>
      </div>
      <div class="about-team__carousel wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
      <?php $args = array( 'post_type' => 'equipo' ); ?>
             <?php $loop = new WP_Query( $args ); ?>
             <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>  
      <div class="about-team__item">
          <div class="about-team__avatar">
            <span class="about-team__line"></span>
            <img alt="" src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
          <div class="about-team__body">
            <h3 class="general-card__title">
            <?php the_title(); ?>
            </h3>
            <p class="about-team__grade">
            <?php the_field('cargo'); ?>
            </p>
            <a class="about-team__mail" href="mailto:<?php the_field('correo_electronico'); ?>">
<i class="fa fa-envelope-o"></i>
<?php the_field('correo_electronico'); ?>
</a>
            <p class="main-general__description main-general__description--dark">
            <?php the_content(); ?>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
 
  <!-- sedes de ekored   -->

  <section class="about-site">
    <div class="about-site__bg"></div>
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Nuestras sedes
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
          Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per eros massa feugiat imperdiet elementum urna nulla erat.
        </p>
      </div>
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'sedes' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
   
        <div class="about-site__item wow animated fadeInRight" style="visibility: visible; animation-delay: .1s  ;">
          <div class="about-site__img">
            <img alt="" src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
          <div class="about-site__body">
            <h3 class="general-card__title">
             <?php the_title(); ?>
            </h3>
            <p class="main-general__description main-general__description--dark">
            <?php the_content(); ?>
            </p>
           
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <section class="general-colum">
    <div class="container padding-top-bottom">
    <?php $args = array( 'post_type' => 'about' ); ?>
            <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="container-grid">
        <div class="general-colum__img">
          <img alt="img" src="<?php the_field('imagen'); ?>">
        </div>
        <div class="general-colum__text">
          <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            ACERCA DE
          </h3>
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            Sistema integrado de gestión
          </h2>
          <p class="main-general__description main-general__description--dark">
          <?php the_field('contenido'); ?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </section>
  <?php get_footer(); ?>
