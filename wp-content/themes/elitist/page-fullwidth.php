<?php
/*
Template Name: Page Full Width
*/
?>
<?php include('header_clean.php');//get_header(); ?>
		<?php get_template_part( "beforeloop", "fullwidth" ) ?> 
               <div class="page_thumbnail" style="margin-top: 10px;">
			   <?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  the_post_thumbnail();
					} 
					?>
                    </div>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            	<?php if ( post_password_required() ) : ?>
                                <div class="password_p">
                                    <?php the_content(); ?>
                                </div><!-- /password_p -->
            
                                <?php else : ?>
                        
                                
                                    <article class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                                    	   <div style="border-bottom: 2px solid #000000;margin-top:26px;"></div>
                                    <h2 style='font-family:"Times New Roman";font-size:45px;color:#000000;font-weight:800;padding: 37px 0px 24px 0px; margin-bottom:0px !important;'><?php the_title(); ?></h2> 
											
                                        
                                            <div class="artistdetail"  style="padding-top: 0px;">
													   <?php the_content(); ?>
												</div>
                        <?php //get_the_subtitle(); ?>
                                        	
                                        
                                            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                                            
                                            <div class="clear"></div>
                                            
                                     </article>
                                     
                            	<?php endif; //password ?>
                                
                        
                            <?php endwhile; else: ?>
                        
                                
                                    <article>
                                        
                        				<p><?php _e('Sorry, but the requested resource was not found on this site.','eneaa'); ?></p>
                                    </article>
                               
                        
                            <?php endif; ?>
                    
                          <?php get_template_part( "afterloop", "fullwidth" ) ?> 

<?php get_footer(); ?>