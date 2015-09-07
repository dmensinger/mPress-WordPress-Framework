<?php get_header(); ?>

<div id="page">
	<div class="wrapper">
    
        <div class="two_third full_width_md">
            <div id="content">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
                <h1 class="pagetitle"><?php the_title(); ?></h1>
                        
                <div class="entry">
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                </div>          
                
            <?php endwhile; endif; ?>
    
            <?php $pid=$wp_query->post->ID; //Grab Page ID ?>
            
			<?php $args = array('post_type' => 'page', 'post_parent' => $pid, 'orderby' => 'menu_order', 'order' => 'asc', 'showposts' => -1 ); ?> 
            <?php $query = new WP_Query( $args ); ?>
            <?php if ( $query->have_posts() ); ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
            
				<?php include ('inc/query.php'); ?>
              
			<?php endwhile; ?>
			<?php wp_reset_postdata();?> 
            
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style">
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet"></a>
            <a class="addthis_button_linkedin_counter"></a>
            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
            </div>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52b3135e46e3af27"></script>
            <!-- AddThis Button END -->
   
            </div>
        </div>
	
        <div class="one_third full_width_md">
            <?php get_sidebar(); ?>
        </div>
    
    </div>
</div><!-- page -->

<?php get_footer(); ?>