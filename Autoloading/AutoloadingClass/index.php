<?php

// require_once 'models/Contact.php';
require 'functions.php';
$contact = new Contact('john.doe@example.com');
echo $contact->getEmail();

echo $contact->getName();


