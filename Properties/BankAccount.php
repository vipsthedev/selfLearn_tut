<?php

class BankAccount
{
    public float $balance = 0;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}

$account = new BankAccount(0);
// echo $account->balance; // 0

// unset($account->balance); erro

// Example
$account = new BankAccount("100.5");
echo $account->balance; // 100.5

