<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

<div id="page">
	<div class="wrapper">
    
        <div id="content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
            <h1 class="pagetitle"><?php the_title(); ?></h1>

            <div class="entry">
                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
            </div>          
            
        <?php endwhile; endif; ?>
       
        </div>
    
    </div>
</div><!-- page -->

<?php get_footer(); ?>