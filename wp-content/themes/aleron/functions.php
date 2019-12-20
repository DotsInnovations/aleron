<?
/***********************************************************************************************/
/* Define Constants */
/***********************************************************************************************/
define('THEMEDIR', get_stylesheet_directory_uri());
define('IMG', THEMEDIR.'/images');


 function register_my_menus() {
  register_nav_menus(
    array(
       'top-header-menu' => __( 'Top Header Menu' ),
      'header-menu' => __( 'Header Menu' ),
      'footer-menu'=> __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 if(function_exists('register_sidebar'))
{
  register_sidebar(array( 
           'name' =>'Right Sidebar',
           'before_title' => '<h2>',
           'after_title' => '</h2>' 
    ));

  add_action( 'init', 'register_sidebar' );
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {

    

    if (in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes)){
        $classes[] = 'active ';
    }
    return $classes;
}


add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 50,
        'width'       => 50,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

   
  
  




// Enable shortcodes in widgets

 require get_template_directory().'/inc/customizer.php';
 require get_template_directory().'/inc/header-functions.php';

do_action( 'init' );

/*add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) || in_array('current-page-ancestor', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;        
}*/







// add_shortcode('custom_widget','custom_shortcode');
// function custom_shortcode(){
//   echo 'szdfsdfsdfsdfsdfsdf';
// }


 /*if ( ! function_exists( 'illdy_is_not_latest_posts' ) ) {
	function illdy_is_not_latest_posts() {
		return ( 'page' == get_option( 'show_on_front' ) ? true : false );
	}

}*/



?>