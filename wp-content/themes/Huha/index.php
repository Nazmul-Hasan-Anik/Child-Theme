<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <?php  bloginfo('name')  ?> </title>
    <?php wp_head() ?>
  </head>
  <body>
    <header>


    <h2> <a href="<?php echo site_url() ?>"><?php  bloginfo( 'name' ) ?> </a>  </h2>
  <h2>  <?php bloginfo( "description" ) ?></h2>
  </header>
  <?php
  if (have_posts()):
    while (have_posts()):
      the_post()
   ?>
   <h2><?php the_title() ?></h2>
   <?php the_content() ?>
 <?php endwhile;
endif ?>
  </body>
</html>
