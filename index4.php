<?php
//for loop
//examole1 :
$totalItems = 250 ;
$itemsPerPage = 23;

$pageCount = ceil($totalItems / $itemsPerPage);

if($pageCount >1){
  for($i =1 ; $i <=$pageCount ; $i++){
    // echo '<a href= "?page =' .$i . '">' . $i . '</a>' ;
  }
}

//example2:
$names =['Aya','Omnia','Mahmoud','Aml' ,'Kamal' ,'Ahmed'];

for($i =0 ; $i < count($names) ; $i++){
  echo $names[$i] , '<br>';
}
