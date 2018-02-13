<?php

/*
  Get all enqueued scripts and styles
  https://wordpress.stackexchange.com/questions/233140/how-can-i-get-a-list-of-all-enqueued-scripts-and-styles
*/
function crunchify_print_scripts_styles() {

    $result = [];
    $result['scripts'] = [];
    $result['styles'] = [];

    // Print all loaded Scripts
    // global $wp_scripts;
    // foreach( $wp_scripts->queue as $script ) :
    //    $result['scripts'][] =  $wp_scripts->registered[$script]->src . ";";
    // endforeach;

    // Print all loaded Styles (CSS)
    global $wp_styles;
    foreach( $wp_styles->queue as $style ) :
       $result['styles'][] =  array(
       		'name' => $style,
       		'src' => $wp_styles->registered[$style]->src . ";",
       	);
    endforeach;

    return $result;
}


add_shortcode( 'debug-enqueue', 'noc_do_debug_enqueue_shortcode' );
/**
 * Shortcode to display a CMB2 form for a post ID.
 * @param  array  $atts Shortcode attributes
 * @return string       Form HTML markup
 */
function noc_do_debug_enqueue_shortcode( $atts = array() ) {
  $output = '';

  $all_the_scripts_and_styles = crunchify_print_scripts_styles();
  // var_dump($all_the_scripts_and_styles);

  return $output;
}