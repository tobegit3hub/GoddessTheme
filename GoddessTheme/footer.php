<hr>
  <div class="container">
    <footer class="footer">
      <p class="pull-right"><a href="#">Top</a></p>
        <p>Last update: <strong><?php $last = $wpdb->get_results("SELECT MAX(post_modified)
AS MAX_m FROM $wpdb->posts WHERE (post_type = 'post' OR post_type
= 'page') AND (post_status = 'publish' OR post_status = 'private')");
$last = date('Y.n.j', strtotime($last[0]->MAX_m));echo $last; ?></strong></p>
		
         <ul class="breadcrumb">
           <li>Power by  </li>	
           <li><a href="http://wordpress.org/" target="_blank">Wordpress</a> <span class="divider">/</span></li>
           <li><a href="http://twitter.github.io/bootstrap/" target="_blank">Bootstrap</a> <span class="divider">/</span></li>
           <li><a href="https://jquery.org/" target="_blank">JQuery</a><span class="divider">/</span></li>
           <li><a href="http://www.ubuntu.com/" target="_blank">Ubuntu</a><span class="divider">/</span></li>
           <li><a href="http://www.gnu.org/software/emacs/" target="_blank">Emacs</a><span class="divider">/</span></li>
           <li><a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Chrome</a><span class="divider">/</span></li>
           <li><a href="https://github.com/tobegit3hub/GoddessTheme.git" target="_blank">Github</a></li>
         </ul>
       </footer>
     </div>

   </div> <!-- /container -->

<?php wp_footer(); ?>

</body>
</html>
