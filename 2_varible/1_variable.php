<?php
// What is a variable

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declare variables

$name = "AshinIndavudha";
$age = 24;
$isMale = true; // Change into false
$height = 1.85;
$salary = null;

// print the variables. Explain what is concatenation 
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// print the whole wariable
var_dump($name, $age, $isMale, $height, $salary);

echo "<br>";

// print type of the variable 

echo gettype($name) . '<br>';

// variable checking function 

is_string($name); // false

is_int($age); // true

is_bool($isMale);

is_double($height);

// check if variable is defined

var_dump(isset($name));
var_dump(isset($name2));

echo "<br>";

// constants 
define('PI', 3.14);

echo PI . '<br>';
var_dump(define('PI2', 3.24)); // DEFINE PI2


echo "<br>";

// 12. using php built-in constants

echo SORT_ASC . '<br>';

echo PHP_INT_MAX . '<br>'; 



