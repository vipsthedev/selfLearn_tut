<?php

// Define a class called BankAccount
class BankAccount
{
    // Public properties (can be accessed from outside the class)
    public $accountNumber;
    public $balance;

    // Method to deposit money into the account
    public function deposit($amount)
    {
        // Check if the deposit amount is positive
        if ($amount > 0) {
            // Increase the balance by the deposit amount
            $this->balance += $amount;
        }
    }

    // Method to withdraw money from the account
    public function withdraw($amount)
    {
        // Only withdraw if there are sufficient funds
        if ($amount <= $this->balance) {
            // Decrease the balance by the withdrawal amount
            $this->balance -= $amount;
            return true; // Withdrawal successful
        }

        return false; // Not enough balance
    }
}

// Create an object of BankAccount
$account = new BankAccount();

// Set account number and initial balance
$account->accountNumber = 1;
$account->balance = 100;

// Call deposit method to add money
$deposit = $account->deposit(100);

// Call withdraw method to take out money
$withdraw = $account->withdraw(100);

// Display final account details
echo "The bank account $account->accountNumber has a balance of $$account->balance.";
