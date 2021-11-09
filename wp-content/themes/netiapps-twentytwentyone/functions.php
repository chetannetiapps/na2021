<?php
/**
 * Load the required scripts for Netiapps 2021 theme
 */
function add_netiapps_theme_scripts() {
    $uri = get_template_directory_uri();

    wp_enqueue_style("bootstrap-css", "//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
	  wp_enqueue_style("netiapps-css", get_theme_file_uri("/styles/main.css"));
    wp_enqueue_style("owl-css", get_theme_file_uri("/styles/owl.carousel.min.css"));
    wp_enqueue_style("owl-default-css", get_theme_file_uri("/styles/owl.theme.default.min.css"));
    wp_enqueue_style("icon-css", "//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css");
    wp_enqueue_script("bootstrap-js","//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js");
    wp_enqueue_script("jquery-js","//code.jquery.com/jquery-1.11.1.min.js");
    wp_enqueue_script("isotope-js","//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/1.5.25/jquery.isotope.min.js");
    wp_enqueue_script("owl-js",$uri.'/assets/js/owl.carousel.min.js');
    wp_enqueue_script("waypoint-min-js", '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js');
    // wp_enqueue_script("countup-min-js",$uri.'/assets/js/jquery.countup.min.js');
    wp_enqueue_script("countup-js",$uri.'/assets/js/jquery.countup.js');
    wp_enqueue_script("custom-js",$uri.'/assets/js/custom.js');
}

add_action("wp_enqueue_scripts", "add_netiapps_theme_scripts");

/*
 For taxonomy purpose..
*/
function filter_post_type_link( $link, $post ) {
    if ( $post->post_type !== 'themes' )
        return $link;

    if ( $cats = get_the_terms($post->ID, 'themes_categories') )
        $link = str_replace('%themes_categories%', array_pop($cats)->slug, $link);

    return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);

add_theme_support( 'post-thumbnails' ); 

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'company-menu' => __( 'Company Menu' ),
      'solution-service-menu' => __( 'Solution and Service Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();
  // acf_add_options_sub_page('Footer');

}

/* filter to avoid the seo schema for the meta.. */
add_filter( 'wpseo_json_ld_output', '__return_false' );