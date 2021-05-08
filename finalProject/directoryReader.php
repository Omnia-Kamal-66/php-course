<?php

function directoryReader ($directory , array $excludeFiles= ['.' , '..'] ){

   $files = [];

   //check if directory doesnt exist

   if(!is_dir($directory)){

     return null;
   }
//check if we cant open the directory
  if(!($filesDirectory= opendir($directory))){
    return null;
  }
 //check if we cant read a file
  while(($file = readdir($filesDirectory)) !== false){

    if(in_array($file , $excludeFiles)){
      continue;
    }

    $files[] = $directory .'/'. $file; //addendind to an array

  }

return $files;


}
