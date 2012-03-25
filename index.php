<!DOCTYPE html>
<html>
  <head>
    <?php
      $title = "WRKSTDY";
      require('includes/head.php'); require('functions/read-posts.php'); 
    ?> 
  </head>
  <body>
    <h1>HAML Template</h1>
    <?php 
      $posts = get_posts( "pages" ); 
      list_posts( $posts ); 
    ?> 
  </body>
</html>
