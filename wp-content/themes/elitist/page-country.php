	

    <?php
    /*
    Template Name: Country Wise Artist
     
    A WordPress template to list page titles by first letter.
     
    You should modify the CSS to suit your theme and place it in its proper file.
    Be sure to set the $posts_per_row and $posts_per_page variables.
    */
    $posts_per_row = 3;
    $posts_per_page = 15;
    ?>
     
    <?php include('header_artist_country.php'); //get_header(); ?> 
     
    <style type="text/css">
    
    </style>
     
    <div id="main-background">
     
       <div id="main-column">
       <!--	<div style='font-size: 45px;font-family: "Times New Roman";'>View all artist in thumbnails <a href="http://apps.fountaintechies.com/theartfellas/?page_id=3631">here</a></div>-->
       	    <div style="border-bottom: 2px solid #666666;margin-top:10px;margin-bottom:12px;"></div>
       	    
           <h2 style='font-family:"Times New Roman";font-size:45px;color:#000000;margin-top: 39px; margin-bottom: 44px;margin-left: 2px;'><?php the_title(); ?></h2> 
		   

          <div id="a-z">
     
             <?php
             // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
             // $args = array (
               // 'posts_per_page' => $posts_per_page,
                // 'post_type' => 'portfolio',
				// 'post_status' => 'publish',
				                   //array( 'post_type' => 'portfolio' ,'post_status' => 'publish'),
               // 'orderby' => 'title',
               // 'order' => 'ASC',
               // 'paged' => $paged
            // );
            // query_posts($args);
			$SQL = mysql_query("Select DISTINCT meta_value from wp_postmeta as m, wp_posts as p
			                    where
								m.post_id = p.ID
								and
								p.post_status = 'publish'
								and
			                    m.meta_key = 'mb_portfolio_info_agency'") or die(mysql_error());
			
             if ( mysql_num_rows($SQL) > 0 ) {
                $in_this_row = 0;
                while ( $res = mysql_fetch_array($SQL)) 
				{
				
					if(!empty($res['meta_value']))
					{
				echo "<div class='country_block'>";
				echo "<div class='country_name'>".$res['meta_value']."</div>";
				$country = $res['meta_value'];
				$SQL2 = mysql_query("Select DISTINCT post_title,post_id from wp_postmeta as m, wp_posts as p
			                    where
								m.post_id = p.ID
								and
								p.post_status = 'publish'
								and
			                    m.meta_value= '$country'
								and
			                    m.meta_key = 'mb_portfolio_info_agency'") or die(mysql_error());
						while ( $res2 = mysql_fetch_array($SQL2))
						{
						?>
						<div class='artist_name'>
						<a href="http://www.theartfellas.com/?page_id=<?php echo $res2['post_id']; ?>" rel="bookmark"><?php echo $res2['post_title']; ?></a>
						</div>
						<?php
						
						}
					echo "</div>";
					}
				}
                   
				 
                ?>
                <div class="navigation">
                   <div class="alignleft"><?php next_posts_link('&laquo; Higher Letters') ?></div>
                   <div class="alignright"><?php previous_posts_link('Lower Letters &raquo;') ?></div>
                </div>
             <?php } else {
                echo "<h2>Coming Soon.....</h2>";
             }
             ?>
     
          </div><!-- End id='a-z' -->
     
       </div><!-- End class='margin-top -->
     
    </div><!-- End id='rightcolumn' -->
     
    <?php //get_sidebar(); ?>
    <?php get_footer(country); ?>
     
