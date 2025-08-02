<?php

require 'src/Model/Customer.php';
use Store\Model;
use Store\Model\Customer;


// $customer = new Store\Model\Customer('Bob');
// $customer = new Model\Customer('Bob');
$customer = new Customer('Bob');


echo $customer->getName();