<?php

//exampl1 :
//
// $names = [
//   ['userName'=> 'Omnia'],
//   ['userName'=> 'Aya'],
//   ['userName'=> 'hoda'],
//   ['userName'=> 'soli'],
//   ['userName'=> 'aml'],
//   ['userName'=> 'kemo'],
//   ['userName'=> 'ola'],
//   ['userName'=> 'homos'],
//
// ];
//
// $toFind= 'hoda';
// $result = null;

// foreach($names as $name ){
//  if($name['userName'] === $toFind){
//    $result = $name;
//    break;
//  }
// };
// var_dump($result);

//exampl2:
// $toSkip = 'hoda';
//
// foreach ($names as $name){
//   if($name['userName'] === $toSkip){
//     continue;
//   }
//   echo $name['userName'] , '<br>';
// }



//example3:
$users = [
  [
    'userName'=> 'Omnia',
    'likes'=> ['cats' , 'books']
  ],
  [
    'userName'=> 'Soli',
    'likes'=> ['code' , 'books']
  ],
  [
    'userName'=> 'Belo',
    'likes'=> ['code' , 'traveling']
  ],
];

$tofind= 'code';
$found = null;


foreach ($users as $user ){
  foreach ($user['likes'] as $like ){
    if($like === $tofind)
    {
      $found = $user;
      break 2;
    }
  }
};
var_dump($found);
