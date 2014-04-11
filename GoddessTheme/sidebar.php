
<div>

  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('First_sidebar') ) : ?>
  
    <h4>Category</h4>
      <ul>
        <?php wp_list_categories('depth=1&title_li=&orderby=id&show_count=0&hide_empty=1&child_of=0'); ?>
      </ul>
    <?php endif; ?>

    <br/>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sideba('Fourth_sidebar') ) : ?>
      <h4>Archives</h4>
      <ul>
        <?php wp_get_archives('show_post_count=true'); ?>
      </ul>
    <?php endif; ?>

    <br/>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Second_sidebar') ) : ?>
      <h4>Posts</h4>
      <ul>
        <?php $posts = get_posts('numberposts=6&orderby=post_date');
          foreach($posts as $post) {
            setup_postdata($post);
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
          }
          $post = $posts[0];
        ?>
      </ul>
    <?php endif; ?>

    <br/>
    <h4>Comments</h4>
    <?php $pop = $wpdb->get_results("SELECT id, post_title, comment_count FROM {$wpdb->prefix}posts WHERE post_type='post' AND post_status='publish' AND post_password='' ORDER BY comment_count DESC LIMIT 10"); ?>
    <ul>
      <?php foreach($pop as $post) : ?>
        <li><a href="<?php echo get_permalink($post->id); ?>"><?php echo $post->post_title.'('.$post->comment_count.')'; ?></a></li>
      <?php endforeach; ?>
    </ul>

</div>

