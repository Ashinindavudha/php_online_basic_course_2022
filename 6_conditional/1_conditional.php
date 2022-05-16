<?php 
$age = 20;
$salary = 300000;
// sample if
// if conditional 
if ($age == 20) {
 echo "Your age is: 20";
}

// without circle braces
if ($age == 20)
 echo "Your age is: 20";

 // sample if else
 if ($age == 20) {
  echo "Your age is: 20";
 } else {
  echo "Your age is not 20";
 }


 // difference between == and ===
 $age == 20; // true
 $age === '20'; // true
 $age === 20; // true
 $age === '20'; // false

 // if AND
 if ($age == 20 && $salary == 300000) {
  echo "Your age is: 20 and your salary is 300000";
 }

 // if OR
 if ($age == 20 || $salary == 300000) {
  echo "Your age is: 20 or your salary is 300000";
 }

 // if or
 if ($age > 20 OR $salary === 300000) {
  echo "Your age is: 20 or your salary is 300000";
 }

 // ternary if 
 echo $age < 20 ? "Your age is less than 20" : "Your age is greater than 20";
 echo "<br>";

 // short tenary 
 $myAage = $age < 20 ? "Your age is less than 20" : "Your age is greater than 20";

 // null coalescing operator
 $var = isset($name) ? $name : "Ashin";
 $var = $name ?? "Ashin"; // equivalent to above
 echo $var; 
 echo "<br>";

 // switch case
 $userRole = "admin";
 switch ($userRole){
  case 'admin':
   echo "You are admin";
   break;
  case 'user':
   echo "You are user";
   break;
  default:
   echo "You are not admin or user";
   break;
 }