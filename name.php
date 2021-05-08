<?php

$name= $_POST['username'] ?? null;

if(empty(trim($name))){

  header('Location: http://localhost:80/index.php');

  //don't forget THERE IS NO WHITE SPACES BETWEEN LOCATION AND THE COLON it gives an INTERNAL SERVER ERROR
  // echo 'Enter Your Name';
  // return;

}
echo "Hi There ,", $_POST['username'];
