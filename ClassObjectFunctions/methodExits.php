<?php

class BankAccount
{
    public function transferTo(BankAccount $other, float $amount)
    {
        // more code
    }
}

$exists = method_exists(BankAccount::class, 'transferTo');
var_dump($exists); // bool(true)

$exists = method_exists(BankAccount::class, 'deposit');
var_dump($exists); // bool(false)