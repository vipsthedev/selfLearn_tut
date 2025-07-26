<?php

// Define the interface
interface Logger
{
    public function log($message);
}

// Implement the interface in a class
class FileLogger implements Logger
{
    public function log($message)
    {
        echo "Logging to file: $message\n";
    }
}

class DatabaseLogger implements Logger
{
    public function log($message)
    {
        echo "Logging to database: $message\n";
    }
}

// A function that accepts any Logger implementation
function processLog(Logger $logger, $msg)
{
    $logger->log($msg);
}

// Usage
$fileLogger = new FileLogger();
$dbLogger = new DatabaseLogger();

processLog($fileLogger, "File log message");
processLog($dbLogger, "Database log message");
