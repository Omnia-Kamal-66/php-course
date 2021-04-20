<?php

$name  = 'Omnia';
$age = 25;

$info = "My name is " . $name . "Im " .$age . 'years old';
$message = 'it\'s a lovely day ';
// use \ to escape the apostrophe
//echo $info;

//intgers and floats

$bankBalance = 1.2e6;
//echo 'your bank balance is'. $bankBalance  ;

//booleans

$fileIsUploaded = true;

if($fileIsUploaded){
  //echo 'Your file is uploaded';
}

//var_dump(is_int(1));

//arrays

$names = ['Omnia' , 'Aya' , 'Soli'];
//use var-dump to view the values inside the array
//var_dump($names);
//echo $names; //this won't work
//echo $names[0];
//$names[]='Mahmoud';

//echo $names[3];


//associative arrays and multidimensional arrays

// $users = [
//   [
//     'username'=> 'Omnia',
//     'mail'=> 'omnia@gmail.com',
//     'likes'=> ['books','cats']
//   ],
//   [
//     'username'=> 'Soli',
//     'mail'=> 'soli@gmail.com',
//     'likes'=> ['books','cats']
//   ]
// ];
//
// var_dump($users);
// echo $users[1]['mail'];
// echo $users[0]['likes'][0];

//concatination

$weather = 'sunny';
$degrees = 30;
$status = 'the current weather is' .$weather  . ' and it is ' .$degrees . ' degrees';
//or
$myStatus = "the current weather is $weather and it is $degrees degrees";
