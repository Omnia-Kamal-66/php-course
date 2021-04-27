<?php
//if statement basics
// $dayOfWeek= 1;
// if($dayOfWeek ==1){
//   echo "It is Monday";
// }elseif ($dayOfWeek==2) {
//   echo "it is Tuesday";
// }elseif ($dayOfWeek==3) {
//   echo "it is Wednesday";
// }else {
//   echo "that is not a valid day";
// }

//another solution

// $dayOfWeek =3;
// $daysOfWeek = [
//   1=> 'Monday',
//   2=>'Tuesday',
//   3=>'Wednesday'
// ];
//
// if(in_array($dayOfWeek , array_keys($daysOfWeek))){
//   echo $daysOfWeek[$dayOfWeek];
// }else{
//   echo "That is not a  vlaid day";
// }

// var_dump(array_keys($daysOfWeek));
//instead of nesting

// $name = 'Omnia Kamal Shaban';
// if(!$name){
//   return;
// }
//
// echo "Your Name is $name .";
//
// if (strlen($name)>10){
//   echo "oh , and you havve a long name .";
// }

// if(1){
//   echo "This will always be run";
// }
//1 is a truthy value as well as  any number greater than one and negative numbers also treated as truthy values
// 0 is treated as a faulsy value

//logical operators
// $userName= 'Omnia';
// $password = 'ilovecats'
// if($userName=='Omnia' && $password='ilovecats'){
//   echo "YOu are in!";
// }

 //take care of presedence of logical opertors
 //comparison opertors
 // var_dump((bool) 'false'); //typecasting is importat ,check it out


 // $tablesAvailable= 'true' ;
 // //use triple equal signs to avoid auto typecasting that php does for you to check the exact value and type
 // if ($tablesAvailable=== true){
 //   echo 'book a table now!';
 // }
$maxRoomsAllowed = 5;
$roomsRequested =7;
$roomsAvailable= 20;
if(($roomsRequested >= $roomsAvailable) || ($roomsRequested >= $maxRoomsAllowed) ){
  echo 'please choose less rooms.';
}else{
  echo 'Your Booking is complete.';
}
