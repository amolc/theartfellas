<?php

/* Load the Theme class. */
require_once (TEMPLATEPATH . '/framework/Theme.php');

//Theme Information
$theme_info = include(TEMPLATEPATH . '/framework/info.php');

//Instance of the Theme
$Theme = new Theme($theme_info);


	
	// Load jQuery------------------------------------------------------->
	function jquery_script() {
		//jQuery From CDN (if wanted) ======================================
		//wp_deregister_script( 'jquery' );
		//wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
		//==================================================================
		wp_enqueue_script( 'jquery' );
	}    
	add_action('wp_enqueue_scripts', 'jquery_script');
	// Load jQuery-------------------------------------------------------<
	





	/** Add support for post formats */
	add_theme_support( 'post-formats', array( 'audio', 'gallery', 'link', 'quote',  'video' ) );

	//You can start adding your code below
	//==================================================================
	







?>