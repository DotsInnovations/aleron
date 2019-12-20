<?php  get_header(); ?>

<!-- <div id="primary" class="content-area"> -->
		<main id="main" class="main_offset text-center" role="main">
		   <section class="well text-sm-left">
	       <div class="container">
			<!-- <div class="row"> -->
				<?php if ( have_posts() ) : ?>
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();?>
					   <div class="post" id="post-<?php the_ID(); ?>">	
						<?php echo the_content();?>
						</div>
					<?php endwhile;?>					
				<?php else :
					get_template_part( 'content', 'content-none' );

				endif;
				?>
			<!-- </div> -->
		 </div>
		 </section>
		</main><!-- .site-main -->
		
	<!-- </div>.content-area -->
<?php  get_footer(); ?>
