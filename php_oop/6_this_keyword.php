<?php 

class BankAccount {
 public $accountNumber;
 public $balance;

 public function deposit($amount) {
   if ($amount > 0) {
     $this->balance += $amount;
   }
   return $this;
 }
 public function withdraw($amount) {
   if ($amount > 0) {
     $this->balance -= $amount;
     return true;
   }
   return false;
}
}


// create a new object

 $bankAccount = new BankAccount();
 echo 'your account number is : ' .$bankAccount->accountNumber = 123456789;
 echo "<br>";
 echo 'Your balances is : ' .$bankAccount->balance = 100;
 echo "<br>";

 $bankAccount->deposit(100);
 $bankAccount->withdraw(150);


 
 echo 'Your balances is : ' .$bankAccount->balance;
 echo "<br>";
 $bankAccount->withdraw(50);
 echo 'Your balances is : ' .$bankAccount->balance;
 echo "<br>";
