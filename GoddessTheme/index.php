
<?php get_header(); ?>

<div class="row">

  <div class="span8">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1> 

    <p class="post_time"><?php the_time('F jS, Y'); ?></p>

    <div class="post_content"><?php the_content(); ?></div>
	
    <br /><hr /><br />
	
    <?php endwhile; else: ?>
      <p><?php _e('太尴尬了::>_<::'); ?></p>
      <img src="http://www.chendihao.cn/wp-content/uploads/Pikachu.png" />
    <?php endif; ?>
   	 
  </div>

  <div class="span3 offset1">
    <?php get_sidebar(); ?>
  </div>
  
</div>

<div class="postnav">
  <?php if(function_exists('wp_pagenavi')){ wp_pagenavi(); } else { ?>
	  <div class="prev"><?php next_posts_link(__('« Previous Entries')) ?></div>
	  <div class="next"><?php previous_posts_link(__('Next Entries »')) ?></div>
  <?php } ?>
</div>

<?php get_footer(); ?>

