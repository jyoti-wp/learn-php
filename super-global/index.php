<?php 

// $page = $_GET['Page'];
// $searchTerm = $_GET['search'];
// $pages = 10;

// // now lets replace the items from page and serachterm 

// echo '<h3>Searching for: ' . $searchTerm . '</h3>';


// The ternary operator 

// It will show us how to set any page to default one in case if the server is not working or from help page break 
// we use ternary operator 
// example

// $page = 1;

// if (isset($_GET['$page'])) {
//     $page = $_GET['page'];
// }

// echo $page;


// theres also an easier way 
// Now we are gonna use the ternary operator
// ternary operator is an inline if statement 
// which means we can use isset bore the if statement 


$page = isset($_GET['page']);

