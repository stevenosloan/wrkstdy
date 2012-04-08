<!DOCTYPE html>
<html>
  <head>
    <?php
      $title = "WRKSTDY";
      require('includes/head.php'); require('functions/read-posts.php'); 
    ?> 
  </head>
  <body>
    <div id="wrapper">
      <header>
        <h1>WRKSTDY</h1>
        <p>The personal blog of <a href="http://stevenosloan.com">Steven Sloan</a> - a Designer turned Developer - where he muses on work strategies, development techniques, and anything else that seems relevant.</p> 
      </header>
      <section id="content">
      <?php 
        $posts = get_posts( "pages" );
        
        
        $post_count = count( $posts );
        for( $i = 0; $i < $post_count; $i++ ){
          
          $post = $posts[$i];
          
          echo '<article class="post">';
            
            echo '<header>';
              echo '<hgroup>';
                echo '<h1>' . $post->title . '</h1>';
                echo '<h2>' . $post->subtitle . '</h2>';
              echo '</hgroup>';
            echo '</header>';
            
            echo $post->body;
            
          echo '</article>';
        
        }
      ?> 
      </section>
      <footer>
        <p>&copy;2012 Steven Sloan</p>
      </footer>
    </div>
  </body>
</html>
