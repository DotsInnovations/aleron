<?php
/**
 * Plugin Name:   Example Widget Plugin
 * Plugin URI:    https://jonpenland.com
 * Description:   Adds an example widget that displays the site title and tagline in a widget area.
 * Version:       1.0
 * Author:        Jon Penland
 * Author URI:    https://www.jonpenland.com
 */


class jpen_Example_Widget extends WP_Widget {


  // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'example_widget', 'description' => 'This is an Example Widget' );
    parent::__construct( 'example_widget', 'Example Widget', $widget_options );
  }


  // Create the widget output.
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance[ 'title' ] );
    $subtitle=apply_filters('widget_subtitle',$instance['subtitle']);
    $description=apply_filters('widget_description',$instance['description']);
    // $widget_text = ! empty( $instance['text'] ) ? $instance['text'] : '';
    $image_uri=esc_url($instance['image_uri']);
  
echo $args['before_widget'];  

    //echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>
      <section class="parallax" data-speed="1" data-mobile="true" data-url="<?php echo bloginfo('template_url'); ?>/images/page-1_parallax01.jpg">
                <div class="wide-container  top_decor">
                    <div class="container">
                        <div class="well_5">
                            <div class="row row_offset center_767">
                                <div class="col-sm-4 inset-2">
                                    <img class="rounded" src="<?php echo esc_url($instance['image_uri']); ?>" alt="" />
                                </div>
                                <div class="col-sm-8 text-sm-left inset-1">
                                    <h2><?php echo $title; ?></h2>
                                    <h6 class="subheading"><?php echo $subtitle;?></h6>
                                   <div class="textwidget"><?php echo !empty( $instance['filter'] ) ? wpautop( $description ) : $description; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="top_decor_btn fa  fa-chevron-right" href="#"></a>
                </div>
                <div class="wide-container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="banner_1">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/page-2_icon01.png" alt="" />
                                <span>We'll treat you with the best of care
                                 </span>
                                <h4>diagnostic
                               </h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="banner_2">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/page-2_icon02.png" alt="" />
                                <span>We'll treat you with the best of care</span>

                                <h4>procedures</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
      <!--          <section class="well parallax_after">
                <div class="container">
                    <h2 class="mod center ">
popular information
</h2>
                    <h6 class="subheading center light">
Team of professionals is always ready to help
</h6>
                    <div class="row row_offset_1 center_767 flow-offset-1 text-sm-left">
                        <div class="col-sm-6 col-md-3">

                            <article>
                                <h5>Gastroenterology</h5>
                                <p class="mod2">
                                    Gastroenterology is the branch of medicine that studies the structure and function of the gastrointestinal tract, tract and connective tissue.
                                </p>
                                <a href="#" class="btn btn-md btn-primary  btn_offset">more</a>
                            </article>

                        </div>
                        <div class="col-sm-6 col-md-3">

                            <article>
                                <h5>Therapy</h5>
                                <p class="mod2">
                                    Therapy is a branch of medicine that studies the structure of urogenital systems, gastrointestinal tract and connective tissue.
                                </p>
                                <a href="#" class="btn btn-md btn-primary btn_offset">more</a>
                            </article>

                        </div>
                        <div class="col-sm-6 col-md-3">

                            <article>
                                <h5>Gynecology</h5>
                                <p class="mod2">
                                    Is the science that studies the diagnosis, prevention and treatment of diseases of the female reproductive system and the female body.
                                </p>
                                <a href="#" class="btn btn-md btn-primary btn_offset">more</a>
                            </article>

                        </div>
                        <div class="col-sm-6 col-md-3">

                            <article>
                                <h5>surgery</h5>
                                <p class="mod2">
                                    Is the branch of medicine that studies chronic and acute diseases whose treatment is done using the different types of surgical interventions.
                                </p>
                                <a href="#" class="btn btn-md btn-primary btn_offset">more</a>
                            </article>

                        </div>
                    </div>
                </div>
            </section> -->

  <?php   echo $args['after_widget']; }

  
  // Create the admin area widget settings form.
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; 
    $filter = isset( $instance['filter'] ) ? $instance['filter'] : 0;
    $subtitle = ! empty( $instance['subtitle'] ) ? $instance['subtitle'] : ''; 
    $description = ! empty( $instance['description'] ) ? $instance['description'] : ''; 
    ?>

    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
      <input type="text"  id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>"  value="<?php echo esc_attr( $title ); ?>">
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'subtitle' ); ?>">Sub Title:</label>
      <input type="text"  id="<?php echo $this->get_field_id( 'subtitle' ); ?>" name="<?php echo $this->get_field_name( 'subtitle' ); ?>"  value="<?php echo esc_attr( $subtitle ); ?>">
    </p>


    <p>
      <label for="<?php echo $this->get_field_id( 'description' ); ?>">Desciption:</label>
      <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>"><?php echo esc_textarea( $instance['description'] ); ?></textarea></p>
      <p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox"<?php checked( $filter ); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label></p>
   <p>
        <label for="<?php echo $this->get_field_id('image_uri'); ?>">Image</label><br />

        <?php
            if ( $instance['image_uri'] != '' ) :
                echo '<img class="custom_media_image" src="' . $instance['image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" /><br />';
            endif;
        ?>

        <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $instance['image_uri']; ?>" style="margin-top:5px;">

        <input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name('image_uri'); ?>" value="Upload Image" style="margin-top:5px;" />
    </p><?php
  }


  // Apply settings to the widget instance.
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
     $instance[ 'subtitle' ] = strip_tags( $new_instance[ 'subtitle' ] );
      // $instance[ 'description' ] = strip_tags( $new_instance[ 'description' ] );
      if ( current_user_can( 'unfiltered_html' ) ) {
      $instance['description'] = $new_instance['description'];
    } else {
      $instance['description'] = wp_kses_post( $new_instance['description'] );
    }
    $instance['filter'] = ! empty( $new_instance['filter'] );
    
     $instance['image_uri'] = strip_tags( $new_instance['image_uri'] );
    return $instance;
  }

}

/*add_shortcode('custom_widget','jpen_Example_Widget');*/


// Register the widget.
function jpen_register_example_widget() { 
  register_widget( 'jpen_Example_Widget' );

}

add_action( 'widgets_init', 'jpen_register_example_widget' );

// add admin scripts
add_action('admin_enqueue_scripts', 'ctup_wdscript');
function ctup_wdscript() {
    wp_enqueue_media();
    wp_enqueue_script('ads_script', get_template_directory_uri() . '/js/widget.js', false, '1.0', true);
}


/*do_action( 'widgets_init' );*/


?>