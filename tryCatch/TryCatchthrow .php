<?php

function divide($x, $y)
{
    if (!is_numeric($x) || !is_numeric($y)) {
        throw new InvalidArgumentException('Both arguments must be numbers or numeric strings');
    }

    if ($y == 0) {
        throw new Exception('Division by zero, y cannot be zero');
    }
    return $x / $y;
}