<footer class="text-center text-sm-left">
            <div class="footer_figure_left">
                <address>
                <h5 align="center" style="font-weight: bold;margin-left: 37%;"><i style="font-size:10px;margin-top:8px;" class="fa fa-snowflake-o" aria-hidden="true"></i> Important Links <i style="font-size:10px;margin-top:8px;" class="fa fa-snowflake-o" aria-hidden="true"></i></h5>

                <ul style="margin-left: 37%;font-size: 16px;margin-top: 11px;">
                    <li><a href=" http://www.agewithgrace.in/what-is-age-with-grace/"><i style="font-size:10px;margin-top:8px;" class="fa fa-hand-o-right" aria-hidden="true"></i> What Is Age With Grace ?</li></a>
                    <li><a href="http://www.agewithgrace.in/ipss-calculator/"><i style="font-size:10px;margin-top:8px;" class="fa fa-hand-o-right" aria-hidden="true"></i> Know Your IPSS Score</li></a>
                    <li><a href="http://www.agewithgrace.in/iief-calculator/"><i style="font-size:10px;margin-top:8px;" class="fa fa-hand-o-right" aria-hidden="true"></i> Know Your IIEF Score</li></a>
                    <li><a href="http://www.agewithgrace.in/contactus/"><i style="font-size:10px;margin-top:8px;" class="fa fa-hand-o-right" aria-hidden="true"></i> Contact Us</li></a>
                </ul>
                </address>
            </div>
            <div class="footer_figure_right"></div>
            <div class="container">
                <div class="row"><div class="col-lg-12 col-sm-12">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8 col-xs-8 col-xs-offset-2">
                        <address>
                            <h5 align="center"><i style="font-size:10px;margin-top:8px;" class="fa fa-snowflake-o" aria-hidden="true"></i> Get In Touch With Us <i style="font-size:10px;margin-top:8px;" class="fa fa-snowflake-o" aria-hidden="true"></i></h5>
                            <p><i class="fa fa-map-marker " aria-hidden="true"></i>
                                CORPORATE HOUSE,</br> 
                                NEAR SOLA BRIDGE, S.G. HIGHWAY,</br>
                                THALTEJ, AHMEDABAD - 380009,</br>
                                Gujarat,India.</br>
                                <br>
                                <i style="margin-top: 3px;" class="fa fa-phone" aria-hidden="true"></i>     Phone : +91 79 6652 3100 / 2657 6655</br>
                                <i style="margin-top: 3px;" class="fa fa-fax" aria-hidden="true"></i>  Fax      : +91 79 2657 8862</p>
                        </address>
                    </div>
                </div>
                <!-- <div class="row">
                     <div class="col-sm-4 col-sm-offset-8">
                       <div class="ff">
                    <?  // wp_nav_menu( array( 'theme_location' => 'footer-menu','menu_class' => 'ff-menu') );?>
                      </div>
                    </div>
                </div> -->
               
                <div class="row">
                    <div class="col-sm-7 col-xs-6 center">
                        <!-- <ul class="footer-list">
                            <li>
                                <a href="#" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-google-plus"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-rss"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-pinterest"></a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="copyright offset-2">
                            Copyright © <span id="copyright-year"></span>
                            <!-- <a href="#">Privacy Policy</a> -->
                        </div>
                        
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                         <? wp_nav_menu( array( 'theme_location' => 'footer-menu','menu_class' => 'ff-menu') );?>
                    </div>
                </div>
            </div>
        </footer>
    </div>


<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    
  <a href="#" id="toTop" class="toTop fa fa-angle-up" style="display: block;"></a>
   
     <script type="text/javascript">
        $(document).ready(function() {
            var o = $('html');
            if (o.hasClass('desktop')) {

                $('#stuck_container').TMStickUp({})
            }
            $('.nav ul ').attr('data-type','navbar');
            $('.rd-mobilemenu_ul').css('display','block');
            // $('#stuck_container')
            $(window).scroll(function() {
                if($('.isStuck').css('top')=='0px'){
                    $('.site_logo').css({'height':'65px','margin-top':'15px','margin-bottom':'12px',});
                }
                 if($('.isStuck').css('top')!='0px'){
                    
                    $('.site_logo').css({'margin-top':'40px','margin-bottom':'12px',});
                }
            });

            $(window).scroll(function() {
                if($('.isStuckk').css('top')=='0px'){
                    $('.site_log').css({'height':'65px','margin-top':'15px','margin-bottom':'12px',});
                }
                 if($('.isStuckk').css('top')!='0px'){
                    
                    $('.site_log').css({'margin-top':'15px','margin-bottom':'12px',});
                }
            });
        });
    </script>

     <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.rd-navbar.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/tmstickup.js"></script>  
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ui.totop.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.equalheights.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/superfish.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.customized.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/camera.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.rd-parallax.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/device.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-1.2.1.js"></script>

    <?php wp_footer(); ?>

</body>
</html>
