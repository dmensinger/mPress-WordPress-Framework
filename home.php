<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="home"></div>

<div id="page">
	<div class="wrapper">

        <div id="content">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="entry">
                <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
            </div>          
            
        <?php endwhile; endif; ?>
       
        </div>
    
    </div>
</div>

<?php get_footer(); ?>