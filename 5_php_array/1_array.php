<?php 

// create array
$fruits = ["Banana", "Apple", "Orange"];
// print the whole array 
echo '<pre>';
var_dump($fruits); // print_r
echo '</pre>';

// get the element by index 
echo $fruits[1] . '<br>';

// set element by index
$fruits[0] = "Peach";
echo $fruits[0] . '<br>';
// check if array has element at index 2 

echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';

// pirnt the length of the array 
echo count($fruits) . '<br>';

// add element at the end of the array
$fruits[] = 'Peach';
echo $fruits[3] . '<br>';
array_push($fruits, 'Fool');
//remove element from the end of the array 
array_pop($fruits);
echo '<pre>';
var_dump($fruits); 
echo '</pre>';

// add element at the beginning of the array
array_unshift($fruits, 'Apple');
// remove element from the beginning of the array 
array_shift($fruits);

// split the string into an array
$strings = "Banana, Apple, Peach";

echo '<pre>';
var_dump(explode(",", $strings));
echo '</pre>';

print_r($fruits);


// combine array element into string 

echo implode(",", $fruits) . '<br>';

// check if element exist in the array 
echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';

// search element index in the array
echo '<pre>';
var_dump(array_search('Peach', $fruits));
echo '</pre>';

// merge two arrays
$vegetables = ['Potato', 'Cucumber'];

echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

// sorting of array (Reverse order also)

sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// create an associative array

$persons = [
'name' => 'AshinIndavudha',
'age' => 24,
'hobbies' => ['Reading', 'Writting', 'Learning', 'Gamming']
];

// Get element by key
echo $persons[
 'name'
] . '<br>';
// set element by key

$persons['channel'] = 'TraversyMedia';

// nulll coalescing assignment operator. 
if (!isset($persons['address'])) {
 $persons['address'] = 'Unknown';
}

$persons['address'] ??= 'Unknown';

echo $persons['address']. '<br>';

//check if array has specific key


