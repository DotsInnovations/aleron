<!DOCTYPE html>
<html lang="en">
<head>

    <title>Aleron</title>
   <!--  <meta charset="<?php/// bloginfo('charset'); ?>"> -->
     <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fv.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php  bloginfo('stylesheet_url');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mailform.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/camera.css" />
    <link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(); ?>/css/material-design.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
     <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
   <!--  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <?php
     add_action( 'wp_head', function () { 
          echo '<style type="text/css">html {margin-top:0px !important;}</style>';
     });
     ?>
     <?php wp_head(); ?>
</head>
<body>

  <div id="wptime-plugin-preloader"></div>
    <div class="page">
       <?php if ( is_front_page() ) { ?>

        <header>
            <div id="stuck_container" class="stuck_container">
                <div class="container">
                    <div class="row">
                        <div  class="col-md-4 ">
                            <center>
                            <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) { ?>
                                    <a href="<?php echo esc_url(home_url('/'));?>""><img class="site_logo " src="<?php echo  esc_url( $logo[0] );?>">
                            <?php } else { ?>
                                      <a href="<?php  echo home_url();?>"><?php bloginfo('name');?></a>
                            <?php }?>
                            </center>
                        </div>
                        <!-- <div class='site-logo'>
                            <a href='<?php // echo esc_url( home_url( '/' ) ); ?>' title='<?php // echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php // echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                        </div>
                   
                        <div class="brand">
                            <h1 class="brand_name">
                              <a href="<?php // echo home_url();?>"><?php //bloginfo('name');?></a>
                            </h1>
                            <p class="brand_slogan">
                               <?php //bloginfo('description');?>
                            </p>
                        </div> -->
                        <div class="col-md-8">
                           <!--  <a class="pull-right" style="background-color: #35A7CF;color: white;font-size: 14px;padding: 0px 15px;" href="">Healthcare Professional</a> -->
                             <nav class="pull-right">
                                <? wp_nav_menu( array( 'theme_location' => 'top-header-menu', 'menu_class' => 'top-menu') );?>
                            </nav> 
                             <nav class="nav" >
                                <? wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'sf-menu') );?>
                            </nav> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_header_figure"></div>
              <?php
            if( get_theme_mod( 'esteem_activate_slider', '0' ) == '1' ) {
                
                    esteem_slider();
               
            } ?>
           
            <div class="container">
                <section class="header-pic text-center text-md-left">
                   <img src="<?php echo get_theme_mod('showcase_image', get_template_directory_uri().'/images/page-1_img01.jpg');?>"/>
                     <!-- <img src="<?php //echo get_template_directory_uri();?>/images/page-1_img01.jpg" alt=""/> -->
                </section>
            </div>
        </header>
        <?php } else { ?>


        <header>
           <div id="stuck_container" class="stuck_container isStuckk"> 
                <div class="container">
                    <div class="row">
                        <div  class="col-md-4 ">
                            <center>
                            <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) { ?>
                                    <a href="<?php echo esc_url(home_url('/'));?>""><img class="site_log " src="<?php echo  esc_url( $logo[0] );?>">
                            <?php } else { ?>
                                      <a href="<?php  echo home_url();?>"><?php bloginfo('name');?></a>
                            <?php }?>
                            </center>
                        </div>
                        
                        <div class="col-md-8">
                            <!--  <a class="pull-right" style="background-color: #35A7CF;color: white;font-size: 14px;padding: 0px 15px;" href="">Healthcare Professional</a> -->
                             <nav class="pull-right">
                                <? wp_nav_menu( array( 'theme_location' => 'top-header-menu', 'menu_class' => 'top-menu') );?>
                            </nav> 
                             <nav class="nav" >
                                <? wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'sf-menu') );?>
                            </nav> 
                        </div>
                    </div><!--End Row-->
                </div><!--End Container-->
            </div>
          
           
          
        </header>

        <?php } ?>


