


    
<!--footer section-->
    
<footer>
     <div class="grid">
        <div class="row">
             <div class="col-1-2">
                <img src="<?php echo bloginfo('template_url'); ?>/images/logo2.png" alt="footer-logo">
            </div>
            
          <div class="col-1-2">
           <?php wp_nav_menu( array('menu' => 'Footer Navigation','menu_id' => '','menu_class' => 'foo-menu','container' => '','container_id' => '','container_class' => '') ); ?>
               
              <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('social')) : endif; ?> 
            
           </div>
        </div>
    </div>
</footer>
<a href="#0" class="cd-top">Top</a>
<!--js-->
<script src="<?php echo bloginfo('template_url'); ?>/js/jquery-2.1.1.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/script.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/back-to-top.js"></script>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
</body>
</html>
