<?php

//get and post super global array

/*
 super global is a special name given to global php variables that hold different types of information
in the url of our index page we added a query string like that (index.php?slug=learn-php) we want to pick up the value of the slug from the url and use it on the server side to look up this record in database and return the value of this record
we pick this up using the get super global

we create links in html that outputs these things for the query string

*/
//we will generate a link for each page and display the one we're calling

// var_dump($_GET);
//
// echo $_GET['slug'];

//example1:

$page = $_GET['page'];
$searchTerm= $_GET['search'];
$pages=10;

echo '<h3>You are seaching for : ' . $searchTerm .'</h3>';
echo '<p>and you are on page '. $page . '</p> ';

//we eill generate a list of links here which are the page nummbers and then be able to search by switch the page
//we want to change the page value in the query string by clicking the links of page $numbers
for($i=1 ; $i <=$pages ; $i++){

  echo '<a href= "?search='.$searchTerm.'&page='.$i.'">'.$i .'</a>  ';
}
