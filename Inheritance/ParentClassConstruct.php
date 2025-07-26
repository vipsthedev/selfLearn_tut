<?php

// Parent class for general bank accounts
class BankAccount
{
	private $balance;

	// Constructor to initialize the account with a starting balance
	public function __construct($balance)
	{
		$this->balance = $balance;
	}

	// Getter method to retrieve current balance
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
		return $this; // Enables method chaining
	}
}

// Child class for savings accounts that earn interest
class SavingAccount extends BankAccount
{
	private $interestRate;

	// Constructor accepts both balance and interest rate
	public function __construct($balance, $interestRate)
	{
		// Call parent constructor to set initial balance
		parent::__construct($balance);
		$this->interestRate = $interestRate;
	}

	// Setter for interest rate (optional since it's set in constructor)
	public function setInterestRate($interestRate)
	{
		$this->interestRate = $interestRate;
	}

	// Add calculated interest to the current balance
	public function addInterest()
	{
		// Calculate interest based on current balance
		$interest = $this->interestRate * $this->getBalance();
		$this->deposit($interest); // Add it to the balance
	}
}

// Create a new savings account with initial balance and interest rate
$account = new SavingAccount(100, 0.05);

// Apply interest
$account->addInterest();

// Output the updated balance (100 + 5 = 105)
echo $account->getBalance();
