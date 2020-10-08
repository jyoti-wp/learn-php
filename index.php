<?php


// there are two types od data types
// 1. strings
// when words are written in '' ""

// 2. integer
// which are numbers can be from 0 to any number
// there are also floating point numbers also called or known as float example numbers with decimel point


// 3. boolean

// which either can be true or fales.

// 4. array

// array are collection of different variables 
// which can be written 
// ['joey', 'sammy', 7]
// [7, 8, 9, 10] which will always give you multiple values

// 5. object 

// 6. resource
// when you wanna open a file in php

// 7. NULL
// no value assigned

// 8. callback

$daysInWeek = 7;

// php will always use the latest command you have overwridden

$daysInWeek = 8;

// we can overwride the value as many times as we want as the stytem will always choose the latest given value

// example of concatinate strings

$text ='There are ' . $daysInWeek . 'days in a week';  

echo $text;



// lets start with strings
// string is defined by putting textside of single quotes.
// we can also use double quotes but make sure you dont practice both
// pick what you want. Even if your using numbers make sure to use quotes 

// example

$message = 'It\'s a lovely day today';

echo $message;

$thoughtOfTheDay = "she said \"learning PHP is fun\"";
// if your using single quotes you wont have to use backslash

$thoughtOfTheDay = 'she said "learning PHP will be fun"';


echo $thoughtOfTheDay;


// integer

// how do we store a simple integer
// it can be age or any number even if its negative. including zero
// we can perform calculations we can add thing up by concatinating strings

$daysInaWeek = 7;

// float

// now float is simple

// example

$age = 10;

// echo $age;

$fileIsUploaded = true;
// now use if statement to check if its value is true or false
// lets creat an if value
if ($fileIsUploaded) {
    echo 'Your file is uploaded';
}


// if you ever wanna check what kind of values your working on use var_dump

examples of array

$people = [
    'alex' => 26,
    'billy' => 21
];

echo $people[];

// you can create an array within an another array

// example

// $user = [
//     ['username' => 'alex', 'email => 'alex@icloud.com', 'likes' => ['cats', 'food']], 
//     ['username' => 'billy', 'emial => billy@icloud.com', 'likes' => ['Dogs', 'Books']]
// ];

// echo '<pre>' ,var_dump($user), '</pre>';


// NULL
//  if you are trying to find a variable that doesnt exist or have no value assigned, its considered as null variables

$name = 'alex'

users($name);

var_dump($name);


// example of concatinating strings and values

// examples


$weather = 'Sunny';
$degrees = 30;

$status = 'The current weather is' .$weather. 'and it\'s' .$degrees dergrees;

echo $status;

// if you want to add any symbol or vaalue at the end of the variable value for exaple instead of writing degree we can actually use a sign just make sure that variables are wrapped in a value
