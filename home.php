<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="home"></div>

<div id="page">
	<div class="wrapper">
    
        <div class="two_third full_width_md">
            <div id="content">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
                <div class="entry">
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                </div>          
                
            <?php endwhile; endif; ?>
           
            </div>
        </div>
	
        <div class="one_third full_width_md">
            <?php get_sidebar(); ?>
        </div>
    
    </div>
</div>

<?php get_footer(); ?>