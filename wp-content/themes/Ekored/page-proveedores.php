<?php get_header(); ?>
  <section class="general-banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/servicios/image@3x.png')">
    <div class="general-banner__mask">
      <h2 class="general-banner__title">
        Proveedores
      </h2>
    </div>
  </section>
  <section class="suppliers-quality">
    <div class="container padding-top-bottom">
      <div class="container-grid">
      <?php $args = array( 'post_type' => 'prove', 'posts_per_page' => 1 ); ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="suppliers-quality__text">
          <h2 class="main-general__title main-general__title--small wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            <?php the_title(); ?>
          </h2>
          <p class="main-general__description main-general__description--dark">
          <?php the_content(); ?>  
          </p>
        
          <div class="suppliers-quality__grid">
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="img" src="<?php the_field('icono_1');?>">
              </div>
              <h2 class="suppliers-quality__title">
               <?php the_field('titulo_1'); ?>
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_1'); ?> 
              </p>
            </div>
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="img" src="<?php the_field('icono_0');?>">
              </div>
              <h2 class="suppliers-quality__title">
              <?php the_field('titulo_0'); ?>  
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_0'); ?> 
              </p>
            </div>
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="img" src="<?php the_field('icono_3');?>">
              </div>
              <h2 class="suppliers-quality__title">
              <?php the_field('titulo_3'); ?> 
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_3'); ?> 
              </p>
            </div>
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="img" src="<?php the_field('icono_4');?>">
              </div>
              <h2 class="suppliers-quality__title">
              <?php the_field('titulo_4'); ?>  
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_4'); ?>  
              </p>
            </div>
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="img" src="<?php the_field('icono_5');?>">
              </div>
              <h2 class="suppliers-quality__title">
              <?php the_field('titulo_5'); ?>  
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_5'); ?>  
              </p>
            </div>
            <div class="suppliers-quality__item">
              <div class="suppliers-quality__icon">
                <img alt="img" src="<?php the_field('icono_6');?>">
              </div>
              <h2 class="suppliers-quality__title">
              <?php the_field('titulo_6'); ?> 
              </h2>
              <p class="main-general__description main-general__description--dark">
              <?php the_field('contenido_6'); ?> 
              </p>
            </div>
          </div>
        </div>
        <div class="suppliers-quality__img">
          <img alt="img" src="<?php echo get_the_post_thumbnail_url(); ?>">
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  
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