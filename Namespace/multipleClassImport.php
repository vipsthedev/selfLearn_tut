<?php

require 'src/Model/Customer.php';
require 'src/Model/Product.php';

// use Store\Model\Customer;
// use Store\Model\Product;

use Store\Model\{Customer, Product as vipul};

$customer = new Customer('Bob');
echo $customer->getName();

$product = new vipul('vipul');
echo $product->getName();