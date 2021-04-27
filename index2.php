<?php
//switch statement

$weather = 'windy';
$color =null;

switch (true){
  case $weather == 'sunny':
    $color = 'blue';
    break;
  case $weather == 'cloudy':
    $color = 'grey';
    break;
  default :
    echo 'weather is not defined';
    break;
}
echo $color;
/* we can pass a 'true' value to the switch statement when we want to evaluate every case */
