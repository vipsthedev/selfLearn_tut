<?php

class BankAccount
{
    protected $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    // Final method: Cannot be overridden in child classes
    final public function showBalance()
    {
        echo "Current balance is: ₹" . $this->balance . PHP_EOL;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
}

// Child class attempting to override a final method
class SavingAccount extends BankAccount
{
    private $interestRate;

    public function __construct($balance, $interestRate)
    {
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function addInterest()
    {
        $interest = $this->balance * $this->interestRate;
        $this->deposit($interest);
    }

    // ❌ This will cause a Fatal Error if you try to override final method
    /*
    public function showBalance() {
        echo "Overridden balance: ₹" . $this->balance;
    }
    */
}

$account = new SavingAccount(500, 0.1);
$account->addInterest();
$account->showBalance(); // Output: Current balance is: ₹550
