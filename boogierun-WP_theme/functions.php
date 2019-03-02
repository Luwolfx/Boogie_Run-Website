<?php
if ( ! function_exists( 'boogierun_setup' ) ) :
	function boogierun_setup() {
    /* ativa post thumbnails e especifica padrão para tamanho de imagem */
		add_theme_support('post-thumbnails');
		add_image_size('300x10', 300, 10, True);
	}
endif;
add_action( 'after_setup_theme', 'boogierun_setup' );

//	if(function_exists('register_sidebar'))
//		register_sidebar(array(
//			'before_widget' => '<div class="widgets">',
//			'after_widget' => '</div>'
//			'before_title' => '<h2>'
//			'after_title' => '</h2>'
//		));

function boogierun_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Left-Sidebar', 'boogierun' ),
			'id'            => 'sidebar-left-1',
			'description'   => __( 'Widgets aparecerão ao lado da pagina de noticias.', 'boogierun' ),
			'before_widget' => '<div class="cordetexto-amarelo mb-2 pb-2 border border-left-0 border-top-0 border-right-0 border-dark">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="cordetexto-cinzaclaro">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'boogierun_widgets_init' );

?>
