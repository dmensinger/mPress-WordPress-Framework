<?php get_header(); ?>

<div id="page">
	<div class="wrapper">
    
        <div class="two_third full_width_md">
            <div id="content">
        
              <?php if (have_posts()) : ?>
        
              <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
              <?php /* If this is a category archive */ if (is_category()) { ?>
                <h2><?php single_cat_title(); ?></h2>
              <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
              <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <h2>Archive for <?php the_time(get_option('date_format')); ?></h2>
              <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <h2>Archive for <?php the_time('F Y'); ?></h2>
              <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <h2>Archive for <?php the_time('Y'); ?></h2>
              <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h2>Author Archive</h2>
              <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2>Blog Archives</h2>
              <?php } ?>
        
        
                <?php while (have_posts()) : the_post(); ?>
                
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
                    <div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
                    <div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                </div>
        
            <?php else : ?>
        
                <h2 class="center">Not Found</h2>
        
                <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        
            <?php endif; ?>
        
            </div><!-- content -->
        </div>
    
        <div class="one_third full_width_md">    
            <?php get_sidebar(); ?>
        </div>

	</div>
</div>

<?php get_footer(); ?>




