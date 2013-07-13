

<?php get_header(); ?>

<div class="row">

  <div class="span8">

   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	  <h1 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1> 

	<p class="post_time"><?php the_time('F jS, Y'); ?></p>

	<div class="post_content"><?php the_content(); ?></div>

	<hr />
	
   <?php endwhile; else: ?>
	  <p><?php _e('太尴尬了::>_<::'); ?></p>
	  <img src="http://www.chendihao.cn/wp-content/uploads/Pikachu.png" />
   <?php endif; ?>
   	 
  </div>

  <div class="span3 offset1">
	<?php get_sidebar(); ?>
  </div>
  
</div>

<?php get_footer(); ?>
