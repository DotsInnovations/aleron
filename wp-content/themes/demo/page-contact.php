<?php get_header(); ?>


<!--CONTACT SECTION--> 
<section id="contact">
    <div class="grid">
        <div class="row">
            <div class="contact clearfix">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">	
			  		
				
            
               <div class="col-1-1">
                    <h2><?php the_title(); ?></h2>
                </div>
               <div class="entry">
                 	<?php the_content(); ?>
                    </div> 
                </div>
              <?php endwhile; endif; ?> 
                
            <div class="address clearfix">
            <div class="col-1-3">
                    <div class="map-icon">
                        <i class="fa fa-map-marker"></i>
                   </div> 
                   
                   <div class="map-info">
                        <h3>    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('address')) : endif; ?></h3>
                   </div>
               </div> 
                
                <div class="col-1-3">
                    <div class="mobile-icon">
                        <i class="fa fa-mobile"></i>
                   </div> 
                   
                   <div class="mob-info">
                       <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('phone')) : endif; ?>
                   </div>
               </div> 
                
                 <div class="col-1-3">
                    <div class="map-icon">
                        <i class="fa fa-envelope-o"></i>
                   </div> 
                   
                   <div class="email-info">
                        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('email')) : endif; ?>
                   </div>
               </div> 
              </div> 
             
             </div>
        </div> 
    </div>
</section>

<!--CONTACT MESSAGE SECTION-->

<section id="contact-msg">
    <div class="grid">
        <div class="row">
            <div class="contact-msg clearfix">
                <div class="col-1-1">
                    <h3>Contact Form</h3>
                </div>
                
             <div class="col-1-1">
                  <div class="contact-box clearfix">
                          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('contact')) : endif; ?>
                  </div>   
              </div>
          </div>
        </div>
    </div>
</section>
    
    


<?php get_footer(); ?>
