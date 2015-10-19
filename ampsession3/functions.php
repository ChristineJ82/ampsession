<?php

// Load Theme CSS
function theme_styles () {

  wp_enqueue_style ( 'main', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style ( 'main', get_template_directory_uri() . '/css/bootstrap-theme.css');

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Load Theme Javascript
function theme_js () {

  /*wp_enqueue_script ( 'modernizer', get_template_directory_uri() . '/js/vendor/modernizr.js', '', '', false);*/
  wp_enqueue_script ( 'main', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// Load Owl Carousel
function owl_carousel () {

  wp_enqueue_style ( 'owl_carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.css');
  wp_enqueue_style ( 'owl_theme', get_template_directory_uri() . '/assets/owl-carousel/owl.theme.css');
  wp_enqueue_script ( 'owl_carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.min.js', array('jquery'), '', true);

}
add_action( 'wp_enqueue_scripts', 'owl_carousel' );

// Enable Custom Menus
add_theme_support('menus');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Default Sidebar',
		'id' => 'default-widget-area',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => 'Blog Sidebar',
		'id' => 'blog-widget-area',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


//Post excerpt
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<a href="'. get_permalink($post->ID) . '"> Read More...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

?>