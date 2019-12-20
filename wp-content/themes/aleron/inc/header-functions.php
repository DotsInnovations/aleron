<?php
/**
 * Contains all the fucntions and components related to header part.
 *
 * @package 	ThemeGrill
 * @subpackage 	Esteem
 * @since 		Esteem 1.0
 */

/****************************************************************************************/
// Filter the get_header_image_tag() for option of adding the link back to home page option
function esteem_header_image_markup( $html, $header, $attr ) {
	$output = '';
	$header_image = get_header_image();

	if( ! empty( $header_image ) ) {
		$output .= '<img src="' . esc_url( $header_image ) . '" class="header-image" width="' . get_custom_header()->width . '" height="' . get_custom_header()->height . '" alt="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
	}

	return $output;
}

function esteem_header_image_markup_filter() {
	add_filter( 'get_header_image_tag', 'esteem_header_image_markup', 10, 3 );
}

add_action( 'esteem_header_image_markup_render','esteem_header_image_markup_filter' );

/****************************************************************************************/

if ( ! function_exists( 'esteem_render_header_image' ) ) :
/**
 * Shows the small info text on top header part
 */
function esteem_render_header_image() {
	if ( function_exists( 'the_custom_header_markup' ) ) {
		do_action( 'esteem_header_image_markup_render' );
		the_custom_header_markup();
	} else {
		$header_image = get_header_image();
		if( ! empty( $header_image ) ) {
		?>
			<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		<?php
		}
	}
}
endif;

/****************************************************************************************/

if ( ! function_exists( 'esteem_slider' ) ) :
/**
 * display featured post slider
 */
function esteem_slider() { ?>
	
                           <div class="camera_wrapper">
                             <div class="camera_container">
                             <div id="camera" class="camera_wrap">
			<?php
			for( $i = 1; $i <= 4; $i++ ) {
				
				$esteem_slider_image = get_theme_mod( 'esteem_slider_image'.$i , '' );
				

				if( !empty( $esteem_slider_image ) ) {
					if ( $i == 1 ) /*{ $classes = "slides displayblock"; } else { $classes = "slides displaynone"; }*/
					?>
			
                        <div data-src="<?php echo esc_url( $esteem_slider_image ); ?>">
                            <div class="camera_caption fadeIn">
                            </div>
                        </div>     
	
				<?php
				}
			}
			?>
		</div><!-- .camera_wrapper -->
		</div><!-- .camera_container -->
	</div><!-- .camera_wrapper -->
<?php
}
endif;


/****************************************************************************************/


?>
