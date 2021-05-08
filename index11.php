<?php



// function add (array $numbers ){
//   $total=0;
//   foreach ($numbers as $number){
//     $total+= $number;
//   }
//   return $total;
// }
// $numbers =[5,3,4];
//
// echo add($numbers);


//we can use get arg function instead
// function add(){
//   $total=0;
//   foreach(func_get_args() as $number){
//     if(!is_numeric($number)){
//       continue;
//     }
//
//     $total+= $number;
//   }
//   return $total;
// }
//
// echo add(1,5,9,12,'omnia');

//or

function add(){
  return array_sum(func_get_args());
}
echo add(13,3);
