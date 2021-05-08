<?php

// phpinfo();

// $page = $_GET['page'] ?? 4 ; //ternary operator of php versions newer than version 7
//
// echo $page;

$balance =100;
$availableBalance = $balance ?? 'zero' ;

echo "your available balance is $availableBalance ";
