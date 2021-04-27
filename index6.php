<?php

//for each loop

//it is used to loop through an array

//example1:

$names = ['omnia', 'aya' , 'mahmoud'];
foreach($names as $name){
  // echo $name , '<br>';
}

//example2:

$topics =
[
  [
    'id'=> 1,
    'title'=> 'The best way to learn php',
    'posts'=>
      [
       ['body'=> 'practice more'],
       ['body'=>'work on a project']
      ]
  ],
  [
    'id'=> 2,
    'title'=> 'how to use a for each loop',
    'posts'=>
      [
       ['body'=> 'just watch this part'],

      ]
  ]
];


foreach ($topics as $topic){
  echo '<h1>' . $topic['title'] . '</h1>' ,'<br>';
  foreach($topic['posts'] as $post ){
    echo '<p>' .$post['body'] . '</p>';
  }
}
