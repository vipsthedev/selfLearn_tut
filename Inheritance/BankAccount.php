<?php

// Base class representing a generic bank account
class BankAccount
{
    // Private balance, not accessible directly outside the class
    private $balance;

    // Getter method for accessing balance
    public function getBalance()
    {
        return $this->balance;
    }

    // Method to deposit money into the account
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }

        // Return $this to allow method chaining
        return $this;
    }
}

// Derived class representing a savings account with interest
class SavingAccount extends BankAccount
{
    // Private property to store the interest rate
    private $interestRate;

    // Setter method to set the interest rate
    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }

    // Method to calculate and add interest to the account balance
    public function addInterest()
    {
        // Calculate interest using balance from parent class
        $interest = $this->interestRate * $this->getBalance();
        
        // Add calculated interest to balance using deposit method
        $this->deposit($interest);
    }
}

// Create a new Savings Account object
$account = new SavingAccount();

// Deposit 100 into the account
$account->deposit(100);

// Set the interest rate to 5%
$account->setInterestRate(0.05);

// Add interest based on the current balance
$account->addInterest();

// Display final balance (should be 105)
echo $account->getBalance();
