<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<title><?php wp_title(); ?></title>

<!--MOBILE DEVICE-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!--FONT-ICON-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,300,500" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css">

<!--Css-->
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/simplegrid.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />	
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/menu.css">
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/responsive.css">
<!--js-->
<script src="<?php echo bloginfo('template_url'); ?>/js/modernizr.js"></script>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>    
</head>
<body>

<body <?php body_class(); ?>>
	<header class="clearfix">
    <div class="grid">
        <div class="row">
            <div class="col-1-1">
                <div class="logo">
                    <h1><a href="<?php echo get_option('home'); ?>/"><img src="<?php echo bloginfo('template_url'); ?>/images/logo2.png" alt="logo" ></a></h1>
                </div>
                
                <div class="hedside">
                     <div class="compny-logo">
                        <p>Visit our sister company <a href="#">R-Tronics</a><br>a subsidiary of J. Davis Mfg.</p>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/iso-logo.png" alt="">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/iso-log-two.png" alt="">
                     </div>
               </div>
                                       <div class="menuwrap clearfix">
                                       <?php wp_nav_menu( array('menu' => 'Main Navigation','menu_id' => '','menu_class' => '','container' => 'div','container_id' => 'cssmenu','container_class' => '') ); ?>
               
</div>
            </div>
        </div>
    </div>
</header>
	

