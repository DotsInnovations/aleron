<?php

    function wpb_customize_register($wp_customize)
    {
    	$wp_customize->add_section('header-pic',array(

                    'title' => __('Header Image','wpbootstrap'),
                    'description' => sprintf(__('Options for showcase','wpbootstrap')),
                    'priority' => 130

    		));

    	$wp_customize->add_setting('showcase_image',array(

              'default'=>get_bloginfo('template_url').'/images/page-1_img01.jpg',
              'type' => 'theme_mod'
    		));

    	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',array(

                 'label' => __('Image','wpbootstrap'),
                 'section' => 'header-pic',
                 'settings' => 'showcase_image',
                 'priority' => 1

    		)));
   


     /**************************************************************************************/

    /* Slider Options Area */
    

   $wp_customize->add_panel('esteem_slider_options', array(
      'capabitity' => 'edit_theme_options',
      'priority' => 330,
      'title' => __('Slider', 'wpbootstrap'),
   ));

   // Slider activate option
    $wp_customize->add_section('esteem_activate_slider_setting', array(
        'title'     => __( 'Activate slider', 'wpbootstrap' ),
        'priority'  => 2,
        'panel' => 'esteem_slider_options'

    ));

    $wp_customize->add_setting('esteem_activate_slider',    array(
        'default' => get_bloginfo('template_url').'/images/page-1_img01.jpg',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esteem_sanitize_checkbox'
    ));
    $wp_customize->add_control('esteem_activate_slider',    array(
        'type' => 'checkbox',
        'label' => __('Check to activate slider.', 'wpbootstrap' ),
        'section' => 'esteem_activate_slider_setting'
    ));

    // Slide options
    for( $i=1; $i<=4; $i++) {
        // Slider Image upload
        $wp_customize->add_section('esteem_slider_image_setting'.$i, array(
            'title' => sprintf( __( 'Image Upload #%1$s', 'wpbootstrap' ), $i ),
            'priority'  => $i+50,
            'panel' => 'esteem_slider_options'
        ));

        $wp_customize->add_setting('esteem_slider_image'.$i, array(
            'default' => '',
          'capability' => 'edit_theme_options',
          'sanitize_callback' => 'esteem_sanitize_url',
          'sanitize_js_callback' => 'esteem_sanitize_js_url'
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'esteem_slider_image'.$i, array(
                'label'         => __( 'Upload slider image.', 'wpbootstrap' ),
                'section'   => 'esteem_slider_image_setting'.$i,
                'settings'  => 'esteem_slider_image'.$i
            ))
        );

       
    }

    function esteem_sanitize_checkbox($input) {
      if ( $input == 1 ) {
         return 1;
      } else {
         return '';
      }
   }

    function esteem_sanitize_url( $input ) {
        $input = esc_url_raw( $input );
        return $input;
    }
    function esteem_sanitize_js_url ( $input ) {
        $input = esc_url( $input );
        return $input;
    }


 /**************************************************************************************/

  } 

    add_action('customize_register','wpb_customize_register');
?>