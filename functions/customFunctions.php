<?php 
//aggiungo pagina opzioni tema con ACF
if( function_exists('acf_add_options_page') ) { 
	acf_add_options_page(array(
		'page_title' 	=> 'Opzioni Generali',
		'menu_title'	=> 'Opzioni Generali',
		'menu_slug' 	=> 'opzioni-generali',
		'capability'	=> 'manage_options',
		'redirect'		=> false
	));}

//aggiungo tassonomie extra
// Custom type galleria
function gallery_init() { 
  $labels = array(
    'name' => 'Gallerie',
    'singular_name' => 'Galleria',
    'add_new' => 'Aggiungi Galleria',
    'add_new_item' => 'Aggiungi Nuova Galleria',
    'edit_item' => 'Modifica Galleria',
    'new_item' => 'Nuova Galleria',
    'all_items' => 'Vedi tutte le Gallerie',
    'view_item' => 'Vedi Galleria',
    'search_items' => 'Cerca Gallerie',
    'not_found' =>  'Nessuna Galleria',
    'not_found_in_trash' => 'Nessuna Galleria nel cestino', 
    'parent_item_colon' => '',
    'menu_name' => 'Gallerie'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'menu_icon' => 'dashicons-pressthis',
    'menu_position' => 20,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => '' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => true,
    'supports' => array( 'title', 'editor', 'revisions','page-attributes')
  ); 
  
  register_post_type( 'gallerie', $args );
}
add_action( 'init', 'gallery_init' );

function add_custom_taxonomies_gallery() {
  register_taxonomy('catgallery', 'gallerie', array(
    'hierarchical' => false,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Categorie', 'taxonomy general name' ),
      'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
      'search_items' =>  __( 'Cerca Categoria' ),
      'all_items' => __( 'Tutti le Categorie' ),
      'edit_item' => __( 'Mod. Categoria' ),
      'update_item' => __( 'Aggiorna Categoria' ),
      'add_new_item' => __( 'Aggiungi nuova Categoria' ),
      'new_item_name' => __( 'Nome nuova Categoria' ),
      'menu_name' => __( 'Categorie' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'categorie', // This controls the base slug that will display before each term
      'with_front' => true, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies_gallery', 0 );


// Custom type comingSoon
function coming_soon_init() { 
  $labels = array(
    'name' => 'Coming Soon',
    'singular_name' => 'Notifica',
    'add_new' => 'Aggiungi Notifica',
    'add_new_item' => 'Aggiungi Nuova Notifica',
    'edit_item' => 'Modifica Notifica',
    'new_item' => 'Nuova Notifica',
    'all_items' => 'Vedi tutte le Notifiche',
    'view_item' => 'Vedi Notifica',
    'search_items' => 'Cerca Notifiche',
    'not_found' =>  'Nessuna Notifica',
    'not_found_in_trash' => 'Nessuna Notifica nel cestino', 
    'parent_item_colon' => '',
    'menu_name' => 'Coming Soon'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'menu_icon' => 'dashicons-format-aside',
    'menu_position' => 19,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'coming-soon' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'revisions')
  ); 
  
  register_post_type( 'coming_soon', $args );
}
add_action( 'init', 'coming_soon_init' );


// Custom type comingSoon
function citazioni_init() { 
  $labels = array(
    'name' => 'Citazioni',
    'singular_name' => 'Citazione',
    'add_new' => 'Aggiungi Citazione',
    'add_new_item' => 'Aggiungi Nuova Citazione',
    'edit_item' => 'Modifica Citazione',
    'new_item' => 'Nuova Citazione',
    'all_items' => 'Vedi tutte le Citazioni',
    'view_item' => 'Vedi Citazione',
    'search_items' => 'Cerca Citazione',
    'not_found' =>  'Nessuna Citazione',
    'not_found_in_trash' => 'Nessuna Citazione nel cestino', 
    'parent_item_colon' => '',
    'menu_name' => 'Citazioni'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'menu_icon' => 'dashicons-format-aside',
    'menu_position' => 21,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => '' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'supports' => array( 'title', 'editor')
  ); 
  
  register_post_type( 'citazioni', $args );
}
add_action( 'init', 'citazioni_init' );

?>