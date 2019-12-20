<?php get_header(); ?>

<!--BANNER SECTION-->   
<section id="banner-img">
    <div class="grid">
        <div class="row">
            <div class="banner-img-text">
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<?php the_content(); ?>

				<?php endwhile; endif; ?>
              
            </div>
        </div>
    </div>
</section>
 
<!--tools section-->
    
<section id="tools-one" >
     <div class="grid">
        <div class="row">
             <div class="tools clearfix">
             <?php

// The Query
$args = array(
	'post_type'  => 'product'
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post();
			echo '<div class="col-1-6">';
		echo '<h2 style="margin: ' .  get_post_meta($post->ID, 'margin', true) . '">' . get_the_title() . '</h2>';
		echo '<i class="fa ' .  get_post_meta($post->ID, 'icon', true) . '"></i>';
		echo  the_excerpt();
		echo '<a href="'. get_permalink() .'">MORE</a>';
		echo '</div>';
	}

} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>
                
            </div>
        </div>
    </div>
</section>


    
<!--download section-->

<section id="download">
    <div class="grid">
        <div class="row">
            <div class="download clearfix">
                <div class="col-1-1">
                    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Download')) : endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
    

<!--feature products-->

<section id="products">
     <div class="grid">
        <div class="row">
            <div class="products clearfix">
              <div class="col-1-1">
                    <h2>Featured Product</h2>
                </div>
                
               <div class="col-1-1">
                    <ul id="productul">
                    <?php 
					
// The Query
$args = array(
	'post_type'  => 'post'
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		if ( has_post_thumbnail() ) {
			
  				echo '<li><div><span><a href="'. get_permalink() .'">' . get_the_post_thumbnail( $page->ID, 'thumbnail')   .'</a></span>';		
				echo '<p><a href="'. get_permalink() .'">' . get_the_excerpt() . '</a></p></div></li>';
		}else{
			echo '<li><div><p><a href="'. get_permalink() .'">' . get_the_excerpt() . '</a></p></div></li>';
		};
	
	}

} else {
	echo '  <li class="noposts"><div><p>Comming soon.</p><div></li>';
}
/* Restore original Post Data */
wp_reset_postdata();

?>	
			
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    
    
    
	


<?php get_footer(); ?>
