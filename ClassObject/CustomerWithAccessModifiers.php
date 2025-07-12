<?php

// Define a class with access modifiers (public and private)
class CustomertWithAccessModifiers
{
    // Public property - can be accessed and modified directly from outside the class
    public $name;

    // Private property - can ONLY be accessed within this class
    private $phone;

    // Getter method for name (optional in this case since it's public)
    public function getName()
    {
        return $this->name;
    }

    // Setter method for phone - allows setting the private phone number
    public function setphone($phone)
    {
        $this->phone = $phone;  // Save the phone value
        return $this->phone;    // Return the set value (optional)
    }

    // Getter method for phone - allows retrieving the private phone number
    public function getphone()
    {
        return $this->phone;
    }
}

// Create an object (instance) of the class
$customer = new CustomertWithAccessModifiers();

// Directly assign a value to public property 'name'
$customer->name = 'Vipul';

// Output the customer's name using the getter method
echo $customer->getName(); // Output: Vipul

// Set the phone number using the setter (you cannot access $phone directly)
// $customer->phone = '9687951446';

$customer->setphone(9687951446);

// Output the phone number using the getter
echo "<br>". $customer->getphone(); // Output: 9687951446
