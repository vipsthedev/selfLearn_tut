<?php

interface Logger
{
    public function log(string $message): void;
}

$logger = new class implements Logger {
    public function log(string $message): void
    {
        echo $message . '<br>';
    }
};

$logger->log('Hello');

$logger1=clone $logger;
// echo $logger instanceof Logger;

function save(Logger $logger)
{
    $logger->log('The file was updated successfully.');
}

save($logger1); 