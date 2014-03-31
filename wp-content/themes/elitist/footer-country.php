

            <div class="clearfix" style="margin-top:-12px;height:0px;"></div>

      </div><!-- /container -->


    
<?php if(!is_page_template('gallery-fullscreen.php')){ ?>
    
        
                <div class="sub_footer_wrap" >
                    <div class="sub_footer content_wrap">
                        <div class="row-fluid">
                            <div class="span9">
                                 <p style="margin-top: -3px;"><span style="font-weight:bold;">THE ART FELLAS |</span> <a href="#" style="color:black">info@theartfellas.com </a> | 46 Kim Yam Road, #02-25, The Herencia, Singapore 239351<?php //$footer_text = of_get_option('footer_text'); if($footer_text){ echo stripslashes($footer_text);} ?></p>
                            </div>
                            
                            <div id="fb_icon" class="span3">
							
                                <?php
                                // if ( has_nav_menu( 'subfooter-menu' ) ){ 
                                    // wp_nav_menu( array(                     
                                        // 'theme_location'  => 'subfooter-menu',
                                        // 'container'       => '',
                                        // 'items_wrap'      => '<ul class="sub_footer_menu">%3$s</ul>',
                                    // )); 
                                // }
                                ?>

                            </div>
                        
                        </div><!-- /row -->
                    </div><!-- /sub_footer -->
                </div><!-- /sub_footer_wrap -->
                
                
                
           </div><!-- /footer_wrap -->

<?php }//if fullscreen gallery?>



           </div><!-- /.container (narrow content) -->




   
    
    </div><!-- /wrap -->
    
    
    
    
    
    
    
    
    
        
    <!-- WP_Footer --> 
    <?php wp_footer(); ?>
    <!-- /WP_Footer --> 

      
    </body>
</html>