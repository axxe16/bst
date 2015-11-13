<?php

function bst_enqueues() {

	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true);
	wp_enqueue_script( 'jquery' );

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.4', null);
	wp_enqueue_style('bootstrap-css');

  	wp_register_style('bst-css', get_template_directory_uri() . '/css/bst.css', false, null);
	wp_enqueue_style('bst-css');

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, true);
	wp_enqueue_script('modernizr');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('bst-js', get_template_directory_uri() . '/js/bst.js', false, null, true);
	wp_enqueue_script('bst-js');

	wp_register_script('imageScroll', get_template_directory_uri() . '/js/jquery.imageScroll.min.js', false, null, true);
	wp_enqueue_script('imageScroll');
	
	wp_register_script('fakeLoader', get_template_directory_uri() . '/js/fakeLoader.min.js', false, null, true);
	wp_enqueue_script('fakeLoader');	

	wp_register_script('jquery.cycle2', get_template_directory_uri() . '/js/jquery.cycle2.min.js', false, null, true);
	wp_enqueue_script('jquery.cycle2');
	
	wp_register_script('jquery.cycle2.carousel', get_template_directory_uri() . '/js/jquery.cycle2.carousel.min.js', false, null, true);
	wp_enqueue_script('jquery.cycle2.carousel');
	
	wp_register_script('customjs', get_template_directory_uri() . '/js/custom.js', false, null, true);
	wp_enqueue_script('customjs');
	
	//aggiungo stile per lo sviluppo del tema
	wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), '4.0.3' );
	
	wp_register_style('fakeLoader', get_template_directory_uri() . '/css/fakeLoader.css', false, null, null);
	wp_enqueue_style('fakeLoader');
	
	wp_register_style('styleCustom', get_template_directory_uri() . '/css/style.css', false, null, null);
	wp_enqueue_style('styleCustom');


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);
