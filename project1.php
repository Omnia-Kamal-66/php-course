<?php

/*
 PROJECT TO PRACTICE:
  we will build a small application that ever time we refresh the page we get a different quote
*/

$quotes = [
  '“Be yourself; everyone else is already taken.”
    ― Oscar Wilde',
  '“You only live once, but if you do it right, once is enough.”
   ― Mae West',
  '“In three words I can sum up everything Ive learned about life: it goes on.”
   ― Robert Frost',
  '“If you want to know what a mans like, take a good look at how he treats his inferiors, not his equals.”',
  '“If you tell the truth, you dont have to remember anything.”
   ― Mark Twain'
];

$randomIndex= rand(0 , 4);
//or
$randomIndex= array_rand($quotes);
echo  $quotes[$randomIndex];

/*
this is my solution , the instructor's was way more complicated for this simple task
but i've learned that i can insert an php code inside an html code using the php tag
*/
