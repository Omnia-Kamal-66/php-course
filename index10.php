<?php
//you can have multiple return values of a function if you want

function fullName($firstName , $lastName = null , $seperator='_'){
  if(trim($firstName)=== ''){
    return ;
  }
  if($lastName === null){
    return $firstName;
  }
  return " $firstName $seperator $lastName ";
}
echo fullName('Omnia');
