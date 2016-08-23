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
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">NeedleTherapy</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid header">
      <div class="container">
      	<div id="title-boxes">
	      	<div id="header-img-box">
		        <img  class="img-responsive" src="img/logo_yellow_star.png" />
  		    </div> <!-- /#header-img-box -->
  		    <div id="header-text-box">
		        <h1 id="site-title">NeedleTherapy</h1>
		        <h2 id="site-sub-title">Acupuncture and Nutrition</h2>
	       </div> <!-- /#header-text-box -->
       </div> <!-- /#title-boxes -->
      </div>
    </div> <!-- /.header -->