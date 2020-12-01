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