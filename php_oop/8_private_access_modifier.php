<?php 
class Customer {
 private $name;
 public fucntion getName() {
  // if you attempt to access the private property outside of the class, you will get an error
   return $this->name;
 }
}


 $customer = new Customer();
 $customer->name = 'John';
 echo $customer->getName(); // John 

 // https://www.phptutorial.net/php-oop/php-access-modifiers/