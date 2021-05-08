<?php

/*
Project : Mini Image Gallery
 reads images from a directory and display them on the page,also we will implement error
  handling for different scenarios
*/
require 'directoryReader.php';

$images = directoryReader('images');

if(!$images){
  die('could not load files. ');
}


 ?>

 <!DOCTYPE html>
 <html lang="en" >
   <head>
     <meta charset="utf-8">
     <title> Gallery</title>
   </head>
   <body>
     <?php  foreach($images as $image): ?>
       <img src=" <?php echo $image; ?>" >
     <?php  endforeach;  ?>
   </body>
 </html>
