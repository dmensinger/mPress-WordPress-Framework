<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div id="page">
	<div class="wrapper">

    	<div class="two_third full_width_md">
            <div id="content">
    
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            
                    <h1><?php the_title(); ?></h1>
        
                    <div class="entry">
                        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                    </div>
                    
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
                        
                <?php
                $temp = $wp_query;
                $wp_query= null;
                $wp_query = new WP_Query();
                $wp_query->query('showposts=5'.'&paged='.$paged);
                while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                    
               <div id="query">
                    <div class="thumb">
                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { the_post_thumbnail(); } 
                        else { echo '<img src="'.get_bloginfo('template_url').'/images/thumb.jpg">'; } ?></a>
                    </div>
                    <div class="text">
                        <div class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                            <div class="metadate">
                                Posted on <?php the_time(get_option('date_format')) ?> in  <?php the_category(', ') ?>
                            </div>	
                            <?php the_excerpt(); ?>
                        <div class="more"><a href="<?php the_permalink() ?>">Read More</a></div>
                    </div>
                </div>
                            
               <?php endwhile; ?> 
                
                <div id="navigation">
                    <div class="left"><?php next_posts_link('&laquo; Older Blog Posts') ?></div>
                    <div class="right"><?php previous_posts_link('More Recent Blog Posts &raquo;') ?></div>
                </div>
                
                <?php $wp_query = null; $wp_query = $temp;?>
           
            </div>
		</div>
	
        <div class="one_third full_width_md">
            <?php get_sidebar(); ?>
        </div>

	</div>
</div><!-- page -->

<?php get_footer(); ?>