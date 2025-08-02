<?php

class FileReader
{
    private $filename;

    public $done;

    protected $filesize;

    public static $mimeTypes;
    
}

var_dump(property_exists(FileReader::class, 'filename')); // true
var_dump(property_exists(FileReader::class, 'done')); // true
var_dump(property_exists(FileReader::class, 'filesize')); // true
var_dump(property_exists(FileReader::class, 'mimeTypes')); // true

var_dump(property_exists(FileReader::class, 'status')); // false