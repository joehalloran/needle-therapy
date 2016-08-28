<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?> ">
    <meta name="author" content="Rosedale Primary school">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <?php
    if ( is_admin_bar_showing() ) {
        ?>
          <style>
          .navbar-fixed-top {
            margin-top: 32px;
          }
          </style>
        <?php
    }
    ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-1-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php site_url(); ?>">NeedleTherapy</a>
        </div>
        <?php
        wp_nav_menu( array(
                'theme_location'    => 'main_menu',
                'depth'             => 2,
                'container'         => 'nav',
                'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
        );
        ?>
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid header">
      <div class="container">
      	<div id="title-boxes">
	      	<div id="header-img-box">
		        <img  class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_yellow_star.png" />
  		    </div> <!-- /#header-img-box -->
  		    <div id="header-text-box">
		        <h1 id="site-title">NeedleTherapy</h1>
		        <h2 id="site-sub-title">Acupuncture and Nutrition</h2>
	       </div> <!-- /#header-text-box -->
       </div> <!-- /#title-boxes -->
      </div>
    </div> <!-- /.header -->