<?php

require 'User.php';

use App\User as Account;
// var_dump(class_exists('Account');
    
if (class_exists('App\User')) {
    echo 'The class User exists';
} else {
    echo 'The class User does not exist';
}