<?php get_header(); ?>

  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/servicios/image@3x.png')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Contacto
      </h2>
    </div>
  </section>
  <section class="contact-us">
    <div class="container padding-top-bottom">
      <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
        Escríbenos ahora
      </h2>
      <div class="d-flex justify-content-center">
        <p class="main-general__description">
          Lorem ipsum dolor sit amet consectetur adipiscing elit donec facilisi magna natoque, per eros massa feugiat imperdiet elementum urna nulla erat.
        </p>
      </div>
      <div class="container-grid">
        <div class="contact-us__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacto/contacto.png">
        </div>
        <div class="contact-us__form">
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
          <!-- <form>
            <input placeholder="Nombre" type="text">
            <input placeholder="Correo" type="text">
            <input placeholder="Teléfono" type="text">
            <input placeholder="Asunto" type="text">
            <textarea placeholder="Mensaje"></textarea>
            <label for="vehicle1">
<input id="vehicle1" name="vehicle1" type="checkbox" value="Bike">
Estoy de acuerdo con los
<span>
términos condiciones
</span>
y
<span>
políticas privacidad
</span>
</label>
            <a class="main-general__button" href="">ENVIAR</a>
          </form> -->
        </div>
      </div>
    </div>
  </section>
  <section class="contact-info">
    <div class="container padding-top-bottom">
      <div class="container-grid">
        <div class="contact-info__item">
          <div class="contact-info__icon">
            <a href="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacto/place@3x.png">
</a>
          </div>
          <p class="contact-info__title">
            Visítanos en
          </p>
          <a class="contact-info__link" href="">
Carrera 51b #78-40
</a>
        </div>
        <div class="contact-info__item">
          <div class="contact-info__icon">
            <a href="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacto/envelope@3x.png">
</a>
          </div>
          <p class="contact-info__title">
            Email
          </p>
          <a class="contact-info__link" href="mailto:info@ekored.co">
info@ekored.co
</a>
        </div>
        <div class="contact-info__item">
          <div class="contact-info__icon">
            <a href="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacto/phone-call@3x.png">
</a>
          </div>
          <p class="contact-info__title">
            Contáctanos a
          </p>
          <a class="contact-info__link" href="tel:5744443569">
Phone: 57 (4) 444 35 69
</a>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a class="main-general__button" href="">AGENDA TU CITA GUIADA</a>
      </div>
    </div>
  </section>
  <section class="contact-map">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacto/map.png">
    <div class="contact-map__mask"></div>
    <div class="contact-map__info">
      <ul>
        <li>
          <b>
ekored
</b>
        </li>
        <li>
          Carrera 51b #78-40
        </li>
        <li>
          Medellín
        </li>
      </ul>
      <div class="contact-map__triangle"></div>
    </div>
  </section>
  <?php get_footer(); ?>
