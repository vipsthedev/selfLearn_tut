<?php

class Contact
{
	private $email;

	public function __construct(string $email)
	{
		$this->email = $email;
	}

	public function getName()
	{
		return 'vipul';
	}
	public function getEmail()
	{
		return $this->email;
	}
}
