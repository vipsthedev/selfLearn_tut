<?php

class Counter
{
    // Static property
    public static $count = 0;

    // Static method
    public static function increment()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }
}

// Accessing static methods and properties without object
Counter::increment();
Counter::increment();
Counter::increment();

echo "Total Count: " . Counter::getCount(); // Output: Total Count: 2
