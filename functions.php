<?php
add_theme_support('post-thumbnails');
add_image_size( 'logo', 200, 62, array( 'center', 'center' ) );
add_image_size( 'oferta', 425, 190, array( 'center', 'center' ) );

if ( ! function_exists( 'dev_register_nav_menu' ) ) {
    function dev_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'dev' ),
        ) );
    }
    add_action( 'after_setup_theme', 'dev_register_nav_menu', 0 );
}
function cr_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'dev' ),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title-fo">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'dev' ),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title-fo">',
		'after_title'   => '</h4>',
	) );
    register_sidebar( array(
		'name'          => __( 'Sidebar', 'dev' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title-fo">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'cr_widgets_init' );

function dev_scripts() {
	wp_enqueue_style( 'icx-style', get_stylesheet_uri() );
	wp_enqueue_style( 'icx-custome-style', get_template_directory_uri().'/src/css/icx-main.min.css' ); 
	wp_enqueue_script('icx-main', get_template_directory_uri().'/src/js/icx-main.js', array( 'jquery' ),'3', true );
    wp_enqueue_style( 'icx-svipeer_css', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
    wp_enqueue_script('icx-swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  array(), '20130456', true );
	wp_enqueue_script( 'cx-logo', get_template_directory_uri() . '/src/js/lp.js', array(), '20130457', true );
}
add_action( 'wp_enqueue_scripts', 'dev_scripts' );
require get_template_directory() . '/func/clean-up.php';
require get_template_directory() . '/func/cpt.php';


