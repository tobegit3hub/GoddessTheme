<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tobe">
    <meta name="author" content="tobe">

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          
	        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>

          <div class="nav-collapse collapse">
            
		        <ul class="nav">
		          <?php wp_list_pages(array('title_li' => '')); ?>
		        </ul>

		        <form class="navbar-search pull-right">
		          <input name="s" type="text" class="search-query" placeholder="Search">
		        </form>

          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
