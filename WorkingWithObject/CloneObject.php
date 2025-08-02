<?php

class Person
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

$bob = new Person('Bob');
// assign bob to alex and change the name
// $alex = $bob;


// $alex->name = 'Alex';

$alex = clone $bob;


// show both objects
var_dump($bob);
var_dump($alex);