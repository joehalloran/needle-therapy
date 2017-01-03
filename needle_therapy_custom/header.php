<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Needle Therapy">


    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <?php 
    global $wp;
    $current_url = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
    ?>

    <meta property="og:url"           content="<?php echo $current_url ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Needle Therapy" />
    <meta property="og:description"   content="<?php bloginfo('description'); ?>" />
    <meta property="og:image"         content="<?php echo home_url().'/wp-content/uploads/acupuncture-points.jpg'; ?>" />


    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <?php wp_head();
    if ( is_admin_bar_showing() ) {
        ?>
          <style>
          #header {
            top: 32px;
          }
          </style>
        <?php
    }
    ?>
  </head>
  