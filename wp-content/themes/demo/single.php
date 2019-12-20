<?php get_header(); ?>

<!--ABOUT-US SECTION-->
<section id="about">
    <div class="grid">
        <div class="row">
            <div class="about clearfix">
            
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			    <div class="col-1-1">
                  <h2><?php the_title(); ?></h2>
                </div>
                 <div class="col-1-1"><br>

              	 <div class="entry">
				
				<?php the_content(); ?>
	
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>
                </div>		
			
			
		</div>


	<?php endwhile; endif; ?>
    
    
    
    
            
				
	
            
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>



	