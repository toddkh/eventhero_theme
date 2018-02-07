<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a class="btn btn-md btn-primary" href="' . get_permalink() . '">' . __('Read more', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);


// Remove WP-Views Nag

if (is_admin()) :
    function my_remove_meta_boxes() {
        remove_meta_box('wpcf-marketing', 'one_page', 'side');
        remove_meta_box('wpcf-marketing', 'home_slide', 'side');
        remove_meta_box('wpcf-marketing', 'gallery', 'side');
    }
    add_filter('add_meta_boxes', 'my_remove_meta_boxes');
endif;

// New Menus


function register_my_menus() {
  register_nav_menus(
    array(
      'header_right' => __( 'Header Right' ),
      'footer_main' => __( 'Footer Main' ),
      'footer_sub' => __( 'Footer Sub' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Filter Yoast Meta Priority
add_filter( 'wpseo_metabox_prio', function() { return 'low';});

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Superpower Options',
		'menu_title'	=> 'Superpower Options',
		'menu_slug' 	=> 'superpower-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_page(array(
		'page_title' 	=> 'EventHero Options',
		'menu_title'	=> 'EventHero Options',
		'menu_slug' 	=> 'eventhero-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Sidekick Options',
		'menu_title'	=> 'Sidekick Options',
		'menu_slug' 	=> 'sidekick-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_page(array(
		'page_title' 	=> 'PowerCore Options',
		'menu_title'	=> 'PowerCore Options',
		'menu_slug' 	=> 'powercore-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
      acf_add_options_page(array(
        'page_title' 	=> 'Careers',
        'menu_title'	=> 'Careers Options',
        'menu_slug' 	=> 'career-options',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
      ));



}

function filter_search($query) {
    if ($query->is_search) {
	$query->set('post_type', array('post', 'superpower'));
    };
    return $query;
};
add_filter('pre_get_posts', 'filter_search');


/*---------------------
 Second Header Injector

add_filter('the_content','add_postdata_to_content');
function add_postdata_to_content($text) {
global $post;
  $postdata .= '<div class="second_header">' . the_field( 'second_header' ) . '</div>';
return $postdata . $text;
}
----------------------*/

