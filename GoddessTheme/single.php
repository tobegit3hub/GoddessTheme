<?php get_header(); ?>
 
<div class="row">
  <div class="span8">
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <p><em><?php the_time('F jS, Y'); ?></em></p>
 
        <?php the_content(); ?>
 
        <hr>
        <?php comments_template(); ?>
 
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
