<?php  get_header(); ?>
  
   
	<!-- <div id="primary" class="content-area"> -->
		<main id="main" class="site-main" role="main">
		   <section class="well text-sm-left">
	       <div class="container">
	       <div class="row">
				<?php if ( have_posts() ) : ?>

					
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();?>
		           
					   <!-- <article class="post"> -->
							<?php echo the_content();?>
					<!-- </article> -->
					 
				<? endwhile;

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'content-none' );

				endif;
				?>
			</div>
		 </div>
		 </section>
		</main><!-- .site-main -->
		
	<!-- /</div>.content-area -->
	
	
<?php   get_footer(); ?>