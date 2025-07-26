<?php

class BankAccount
{
    // Protected property - can be accessed by subclasses, but not from outside
    protected $balance;

    public function __construct($initialBalance)
    {
        $this->balance = $initialBalance;
    }

    // Protected method - can only be called inside this class or its child classes
    protected function calculateBalance()
    {
        return $this->balance;
    }
}

class SavingAccount extends BankAccount
{
    private $interestRate;

    public function __construct($initialBalance, $interestRate)
    {
        parent::__construct($initialBalance);
        $this->interestRate = $interestRate;
    }

    public function showBalanceWithInterest()
    {
        // Can access protected method and property from parent class
        $base = $this->calculateBalance();
        $total = $base + ($base * $this->interestRate);
        echo "Balance with interest: ₹" . $total . PHP_EOL;
    }
}

// Create new saving account
$account = new SavingAccount(1000, 0.10);
$account->showBalanceWithInterest();

// ❌ This will cause an error:
// echo $account->balance;
// echo $account->calculateBalance();
