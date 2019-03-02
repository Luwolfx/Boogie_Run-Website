<?php get_header(); ?>

<!-- INICIO DA PAGINA ***************************** -->


<!-- Container -->
<div class="container-noticias">

  <div class="row">

    <div class="col-12">

      <h1 class="fonte-40 font-weight-bold cordetexto-amarelo mb-5 mt-4">Notícias</h1>

    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-8 pl-2 pr-2">

      <div class="row mb-4">
        <!-- POST -->
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-12 pl-2 pr-2 mt-2 mb-3">
            <div class="cordefundo-cinzachumbo">
              <div class="cabecapostagem pt-2 pl-3 pr-3">
                <div class="titulodapostagem">
                  <h2 class="titulodapostagem mb-0"><?php the_title(); ?></h2>
                </div>
                <div class="datadapostagem">
                  <p>Publicado no dia <?php the_date(); ?></p>
                </div>

              </div>
              <div class="bg-dark cordetexto-cinzaclaro p-3 fonte-25" style="width:100%;">
                <p class="cordetexto-cinzaclaro"><?php the_content(); ?></p>

              </div>

              <div class="imagempostagem bg-info">
                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="Responsive image">
              </div>
            </div>
          </div>
      <?php endwhile; else:  ?>
        <p>Nenhum post encontrado</p>
      <?php endif; ?>
        <!-- FIM POST -->

      </div>

    </div>


    <div class="col-12 col-sm-12 col-md-12 col-lg-4 pl-2 pr-2 mt-2 mb-4">
      <div class="cordefundo-cinzachumbo pt-2 pb-2 pl-3 pr-3">
        <?php get_sidebar(); ?>
      </div>
    </div>

  </div>
</div>





<!-- FIM DA PAGINA ******************************** -->

<?php get_footer(); ?>
