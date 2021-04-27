<?php
//while and do while loops

//example1:
$startAt=1;
$endAt=10;
$incrementBy=1;

while($startAt <= $endAt){
  // echo $startAt;
  $startAt += $incrementBy ;
}

//example2:
$wantedNumber=3;
while(($diceRolled = rand(1,6)) !== $wantedNumber ){

  // echo "you rolled a $diceRolled , but we want a $wantedNumber <br> ";
}
// echo "You Rolled a $wantedNumber";

//example3:

do{
  echo 'this will run at least once';
}while(false);
