<?php get_header(); ?>
  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/servicios/image@3x.png')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Publicaciones
      </h2>
    </div>
  </section>
  <section class="publications-notice">
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Nuestras noticias
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
          Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per eros massa feugiat imperdiet elementum urna nulla erat.
        </p>
      </div>
      <div class="publications-notice__carousel">
      <?php $args = array( 'post_type' => 'post'); ?>
      <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="publications-notice__item wow animated fadeInRight" style="visibility: visible; animation-delay: .1s  ;">
          <a href="<?php the_permalink(); ?>">
            <div class="publications-notice__img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>">
              <div class="publications-notice__etiq">
                <span>Eco</span>
              </div>
            </div>
            <div class="publications-notice__body">
              <div class="publications-notice__info">
                <div class="publications-notice__user">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/user-3@3x.png"> <?php the_author(); ?>
                </div>
                <div class="publications-notice__date">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/calendar-1@3x.png">
                  <?php echo get_the_time('j'); ?>
                 <?php echo get_the_time('M'); ?>
                 <?php echo get_the_time('Y'); ?>
                </div>
              </div>
              <h2 class="publications-notice__title">
              <?php the_title(); ?>
              </h2>
              <p class="main-general__description">
              <?php echo excerpt(20); ?>        
              </p>
              <a class="publications-notice__btn" href="<?php the_permalink(); ?>">Read more →</a>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
        
  </section>
  <section class="main-video">
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Nuestros videos
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
          Nos enfocamos en que productos y servicios cuenten con altos índices de calidad que reduzcan el impacto ambiental.
        </p>
      </div>
      <div class="container-grid">
        <div class="main-video_item wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          
        <img class="main-video__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/image@3x.png">
        <?php $args = array( 'post_type' => 'video' , 'posts_per_page' => 1 ); ?>
                            <?php $loop = new WP_Query( $args ); ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
        <a type="" class="" data-toggle="modal" data-target="#exampleModal">
         <img class="main-video__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png">
         <?php endwhile; ?>
         </a>

        </div>
        <?php $args = array( 'post_type' => 'video' , 'posts_per_page' => 1 ); ?>
                            <?php $loop = new WP_Query( $args ); ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
          <div class="main-video_item wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          <img class="main-video__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/image_2@3x.png">
          <a type="" class="" data-toggle="modal" data-target="#exampleModal2">

<img class="main-video__icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png">
</a>
<?php endwhile; ?> 
        </div> 
      </div>
    </div>
  </section>

  <!-- Modal 1 -->
<div class="modal  modal-video fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <video width="" height="" controls>
  <source src="<?php the_field('agregar_video');?>" type="video/mp4">
  
</video>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal  modal-video fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <video width="" height="" controls>
 
  <source src="<?php the_field('agregar_video_2');?>" type="video/mp4">
</video>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

  <section class="publications-norma">
    <div class="publications-norma__bg"></div>
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Normatividad
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
          Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per eros massa feugiat imperdiet elementum urna nulla erat.
        </p>
      </div>
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'normatividad' ); ?>
     <?php $loop = new WP_Query( $args ); ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="publications-norma__item wow animated fadeInRight" style="visibility: visible; animation-delay: .1s  ;">
          <h2 class="publications-norma__title">
             <?php the_title(); ?>
          </h2>
          <p class="main-general__description">
          <?php echo excerpt(10); ?> 
          </p>
          <div class="publications-norma__btn">
            <a class="main-general__button" href="<?php the_field('adjuntar_archivo'); ?>">DESCARGAR</a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>


  <section class="publications-info">
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Informes de sostenibilidad
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
          Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per eros massa feugiat imperdiet elementum urna nulla erat.
        </p>
      </div>
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'normatividad' ); ?>
     <?php $loop = new WP_Query( $args ); ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="publications-info__item">
          <div class="publications-info__icon">
            <img src="<?php the_field('icono'); ?>">
          </div>
          <div class="publications-info__body">
            <h2 class="publications-info__title">
            <?php the_field('titulo'); ?>
              
            </h2>
            <div class="main-general__description">
            <?php the_field('descripcion'); ?>
            </div>
            
            <a class="main-general__button" href="#">VER AHORA</a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

  <section class="publications-events">
    <div class="publications-events__bg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/bg.png">
      <div class="publications-events__mask"></div>
    </div>
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Módulos de eventos
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
          Nos enfocamos en que productos y servicios cuenten con altos índices de calidad que reduzcan el impacto ambiental.
        </p>
      </div>
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'normatividad' ); ?>
     <?php $loop = new WP_Query( $args ); ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="publications-events__item wow animated fadeInRight" style="visibility: visible; animation-delay: .1s  ;">
          <a href="<?php bloginfo('url')?>/prensa">
            <div class="publications-events__img">
              <img src="<?php the_field('imagen_3'); ?>">
            </div>
            <div class="publications-events__body">
              <h2 class="publications-events__title">
              <?php the_field('titulo2'); ?>
              </h2>
              <div class="main-general__description">
              <?php the_field('descripcion_2'); ?>
              </div>
              <div class="publications-events__site">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/place@3x.png"> <?php the_field('direccion_2'); ?>
              </div>
              <div class="publications-events__date">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/calendar-1@3x.png"> <?php the_field('fecha_del_evento'); ?>
              </div>
              <a class="main-general__button" href="<?php bloginfo('url')?>/prensa">PARTICIPAR</a>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>