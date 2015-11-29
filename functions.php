<?php 
//add featured image to the dashboard
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


// add fonts 
function add_google_fonts_kreon_droidsans(){
	wp_enqueue_style( 'kreon-droidsans', 'https://fonts.googleapis.com/css?family=Kreon:400,300', false);
	}
add_action( 'wp_enqueue_scripts', 'add_google_fonts_kreon_droidsans' );

/*
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer one',
		'id'            => 'footer1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="rounded">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => 'Footer two',
		'id'            => 'footer2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer three',
		'id'            => 'footer3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="rounded">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => 'Footer four',
		'id'            => 'footer4',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="rounded">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => 'Footer five',
		'id'            => 'footer5',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer six',
		'id'            => 'footer6',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer seven',
		'id'            => 'footer7',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer eight',
		'id'            => 'footer8',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>