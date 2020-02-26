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
        <div class="services-card">
          <span class="service-card__line"></span>
          <div class="services-card__img">
            <img alt="imagen servicio" src="<?php echo get_template_directory_uri(); ?>/assets/img/servicios/service1.png">
          </div>
          <div class="services-card__body">
            <a class="services-title" href="<?php bloginfo('url')?>/interna">
<img alt="icono servicio" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_10@2x.png">
Proyectos
</a>
            <p class="services-description">
              Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
            </p>
          </div>
        </div>
        <div class="services-card">
          <span class="service-card__line"></span>
          <div class="services-card__img">
            <img alt="imagen servicio" src="<?php echo get_template_directory_uri(); ?>/assets/img/servicios/service2.png">
          </div>
          <div class="services-card__body">
            <a class="services-title" href="<?php bloginfo('url')?>/interna">
<img alt="icono servicio" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_8@2x.png">
Economía circular
</a>
            <p class="services-description">
              Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
            </p>
          </div>
        </div>
        <div class="services-card">
          <span class="service-card__line"></span>
          <div class="services-card__img">
            <img alt="imagen servicio" src="<?php echo get_template_directory_uri(); ?>/assets/img/servicios/service3.png">
          </div>
          <div class="services-card__body">
            <a class="services-title" href="<?php bloginfo('url')?>/interna">
<img alt="icono servicio" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_9@2x.png">
ODS
</a>
            <p class="services-description">
              Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
            </p>
          </div>
        </div>
        <div class="services-card">
          <span class="service-card__line"></span>
          <div class="services-card__img">
            <img alt="imagen servicio" src="<?php echo get_template_directory_uri(); ?>/assets/img/servicios/service4.png">
          </div>
          <div class="services-card__body">
            <a class="services-title" href="<?php bloginfo('url')?>/interna">
<img alt="icono servicio" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/sprout@2x.png">
Cambio climático
</a>
            <p class="services-description">
              Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>