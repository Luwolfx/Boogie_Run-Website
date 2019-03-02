<!--
Boogie Run Game Website
Desenvolvedor: Lucas Gomes Palmieri
-->

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <!-- WORDPRESS -->
    <meta charset="utf-8">
    <title> <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <?php wp_head(); ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/lightbox.min.css">
    <!-- MEUS CSS -->
    <link rel="stylesheet" href="http://www.boogierun.tk/wp-content/themes/boogierun-WP_theme/style.css">

  </head>

  <body class="cordefundo-preta">

    <!-- INICIO DA NAVBAR -->
    <nav class="col-12 navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/"><img src="http://www.boogierun.tk/wp-content/themes/boogierun-WP_theme/imgs/olhos.png" alt="Logo" style="height:30px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if(is_home()):echo ""; else: echo "active"; endif; ?>">
            <a class="nav-link" href="/">Inicio</a>
          </li>
          <li class="nav-item <?php if(is_home()):echo "active"; endif; ?>">
            <a class="nav-link" href="/noticias/">Notícias e Novidades</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href=" <?php if( is_user_logged_in() ) {echo '/wp-admin';} else {echo wp_login_url( $redirect );} ?> ">

				         <?php global $current_user; wp_get_current_user(); ?>
				         <?php if ( is_user_logged_in() ) { echo $current_user->display_name . "\n"; }
					       else { echo 'Login'; } ?>

				      </a>
            </li>
        </ul>
      </div>
    </nav>
    <!-- FIM DO NAVBAR -->
