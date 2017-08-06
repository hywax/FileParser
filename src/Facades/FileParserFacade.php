<?php

namespace AXP\FileParser\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class FileParser
 *
 * @author  Alexander Pushkarev <axp-dev@yandex.com>
 * @link    https://github.com/axp-dev/FileParser
 * @package AXP\FileParser\Facades
 *
 * @method  static array json(string $string) Parse JSON
 * @method  static array xml(string $string) Parse XML
 * @method  static array queryString(string $string) Parse Query String
 * @method  static array serialize(string $string) Parse Serialize
 * @method  static array ini(string $string) Parse Ini
 * @method  static array csv(string $string, string $delimiter = ';') Parse CSV
 */
class FileParser extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FileParser';
    }
}