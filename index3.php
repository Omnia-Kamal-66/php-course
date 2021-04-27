<?php
//Arithmatic operators examples

//example1:
$views =0;
$views = $views + 1 ;
$views++; //more simple way to increment
$views = $views + 10 ;
$views += 10 ; //more simple way to increment

// echo  $views ;

//example2 :
$totalLessons = 30 ;
$completedLessons = 7;
//we can format the number using a function in php to determine how many number to show after the decimal point
$completedPercentage= number_format(($completedLessons / $totalLessons ) * 100) ;
// echo "You've completed {$completedPercentage}% of this course .";

//example 3 :

$rows =10 ;

for ($row =1 ; $row <= $rows ; $row++){
  if($row % 2 == 0){
    // echo 'Even';
  }else{
    // echo 'Odd';
  }
}

//example4 :
$a =10 ;
//exponential
echo $a ** 2;
