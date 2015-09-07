<div id="query">
    <div class="content">	
        <div class="thumb">
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { the_post_thumbnail(); } 
            else { echo '<img src="'.get_bloginfo('template_url').'/images/thumb.jpg">'; } ?></a>
        </div>
        <div class="text">
            <div class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>