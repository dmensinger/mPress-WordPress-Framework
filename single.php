<?php get_header(); ?>

<div id="page">
    <div class="wrapper">
    	
        <div class="two_third full_width_md">
            <div id="content">
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    
                    <h1 class="pagetitle"><?php the_title(); ?></h1>
                    <div class="metadate" style="margin:-10px 0px 15px 0px;">Posted on <?php the_time(get_option('date_format')) ?></div>
        
                    <div class="entry">
        
                        <?php the_content('Read the rest of this entry &raquo;'); ?>
                        
                    </div><!-- entry -->
            
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_button_linkedin_counter"></a>
                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                    </div>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52b3135e46e3af27"></script>
                    <!-- AddThis Button END -->
                
                <?php comments_template(); ?>
                
                <?php endwhile; ?>
                
                    <div id="navigation">
                        <div class="left"><a href="/blog">&laquo; Back To Blog</a></div>
                    </div>
            
                <?php else: ?>
            
                    <p>Sorry, no posts matched your criteria.</p>
            
            <?php endif; ?>
    
            </div><!-- content -->
		</div>
		
        <div class="one_third full_width_md">
			<?php get_sidebar(); ?>
		</div>
        
	</div>
</div><!-- page -->

<?php get_footer(); ?>