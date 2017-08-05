<?php

namespace AXP\FileParser\Facades;

use Illuminate\Support\Facades\Facade;

class FileParser extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'FileParser';
    }
}