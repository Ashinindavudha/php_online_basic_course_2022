<?php
// ceclaring numbers

$a = 4;
$b = 4;
$c = 1.2;

// arithmetic operations

echo ($a + $b) * $c . '<br>';

echo $a - $b . '<br>';

echo $a * $b . '<br>';
echo $a / $b . '<br>';

echo $a % $b . '<br>';

// Assignment with math operatiors

//$a += $b; echo $a.'<br>'; // $a = 9
//$a -= $b; echo $a.'<br>'; // $a = 1
//$a *= $b; echo $a.'<br>'; // $a = 20
//$a /= $b; echo $a.'<br>'; // $a = 1.25
//$a %= $b; echo $a.'<br>'; // $a = 1

// increment operator

echo $a++ . '<br>';

echo ++$a . '<br>';

// Decrement opreator

echo $a-- . '<br>';
echo --$a . '<br>';


// number checking functions

is_float(1.25); // true

is_integer(3.4); // false

is_numeric("3.45"); // true

is_numeric("3g.45"); // false


// conversion 

$strNumber = '12.34';

$number = (float)$strNumber;

echo "<br>";

// number function

echo "abs(-15)". abs(-15) . '<br>';  //The abs() function returns the absolute (positive) value of a number.

//  If the number is of type float, the return type is also float, otherwise it is integer -> Return Type:	Float / Integer

echo "pow(2,  3) " . pow(2, 3) . '<br>';
// The pow() function returns x raised to the power of y. -> Return Type:	 Integer if possible, Float otherwise
echo "sqrt(16) " . sqrt(16) . '<br>';
// Return the square root of different numbers: -> Return Value:	The square root of number, or NAN for negative numbers ->Return Type:	Float
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';



// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';
/*
The number_format() function formats a number with grouped thousands.

Note: This function supports one, two, or four parameters (not three).
*/

// https://www.php.net/manual/en/ref.math.php
