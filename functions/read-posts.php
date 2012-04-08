<?php
  
  function list_posts( $post_array ){
  
    $post_count = count( $post_array );
    
    echo 'post count: '. $post_count;
    
    if( $post_count > 0 ){
      echo '<ul>';
      
        for( $i = 0; $i < $post_count; $i++ ){
          
          $self = $post_array[$i];
          
          echo '<li>';
            
            echo '<h1>' . $self->title . '</h1>';
            echo '<h2>' . $self->subtitle . '</h2>';
            echo $self->body;
            
          echo '</li>';
          
        }
    
      echo '</ul>';
    
    }
    
  }
  
  function get_posts( $folder ){
  
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
    
      $file = $folder . '/' . $file_array[$i];
      
      if( substr("$file_array[$i]", 0, 1) != "."){
        $post_json = file_get_contents( $file, 0, null, null );
        $post = json_decode( $post_json );
        $posts[] = $post;
      }
       
    }
    
    return $posts;
    
  }
  
?>