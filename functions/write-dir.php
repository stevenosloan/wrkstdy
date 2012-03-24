<?php
  
  echo 'Start Directory';
  
  // open directory
  $directory = opendir("pages");
  
  // get each file
  while( $file_name = readdir( $directory ) ){
    $file_array[] = $file_name;
  }
  
  // close directory
  closedir( $directory );
  
  // count files
  $file_count = count( $file_array );
  echo '<h2>' . $file_count . ' files</h2>';
  
  for( $i = 0; $i < $file_count; $i++ ){
  
    $file = $file_array[$i];
  
    if( substr("$file_array[$i]", 0, 1) != "."){
      echo '<li>';
        echo '<a href="'.$file.'">'.$file.'</a>';
      echo '</li>';
    }
  }
  
?>