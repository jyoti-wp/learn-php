                <!-- Example for Dumping -->
<!-- var_dump -->


<!-- we use it to go ahead and get the value by dumping the data  -->



<!-- lets define a variable  -->
<!-- 
$users = ['Jyoti' => 27, 'Priya' => 25];


var_dump($users) -->



                        <!-- lets move on to fucntions  -->

<!-- function allows you to break you codes in to reusable blocks -->

<!-- useful for object oriented programming  -->


<!-- function  -->

<!-- <?php

// function fullName() {
//     echo 'Joey';
// }

// to call out we call the funtion by name 

// fullName (); -->


// now we can return the value too 

// example 

// function fullName() {
//     return 'Joey';
// }

// echo fullName();

// or we can assign a variable 

// example 

// $fullName = fullName();

// echo $fullName;

// now the correct name for calling a funtion is invoking a function 

// another example 

// funtion FullName($firstName, $lastName) {
//     return $firstName . '' . $lastName;
// }

// now lets cll the name 

// $fullName = fullName();

// echo $fullName;

// just add the value 

// we can also call different function and add or replace the value 

// example 

// funtion firstName() {
    // return 'Joey';
// }

// you can either add the value in the funtion or the variable the result will be the same 

// we can also add a seperator 

// example 

// funtion fullName($firstName, $lastName, $seperator = ' ') {
//     return  "{$firstName}{$lastName}{$seperator}";
// }

// $fullName = fullName('Joey', 'Green', '_');

// echo fullName;

// lets check other variations of funtion 

$fullName = funtion ($firstName, $lastName, $seperator = ' ') {
    return "{$firstName}{$seperator}{$lastName}";
};

echo $fullName('Joey', 'Green');