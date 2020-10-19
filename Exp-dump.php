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

// $fullName = funtion ($firstName, $lastName, $seperator = ' ') {
//     return "{$firstName}{$seperator}{$lastName}";
// };

// echo $fullName('Joey', 'Green');


// lets bulid a funtion that calculates any sum 

// we need list of numbers that add up 

// funtion add($num1, $num2, $num3) {
//     return $num1 + $num2 + $num3;
// }   

// echo add(5 + 10 + 10);


// this works but its not very flexible
// for example if we later have to add any number well have to go to the file where we added the numbers
// whate we can do is we can pass the numbers into an array rather than directly into the funtion 


// example 

// $numbers = [5, 10, 15];

// function add(array $numbers) {
//     $total = 0;
// }

// foreach ($numbers as $number) {
//     $total += $numbers;
// }

// return $total;

// echo add($numbers);
// // you can also pass the array directly without having to declare the variable 

// example 
// instead of writing 


// function add(array $numbers) {
//     $total = 0;
// }

// $numbers = [5, 10, 15];
// echo add($numbers);

// or (this is without having to declare the variable)

// function add(array $numbers) {
//     $total = 0;
// }

// echo add([5, 10, 15]);






