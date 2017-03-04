<?php 

/*-------------- Enable Widgets--------------- */
function blank_widgets_init() {			//defining a function
	register_sidebar( array(
		'name' => ('First Widget'),
		'id' => 'first-widget',
		'description' => 'Widget for our sidebar on pages', 
		'before_widget' => '<div class="widget-sidebar">', 
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'						
	));

	register_sidebar( array(
		'name' => ('Footer Widget One'),
		'id' => 'footer-widget-one',
		'description' => 'First widget for our footer', 
		'before_widget' => '<div class="widget-footer one">', 
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'						
	));
}
add_action('widgets_init', 'blank_widgets_init');	//tells WordPress to include the custom PHP function

/*-------------- Enable Menu ---------------*/ 
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' ); 

/* adding taxonomies */
function custom_taxonomy_wie_init() {
	register_taxonomy(
	    'webdevelopment',
	    'post',
	    array(
	      'hierarchical' => true,	// asks whether the custom taxonomy will have the characteristics of embedded levels like a category
	      'label'        => 'Web Development Types',	//the displayed label of the taxonomy
	      'query_var'    => true 	//allows us to search and sort based on this custom taxonomy
	    )
  	);
}
add_action( 'init', 'custom_taxonomy_wie_init' );