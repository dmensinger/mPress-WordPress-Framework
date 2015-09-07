<?php get_header(); ?>

<div id="page">
	<div class="wrapper">
    
        <div class="two_third">
            <div id="content">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
                <div class="entry">
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                </div>          
                
            <?php endwhile; endif; ?>
           
            </div>
        </div>
	
        <div class="one_third last_column">
            <?php get_sidebar(); ?>
        </div>
    
    </div>
</div><!-- page -->

<?php get_footer(); ?>