<?php get_header(); ?>
  
<section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/servicios/image@3x.png')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Servicios
      </h2>
    </div>
  </section>
  <section class="general-colum">
    <div class="container padding-top-bottom">
      <div class="container-grid">
      <?php while (have_posts() ) : the_post(); ?>
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
         
        </div>
        <?php endwhile; ?>

        <div class="general-colum__img">
          <img alt="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/single/project.png">
        </div>
      </div>
    </div>
  </section>
  
  <?php  get_template_part('partials/video'); ?>
  <?php  get_template_part('partials/gallery'); ?>
  <section class="single-phrase">
    <div class="single-phrase__mask">
      <div class="container">
      <?php $args = array( 'post_type' => 'prove', 'posts_per_page' => 1 ); ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <h2 class="single-phrase__title">
        <?php the_field('titulo_records'); ?> 
        </h2>
        <p class="single-phrase__subtitle">
        <?php the_field('descripcion_records'); ?> 
        </p>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <section class="single-collapse">
    <div class="container padding-top-bottom">
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'prove', 'posts_per_page' => 1 ); ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="single-collapse__img">
          <img alt="img" src="<?php the_field('imagen_prove'); ?> ">
        </div>
        <div class="single-collapse__text">
          <h3 class="main-general__pretitle wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            ACERCA DE
          </h3>
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
          <?php the_field('titulo_prove'); ?> 
          </h2>
          <p class="main-general__description main-general__description--dark">
          <?php the_field('contenido_prove'); ?>   
          </p>
          <div class="single-collapse__content">
            <div class="accordion-option">
            </div>
            <div class="clearfix"></div>
            <div aria-multiselectable="true" class="panel-group" id="accordion" role="tablist">
              <div class="panel panel-default">
                <div class="panel-heading" id="headingOne" role="tab">
                  <h4 class="panel-title">
                    <a aria-controls="collapseOne" aria-expanded="false" data-parent="#accordion" data-toggle="collapse" href="#collapseOne" role="button">
                    <?php the_field('titulo_item_1'); ?> 
</a>
                  </h4>
                </div>
                <div aria-labelledby="headingOne" class="panel-collapse collapse in" id="collapseOne" role="tabpanel">
                  <div class="panel-body">
                  <?php the_field('contenido_item_1'); ?> 
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" id="headingTwo" role="tab">
                  <h4 class="panel-title">
                    <a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo" role="button">
                    <?php the_field('titulo_item_2'); ?> 
</a>
                  </h4>
                </div>
                <div aria-labelledby="headingTwo" class="panel-collapse collapse in" id="collapseTwo" role="tabpanel">
                  <div class="panel-body">
                  <?php the_field('contenido_item_2'); ?> 
                                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>   
    </div>
  </section>
  <?php get_footer(); ?>