<?php 
class BankAccount {
  // properties
  public $accountNumber;
  public $balance;

  // methods
  public function deposit($amount) {
    // $this->balance += $amount;
    if ($amount > 0) {
      $this->balance += $amount;
    }
  }
}

 // object
$bankAccount = new BankAccount();
echo 'your account number is : ' .$bankAccount->accountNumber = 123456789;
echo "<br>";
echo 'Your balances is : ' .$bankAccount->balance = 100;
echo "<br>";


// $object->method(arguments);

$bankAccount->deposit(100);
echo 'Your balances is : ' .$bankAccount->balance;
echo "<br>";
