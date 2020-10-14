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
// instead of assigining variable many a times you can just add the value whileyou echo out 

// example

echo 'My name is' , 'Jyoti';

// or you can do it the other way

// example 

$name = 'Jyoti';

echo 'My name is', $name;


// NEXT example is for if statements

$dayOfWeek = 2;

if ($dayTheWeek == 1 ) {
    echo 'Its Monday';
} else {
    echo 'It is not Monday';
}

echo $dayOfWeek;


// Best practices

// example

$daysOfTheWeek = 1;

if ($daysOfTheWeek = 2) {
    echo 'It is Monday';

} else {
    echo 'It is not Monday';
}

// Idealy check evebry single option.
// either you can use a new condition elseif 

// example

$daysOfTheWeek = 1;

if ($daysOfTheWeek = 2) {
    echo 'It is Monday';

} elseif ($daysOfTheWeek == 2) {
    echo 'It is Tuesday';
} else if ($daysOfTheWeek == 3) {

} else if ($daysOfTheWeek == 4) {
    echo 'It is Wednesday';
} else if ($daysOfTheWeek == 5) {
    echo 'its is Thursday'; 
} else {
 echo 'Not a valid option'
}

// so on and sp forth

// and if the options are outside the condition is will reflect the 
// last option. 

// Another example 

$dayOfWeek = 1

$daysOfWeek = [
    1 => 'Monday',
    2 => 'Thuesday',
    3 => 'Wednesday',
];

// now we can create an if statement to get the value provided

if (in_array($dayOfWeek, array_keys($daysOfWeek))) {
 echo '$daysOfWeek[$dayOfWeek]';
} else {
    echo 'not a valid day';
}
// If things dont work try understanding the logic behind the codes


// example for block nesting

// almost anything in php can be nested insde anither block if u have blocks

// lets build a block that tells us the name and also if we have a long name 

$name = 'Joey Tribyanni';

if ($name) {
    echo 'Your name is ' .$name;

    if (strlen($name) > 10) {
        echo 'oh, And you have a very long name'
    }
}

// you could technically nest as many if statments as you need 

// There are simpler ways to nest these statemts and avoid all the confusion its call the inversion operator


$name = 'joey';

if ( ) {
    return;
} 

echo 'your name is' .$name .'.';

if (strlen($name) > 10) {

 echo 'Oh! And you have a long name';

}

// you can also use true or false condition 


// examples of logical operator

if (true && true) {
    echo 'hello';
}

// you can also write (true && false) but you wont get any outcome as both the statements either need to be true or fales

// lets try something more real 
// lets create a username and password  

$username = 'Billy';
$password = 'Ilovedogs';

if ($username == 'Billy' && $password = 'Ilovedogs') {
    echo 'You are In';
}

// another example 

$weekDays = 3;
$workingTheWeekend = true;

if ($weekDays == 6 || $weekDays == 7 && $workingTheWeekend) {
    echo 'The weekend is here';
}

// if we define out number 6 or 7 we will get 'The weekend is here'; 



// next example is of comparison operator 
// Now we will be using === comparison operator

$upload = true;

if ($upload === ture) {
    echo 'Uploaded';
}

// Its a bit more safe to use === operator 

// another example 


$tableAvailable = true;

if ($tableAvailable === true) {
    echo 'Book a table';
}

if ($tableAvailable !== true) {
    echo 'No tables available';
}

// other comparison operator we can use 
// you can use exclamation mark 

// switch statement 
// we dont use them often but they are clean and easy to use 

switch (1) {
    case 1;
        echo 'The value is one';
        break;
    default;
        echo 'The value is unknown';
        break;

}


$weather = 'Sunny';
$color = null;

switch (true) {
    case $weather == 'Sunny';
        $color = 'blue';
        break;
    case $weather == 'Cloudy';
        $color = 'gray';
        break;
}


// We can add, subtract, multiply, divide and concatinate add strings 
// we'll learn of how to store things in database
// Example 

$view = 0;

$view = 0;

// We can assign the same value as many times we want

// but we can add another value to the same variable lets see how

$views = 0;
$views = $views + '1';

echo $views;

// we can use another way too 

$views = $views++;

// or 

$views++;
// and we can do this multiple times 
$views++
$views++
$views++
$views++

// everytime we write the vaule the number will increase 

echo $views
// the answer will be 5 as we added the vaule 5 times 

// another example
// lets assume we have taken a course with 30 classes 

$lessons = 30;
// but we have completed only 7 classes till now 
$completedLessons = 7;

// now the formula to calculate the percentage will be 

// 7 / 30 * 100

// lets add another value 

$percentageCompleted = ($completedLessons / $lessons) * 100;

echo "YOu've completed ($percentageCompleted)% of the course";

// or another way to get the percentage and avoid rest of the decimiles will be as follow 

$percentageCompleted = number_format($percentageCompleted, 2);
// or if you dont want the last to decimals you can just write 

$percentageCompleted = number_format($percentageCompleted);


// lets check another example for addition 

$balance = 500;
$cost = 25; 

$balance = $balance - $cost;

echo $balance;


// another example 

$rows = 10;
// we use for loop to initialise number 

for ($row = 1; $row <= $rows: $rows++) {
    if ($row % 2 === 0) {
        echo 'even';
    } else {
        echo 'Odd';
    }
}

// now lets cover for loop 
 for ($a = 1; $a <= 10; $a++) {
    echo $a . <br>;
 }

// these kind of loops are used when you already know the number 

// lets check another example 

$totalItems = 210;
$itemsPerPage = 25;

$pageCount = $totalItems / $itemsPerPage;

echo $pageCount;  

// but what we need to doid round up the value as we are trying to find the number of pages 
// how can we do that 

// hence we use a php fuction called ceil and the oposite function will be floor

$pageCount = ceil($totalItems / $itemsPerPage);

echo $pageCount;

// now lets generate a for loop 
// you will find and i variale in for loop which stand for increment 


// this is how you calculate of how many pages to show 


for ($i = 1; $i <= $pageCount; i++) {
    echo '<a href="?page ' . $i . ' ">' . $i . '</a>'


        // if theres only one page to display following is the way to write 


if ($pageCount => 1) {
    for ($i = 1; $i <= $pageCount; i++) {
    echo '<a href="?page ' . $i . ' ">' . $i . '</a>';

}


// another example 

$namess = ['Alex', 'Maria', 'Joe'];

for (i = 0; $i < count($namess); $i++ ) {
    echo $namess[$i], '<br>' ;

}

//  add br for line break to avoid loops to keep running 


// lets learn about while loop 

while (false) {
    echo 'It will run';
}


// another example 

$curentNumber = 1;
$endAt = 10;
$incrementBy = 1;

while ($curentNumber <= $endAt) {
    $curentNumber += $incrementBy;
    echo $curentNumber, <br> ;
}

// becaue it is equal to or add by the final outcome will be 11 

// the other option is to echo out before we increment it 
// these loops give us control over how we initialise and check, it lets us create if statment but with more control inside the block 


// lets create another statment 

lets role a dice till we get six 

$numberIWant = 6;

// you need to use rand 

echo rand($numberIWant);

// lets create a while loop and check 

while (($diceRole = rand(1,6)) !== $numberIWant) {
    echo "You rolled a {$diceRole}, we need a {$numberIWant}" <br>;
} 