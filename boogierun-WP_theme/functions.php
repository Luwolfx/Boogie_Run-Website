<?php

if ( ! function_exists( 'boogierun_setup' ) ) :

	function boogierun_setup() {

    /* ativa post thumbnails e especifica padrão para tamanho de imagem */
		add_theme_support('post-thumbnails');
		add_image_size('300x10', 300, 10, True);

	}
endif;

add_action( 'after_setup_theme', 'boogierun_setup' );

?>
