<?php get_header(); ?>

  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/servicios/image@3x.png')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Prensa
      </h2>
    </div>
  </section>
  <section class="post-detail">
    <div class="container padding-top-bottom">
      <div class="container-grid">
      <?php while (have_posts() ) : the_post(); ?>
        <div class="press-detail__content">
          <div class="post-detail__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
         
          <div class="post-detail__body">
            <div class="publications-notice__info">
              <div class="publications-notice__user">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/publicaciones/user-3@3x.png"><?php the_author(); ?>
              </div>
              <div class="publications-notice__date">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prensa/calendar-1@3x.png">
                 <?php echo get_the_time('j'); ?>
                 <?php echo get_the_time('M'); ?>
                 <?php echo get_the_time('Y'); ?>
              </div>
            </div>
            <p class="main-general__description">
            <?php the_content();?>
            </p>
            <!-- <div class="post-detail__cite">
              <div class="post-detail__comillas">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prensa/comillas@3x.png">
              </div>
              <p class="main-general__description">
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta).
              </p>
            </div> -->
           
          </div>
         
          <div class="post-detail__body">
            <div class="post-detail__btn">
              <a href="#>">anterior</a>
              <a href="#">Después</a>
            </div>
          </div>
          <?php endwhile; ?>
          <div class="post-detail__body">
            <div class="post-detail__form">
              <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
                DEJA
              </h3>
              <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
                Una respuesta
              </h2>
              <p class="main-general__description main-general__description--dark mb-3">
                Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi
              </p>
              <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 4, 'title' => false, 'description' => false ) ); ?>
            </div>
          </div>
        </div>



        
        <div class="post-detail__sidebar">
          <form action="#">
            <div class="post-detail__search">
              <input placeholder="Noticias" type="text">
              <a href="#">Buscar</a>
            </div>
          </form>
          <p class="post-sidebar__title">
            Noticias recientes
          </p>
          <ul class="site-map">
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
          </ul>
          <p class="post-sidebar__title">
            Comentarios
          </p>
          <ul class="site-map">
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
          </ul>
          <p class="post-sidebar__title">
            Noticias
          </p>
          <ul class="site-map">
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
            <li>
              <a href="<?php bloginfo('url')?>/prensa">
How to start your business as an entrepreneur
</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
