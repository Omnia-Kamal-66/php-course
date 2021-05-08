<?php
//functions
//limit the number of arguments you pass to a function as much as possible

function firstName(){
  return 'Omnia';
}

function fullName($firstName , $lastName){
  return "$firstName  $lastName";
}

$fullName = fullName(firstName(),'Kamal');
echo $fullName;

//you must pass aguments whe calling a function ,but you can have optional arguments
//you can set a default value to any argument so if you dont pass a value to it , the default value will be assigned to it


//you can assign a function to a variable but we you call it , call it as a vraiable

$likes = function($firstOne , $secondOne , $seprator = 'and'){
  return "$firstOne $seprator $secondOne";
  };
echo $likes('cats', 'dogs');

//if you're defining a function into a variable , then you cant call it before it is defined
//but if you defined the function the normal way , you can call it before the function definition
