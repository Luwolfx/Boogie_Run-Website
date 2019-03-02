<?php /**
* Template Name: Pagina Inicial!
*/ ?>

<?php get_header(); ?>

<!-- INICIO PAGINA ***************************************************** -->



<!-- Container -->
<div class="container">

  <!-- INICIO DO ALERTA -->
  <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong>OBSERVAÇÕES!</strong> Note que este site é apenas um protótipo de modelo, Por favor tenha paciência!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <!-- FIM DO ALERTA   -->

  <!-- INICIO DA ROW PRINCIPAL -->
  <div class="row border border-top-0 border-bottom-0">

    <div class="col-12  pt-3 pb-3">

      <h1 class="text-info border bg-dark bond text-center fonte-70 pb-3 rounded">Boogie Run</h1>

      <div class="row pl-3 pr-3">

        <div class="col-12 col-md-12 col-lg-7 pt-3 w-auto border border-right-0 border-bottom-0 bg-dark rounded-top-left">
          <!-- INICIO DO CAROUSEL -->
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="http://www.boogierun.tk/wp-content/themes/boogierun-WP_theme/imgs/img1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://www.boogierun.tk/wp-content/themes/boogierun-WP_theme/imgs/img1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://www.boogierun.tk/wp-content/themes/boogierun-WP_theme/imgs/img1.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- FIM DO CAROUSEL -->
        </div>

        <div class="col-12 col-md-12 col-lg-5 pt-3 w-auto border border-left-0 border-bottom-0 bg-dark rounded-top-right">
          <p class="text-light pt-1 fonte-16">De repente você se vê em uma situação assustadora, você deve apagar a luz da cozinha e correr por um corredor até chegar ao seu quarto com tudo escuro, porem quando você apaga a luz se depara com olhos brilhantes te observando, você acende a luz novamente e não vê os olhos mais ao apagar aqueles olhos sempre estão lá, após pagar e acender a luz varias e varias vezes você finalmente toma coragem, apaga a luz e corre ao seu quarto, mais algo está errado, aqueles olhos agora estão te seguindo e o corredor é maior do que você pensa... ou... será... que você foi parar em uma dimensão alternativa onde seu corredor é infinito? Sua única alternativa é continuar correndo e desviar de obstáculos para não ser pego pelo monstro!</p>
        </div>

        <div class="col-12 w-auto border border-top-0 bg-dark text-center pt-3 pb-3 rounded-bottom mb-5">
          <button type="button" class="btn btn-outline-info btn-lg">Mais informações em Breve!</button>
        </div>

      </div>

    </div>

  </div>
  <!-- FIM DA ROW PRINCIPAL -->
</div>
<!-- FIM DO CONTAINER -->



<!-- FIM DA PAGINA *********************************************** -->

<?php get_footer(); ?>
