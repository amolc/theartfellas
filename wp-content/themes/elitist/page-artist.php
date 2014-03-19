	

    <?php
    /*
    Template Name: All Artist
     
    A WordPress template to list page titles by first letter.
     
    You should modify the CSS to suit your theme and place it in its proper file.
    Be sure to set the $posts_per_row and $posts_per_page variables.
    */
    $posts_per_row = 3;
    $posts_per_page = 30;
    ?>
     
    <?php include('header_artist_qasim.php'); //get_header(); ?>
     
    <style type="text/css">
    
    </style>
     
    <div id="main-background">
     
       <div id="main-column">
       <!--	<div style='font-size: 45px;font-family: "Times New Roman";'>View all artist in thumbnails <a href="http://apps.fountaintechies.com/theartfellas/?page_id=3631">here</a></div>-->
       	    <div style="border-bottom: 2px solid #666666;margin-top:10px;margin-bottom:12px;"></div>
       	    
           <h2 class="art_alpha"><?php the_title(); ?></h2> 
		   <!--<div class="by_country" ><a href="http://www.theartfellas.com/?page_id=4052">By country</a></div>-->
									
          
         
          <div id="a-z">
     
             <?php
             $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
             $args = array (
               'posts_per_page' => $posts_per_page,
                'post_type' => 'portfolio',
				'post_status' => 'publish',
				//array( 'post_type' => 'portfolio' ,'post_status' => 'publish'),
               'orderby' => 'title',
               'order' => 'ASC',
               'paged' => $paged
            );
            query_posts($args);
			//$SQL = mysql_query("Select * from wp_posts where post_type='portfolio' and post_status = 'publish' ") or die(mysql_error());
             if ( have_posts() ) {
                $in_this_row = 0;
                while ( have_posts() ) {
                   the_post();
                   $first_letter = strtoupper(substr(apply_filters('the_title',$post->post_title),0,1));
                   if ($first_letter != $curr_letter) {
                      if (++$post_count > 1) {
                         end_prev_letter();
                      }
                      start_new_letter($first_letter);
                      $curr_letter = $first_letter;
                   }
                   if (++$in_this_row > $posts_per_row) {
                      end_prev_row();
                      start_new_row();
                      ++$in_this_row;  // Account for this first post
                   } ?>
                   <div class="title-cell"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
                <?php }
                end_prev_letter();
                ?>
                <div class="navigation">
                   <div class="alignleft"><?php next_posts_link('&laquo; Higher Letters') ?></div>
                   <div class="alignright"><?php previous_posts_link('Lower Letters &raquo;') ?></div>
                </div>
             <?php } else {
                echo "<h2>Sorry, no posts were found!</h2>";
             }
             ?>
     
          </div><!-- End id='a-z' -->
     
       </div><!-- End class='margin-top -->
     
    </div><!-- End id='rightcolumn' -->
     
    <?php //get_sidebar(); ?>
    <?php get_footer(); ?>
     
    <?php
    function end_prev_letter() {
       end_prev_row();
       echo "</div><!-- End of letter-group -->\n";
       echo "<div class='clear'></div>\n";
    }
    function start_new_letter($letter) {
       echo '<div style="border-bottom: 2px solid #666666;margin-top: 34px; "></div>'."<div class='letter-group'>\n";
       echo "\t<div class='letter-cell row-cells fl'>$letter</div>\n";
       start_new_row($letter);
    }
    function end_prev_row() {
       echo "\t</div><!-- End row-cells -->\n";
    }
    function start_new_row() {
       global $in_this_row;
       $in_this_row = 0;
       echo "<div class='row-cells'>\n";
    }
     
    ?>

