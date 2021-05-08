<?php
//scope :
/*any variable defined outside of the function can't be used inside of the function and vice Traversable
to get around this you can add a 'global' word inside the function followed by the name of the vriable outside the scope of the function.
you can also pass the variable as a parameter to the function every time you use the function
or
we can use the 'use' keyword to bring any variable inside the function
but we have to define the function in a variable

*/

/*
require and include :
require means if we don't find the file the rest of our code won't run unlike include 

*/
$config=[
  'seperator'=> '_'
];

$fullName = function($firstName,$lastName) use ($config)
{

  // global $config;

  return "{$firstName}{$config['seperator']}{$lastName}";
};
echo $fullName('Omnia','Kamal');
