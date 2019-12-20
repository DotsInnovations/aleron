<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		
		register_sidebar(array(
    		'name' => 'Download',
    		'id'   => 'download',
    		'description'   => 'Download button on Home page',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		
		register_sidebar(array(
    		'name' => 'Social',
    		'id'   => 'social',
    		'description'   => 'Social Links',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '',
    		'after_title'   => ''
    	));
		register_sidebar(array(
    		'name' => 'Address',
    		'id'   => 'address',
    		'description'   => 'Address',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '',
    		'after_title'   => ''
    	));
			register_sidebar(array(
    		'name' => 'Email',
    		'id'   => 'email',
    		'description'   => 'Email Address',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '',
    		'after_title'   => ''
    	));
		register_sidebar(array(
    		'name' => 'Phone',
    		'id'   => 'phone',
    		'description'   => 'Phone',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '',
    		'after_title'   => ''
    	));
		register_sidebar(array(
    		'name' => 'Contact Form',
    		'id'   => 'contact',
    		'description'   => 'Contact Form',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '',
    		'after_title'   => ''
    	));
    }
	
	
	
	
	
	register_nav_menus( array(
			'header_menu' => 'Main Navigation',
			'footer_menu' => 'Footer Navigation',
) );

add_theme_support( 'post-thumbnails' ); 

?>