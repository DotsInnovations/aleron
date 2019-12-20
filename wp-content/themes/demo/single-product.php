<?php get_header(); ?>

<!--PRODUCT SECTION-->
<section id="product">
    <div class="grid">
        <div class="row clearfix">
             
            	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
              	 <div class="entry">
				
				<?php the_content(); ?>
	
				<?php endwhile; endif; ?>
    
    
    
        </div>
    </div>
    </div>
</section>


<?php get_footer(); ?>



	