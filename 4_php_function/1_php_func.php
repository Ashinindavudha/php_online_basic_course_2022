<?php 
// fucntion to get the multiplication table
function get_multiplication_table($table, $length)
{
    for($i=1; $i<=$length; $i++)
    {
        echo "$table x $i = " . $table * $i . "<br>";
    }
}
get_multiplication_table(9, 10);

echo "<br>";
echo "<hr>";
// sum of numbers function
function sum_of_numbers($numbers)
{
    $sum = 0;
    foreach($numbers as $number)
    {
        $sum += $number;
    }
    return $sum;
}
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "Sum of numbers: " . sum_of_numbers($numbers);

echo "<br>";
echo "<hr>";
// function syntax
function Sum($a, $b)
{
    echo $a + $b;
}

Sum(10, 20);