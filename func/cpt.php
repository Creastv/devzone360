<?php 
// //////////////////////////////////////////////////////////////oferty
function icx_post_types() {

	$labels = array(
		'name'               => 'Oferty',
		'singular_name'      => 'Oferty',
		'menu_name'          => 'Oferty',
		'name_admin_bar'     => 'Oferty',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj ',
		'new_item'           => 'Nowy',
		'edit_item'          => 'Edytuj ',
		'view_item'          => 'Zobacz ',
		'all_items'          => 'oferty',
		'search_items'       => 'Szukaj',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'Nie znaleziono',
		'not_found_in_trash' => 'Nie znaleziono',
	);

	$args = array( 
	    'public' => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		"rewrite"             => array( "slug" => "oferta", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'excerpt' ),
		// , 'editor' 
	);
    register_post_type( 'oferta', $args );

}
add_action( 'init', 'icx_post_types' );