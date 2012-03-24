<?php
  
  function list_posts( $folder ){
  
    // open directory
    $directory = opendir( $folder );
    
    // get each file
    while( $file_name = readdir( $directory ) ){
      $file_array[] = $file_name;
    }
    
    // close directory
    closedir( $directory );
    
    // count files
    $file_count = count( $file_array );
    
    for( $i = 0; $i < $file_count; $i++ ){
    
      $file = 'pages/' . $file_array[$i];
      $post_json = file_get_contents( $file, 0, null, null );
      
      $post = json_decode( $post_json );
      if( substr("$file_array[$i]", 0, 1) != "."){
        echo '<article>';
          echo '<h1>'. $post->title . '</h1>';
          echo '<h2>'. $post->subtitle . '</h2>';
          echo $post->body;
        echo '</article>';
      }
    }
  
  }
  
?>