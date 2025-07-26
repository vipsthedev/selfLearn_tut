<?php

declare(strict_types=1);

class BankAccountStictType
{
    public float $balance = 0;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}


// $account = new BankAccountStictType("100.5"); // error
$account = new BankAccountStictType(100.5); 
echo $account->balance; // 100.5

