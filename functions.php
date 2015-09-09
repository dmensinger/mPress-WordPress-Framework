<?php
/* CUSTOM FUNCTIONS */
function load_my_scripts() {

// don't use (deregister) WP's jQuery version
wp_deregister_script( 'jquery' );

// Use jQuery from Google Code
wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
wp_register_script('jquery-migrate', 'http://ajax.googleapis.com/ajax/libs/jquery/jquery-migrate.min.js?ver=1.2.1');
wp_enqueue_script('jquery');
wp_enqueue_script('jquery-migrate');

// Include custom javascript files
wp_register_script('superslides', get_bloginfo('template_url').'/js/superslides/dist/jquery.superslides.js', array('jquery'), true );
wp_register_script('respond', get_bloginfo('template_url').'/js/respond.js', array('jquery'), true );
wp_register_script('salvattore', get_bloginfo('template_url').'/js/salvattore.min.js', '1.0', array('jquery'), true );

// Include custom stylesheets
wp_register_style('superslides', get_bloginfo('template_url').'/js/superslides/dist/stylesheets/superslides.css', '1.0', '', false );

 if ( is_front_page() ) {
	wp_enqueue_script('superslides');
	wp_enqueue_style('superslides');
  }

wp_enqueue_script('respond');
wp_enqueue_script('salvattore');

}
add_action('wp_enqueue_scripts', 'load_my_scripts');

// Create Sidebars
if (function_exists('register_sidebar'))
    {
    register_sidebar(array(
    'before_widget' => '<div id="widget" class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
    'name' => 'General Sidebar'
    ));
	}


//remove inline style for gallery shortcode
add_filter( 'use_default_gallery_style', '__return_false' );

// Adjust Comments
add_filter('comments_template', 'legacy_comments');

function legacy_comments($file) {
	if(!function_exists('wp_list_comments')) 	$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
}

// Add Page Excerpts 
add_post_type_support('page', 'excerpt');

// Post Thumbs
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(300, 200, true);
	}

// Register Nav Menu
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main_nav' => 'Main Menu',
		  'footer_nav' => 'Footer Menu'
		)
	);
}

// Create Shortcode for buttons
function button_function( $atts, $content = null ) {   
	extract(shortcode_atts(array(
		  'color' => 'blue', // set default
		  'url' => '',
		  'size' => 'large'
	   ), $atts));

   return '<div id="button" class="'.$color.' '.$size.'" style="margin-top:20px;"><a href="'.$url.'">'.do_shortcode($content).'</a></div>';
}
add_shortcode('button', 'button_function');

?>