<?php 

$page = $_GET['Page'];
$searchTerm = $_GET['search'];
$pages = 10;

// now lets replace the items from page and serachterm 

echo '<h3>Searching for: ' . $searchTerm . '</h3>';