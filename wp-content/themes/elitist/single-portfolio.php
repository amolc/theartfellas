<?php get_header(); ?>

		<?php get_template_part( "beforeloop", "single-portfolio" ) ?> 
                
                	<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
                    	<?php if ( post_password_required() ) : ?>
                                <div class="password_p">
                                    <?php the_content(); ?>
                                </div><!-- /password_p -->
            
                                <?php else : ?>
                                
                                	
		                            <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-post') ?> >


		                            	<?php
                                        //get_template_part( "post_image", "single-portfolio" );

                                        //Get the meta for the Video option.
										$background_video = get_post_meta(get_the_ID(), 'mb_video_link', true);

										if($background_video){

											global $Theme;
        
        
											//Get the page ID even if is the Blog Page
											global $wp_query;
											$page_id = $wp_query->get_queried_object_id();
														
											
											//Audio---------------------------------
											$background_audio = get_post_meta($page_id, 'mb_background_audio', true);
											$background_audio_format = get_post_meta($page_id, 'mb_background_audio_format', true);
											
											
											//If is a Vimeo Video----------------------------------------------
											if (preg_match("/vimeo/i", $background_video)) {
												
												require_once (THEME_FULLSCREEN . "/vimeo.php");
												
											} else if(preg_match("/youtube/i", $background_video) || preg_match("/youtu.be/i", $background_video)) {//If is another type of video---------------------------------------------
											
												require_once (THEME_FULLSCREEN . "/youtube.php");
												
											} else {//If is another type of video---------------------------------------------
											
												require_once (THEME_FULLSCREEN . "/video.php");
												
											}//End if vimeo

										?>
										

										<?php
										}else{




										?>

			                                <div class="flex-container">
	        
												<div class="flexslider ql_loading" style="margin:10px 0px 0px 0px;">
													
												    <ul class="slides">

				                                        <?php
				                                        $width = 1170;
				                                        $width_portrait = 702;
				                                        $is_portrait = false;
														//$height = 506;
														$featured_image = "";

				                                        

				                                        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
														if($thumbnail){
															$featured_image = $thumbnail[0];
															
															 $image_data = wp_get_attachment_metadata(get_post_thumbnail_id());

														    // If the image is portrait show as it is..
														    if($image_data['height'] > $image_data['width']){
														    	echo "<li class='ql_portrait'>";
														    	$is_portrait = true;
														    }else{
														    	echo "<li>";
														    	$is_portrait = false;
														    }

															?>
																<img style="margin: 0 auto;" src="<?php echo $thumbnail[0]; ?>" />
															</li>
															<?php
														}

														global $wpdb;
														$portfolio_images = get_post_meta( get_the_ID(), 'mb_portfolio_images', false );
														
														if($portfolio_images){
															$portfolio_images = implode( ',' , $portfolio_images );

															// Re-arrange portfolio_images with 'menu_order'
															$portfolio_images = $wpdb->get_col( "
															    SELECT ID FROM {$wpdb->posts}
															    WHERE post_type = 'attachment'
															    AND ID in ({$portfolio_images})
															    ORDER BY menu_order ASC
															" );
															foreach ( $portfolio_images as $att )
															{
																
																if(wp_get_attachment_url($att) != $featured_image){

															    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
															    $src = wp_get_attachment_image_src( $att, 'full' );
															    $src = $src[0];
																//echo $src."<br />--qasim";

															    $image_data = wp_get_attachment_metadata($att);

															    // If the image is portrait show as it is..
															    if($image_data['height'] > $image_data['width']){
															    	echo "<li class='ql_portrait'>";
															    	$is_portrait = true;
															    }else{
															    	echo "<li>";
															    	$is_portrait = false;
															    }
																 
															  	?>
															    	<img style="margin: 0 auto;" src="<?php echo $src;?>" />
															    <?php
															    echo "</li>";

																}
															}
														}//if $portfolio_images


						                				?>
			                						</ul>
												</div><!-- /flexslider -->
											</div><!-- /flex-container -->






											<?php
											$portfolio_images = get_post_meta( get_the_ID(), 'mb_portfolio_images', false );
											if($portfolio_images){
											?>


												<div class="flex_carousel">
												    <ul class="slides">

				                                        <?php
				                                        $width = 210;
														$height = 118;
														$featured_image = "";

				                                        

				                                        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
														if($thumbnail){
															$featured_image = $thumbnail[0];
															
															 $image_data = wp_get_attachment_metadata(get_post_thumbnail_id());
															
														    // If the image is portrait show as it is..
														    if($image_data['height'] > $image_data['width']){
														    	echo "<li class='ql_portrait'>";
														    }else{
														    	echo "<li>";
														    }

															?>
																<img src="<?php echo get_template_directory_uri(); ?>/framework/timthumb.php?src=<?php echo $thumbnail[0]; ?>&amp;w=<?php echo $width; ?>&amp;h=<?php echo $height; ?>"   />
															</li>
															<?php
														}

														global $wpdb;
														$portfolio_images = get_post_meta( get_the_ID(), 'mb_portfolio_images', false );

														if($portfolio_images){
															$portfolio_images = implode( ',' , $portfolio_images );

															// Re-arrange portfolio_images with 'menu_order'
															$portfolio_images = $wpdb->get_col( "
															    SELECT ID FROM {$wpdb->posts}
															    WHERE post_type = 'attachment'
															    AND ID in ({$portfolio_images})
															    ORDER BY menu_order ASC
															" );
															foreach ( $portfolio_images as $att )
															{
																
																if(wp_get_attachment_url($att) != $featured_image){

															    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
															    $src = wp_get_attachment_image_src( $att, 'full' );
															    $src = $src[0];

															    echo "<li>";
															    
															    ?>
															    	<img src="<?php echo get_template_directory_uri(); ?>/framework/timthumb.php?src=<?php echo $src; ?>&amp;w=<?php echo $width; ?>&amp;h=<?php echo $height; ?>"   />
															    <?php 
															    echo "</li>";

																}
															}
														}//if $portfolio_images


						                				?>
			                						</ul>
												</div><!-- /flexslider -->
									<?php
									}//if $portfolio_images
									?>
				

										<?php }//else video ?>

										<div style="border-bottom: 2px solid #000000;margin:26px 0px 37px 0px;"></div>
										<div id="portfolio_content" class="row-fluid">
						                    <div class="span8" style="margin-bottom:-5px;">
						                        <h2 style='font-family:"Times New Roman";font-size:45px; line-height:none !important; color:#000000; margin-bottom:34px !important;'><?php the_title(); ?></h2> 
												<div class="artistdetail"  >
													   <?php the_content(); ?>
												</div>
						                   
						                </div><!-- /portfolio_content -->


		                            </article>


		                                    
		                                    
										
									
									
									<?php // comments_template(); ?>
									
                    
        		<?php endif; //password ?>
            <?php endwhile; 
			
			include (TEMPLATEPATH . '/framework/nav.php' );
			
			else: ?>
        
                    <article>
                        <p><?php _e('Sorry, but the requested resource was not found on this site.','eneaa'); ?></p>
                    </article>
        
            <?php endif; ?>
            
                  <?php get_template_part( "afterloop", "single-portfolio" ) ?> 

<?php get_footer(); ?>