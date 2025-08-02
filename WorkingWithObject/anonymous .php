<?php

$logger = new class {
    public function log(string $message): void
    {
        echo $message . '<br>';
    }
};

$logger->log('Hello');

// echo get_class($logger);