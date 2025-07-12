<?php

class BankAccount
{
	private $accountNumber;

	private $balance;

	function __construct($accountNumber, $balance)
	{
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}
}