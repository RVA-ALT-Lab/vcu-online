<?php
/**
 * ACF
 *
 * @package UnderStrap
 */

//home hero 

function vcu_online_title_breaker($title){
	$array = explode ( ' ' , $title );
	$title = '';
	foreach ($array as $key => $word) {
		$title .= '<h1>' .$word . '</h1><br>';
	}
	return $title;
}

function vcu_online_button_repeater(){
	$html = '<div class="hero-buttons">';
	if( have_rows('buttons') ):

	    // Loop through rows.
	    while( have_rows('buttons') ) : the_row();

	        // Load sub field value.
	        $button = get_sub_field('button_title');
	        $button_url = get_sub_field('button_link');
	        $html .= "<a class='btn btn-gold' href='{$button_url}'>{$button}</a>";
	        // Do something...
	    // End loop.
	    endwhile;
	    return $html . '</div>';
		// No value.
		else :
		    // Do something...
		endif;
	}


//SECONDARY MESSAGE
	function vcu_online_secondary_message(){
		$secondary_title = get_field('secondary_title');
		$secondary_image = get_field('secondary_image')['sizes']['large'];
		$secondary_message = get_field('secondary_message');

		$html = "<div class='col-md-6'><div class='secondary-message'><h2>{$secondary_title}</h2>{$secondary_message}</div></div>";
		$html .= "<div class='col-md-6'><div class='secondary-message'><img class='img-fluid' src='{$secondary_image}' alt='Smiling person.'></div></div>";
		return $html;
	}


// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

	//save acf json
		add_filter('acf/settings/save_json', 'vcu_online_json_save_point');
		 
		function vcu_online_json_save_point( $path ) {
		    
		    // update path
		    $path = plugin_dir_url(__FILE__) . '/acf-json'; //replace w get_stylesheet_directory() for theme
		    
		    
		    // return
		    return $path;
		    
		}


		// load acf json
		add_filter('acf/settings/load_json', 'vcu_online_json_load_point');

		function vcu_online_json_load_point( $paths ) {
		    
		    // remove original path (optional)
		    unset($paths[0]);
		    
		    
		    // append path
		    $paths[] = plugin_dir_url(__FILE__)  . '/acf-json';//replace w get_stylesheet_directory() for theme
		    
		    
		    // return
		    return $paths;
		    
		}