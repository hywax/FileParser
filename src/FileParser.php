<?php

namespace AXP\FileParser;

use AXP\FileParser\Formats\Ini;
use AXP\FileParser\Formats\Json;
use AXP\FileParser\Formats\QueryString;
use AXP\FileParser\Formats\Serialize;
use AXP\FileParser\Formats\Xml;
use AXP\FileParser\Interfaces\FormatInterface;

/**
 * Class FileParser
 *
 * @author  Alexander Pushkarev <axp-dev@yandex.com>
 * @link    https://github.com/axp-dev/FileParser
 * @package AXP\FileParser
 */
class FileParser
{
    /**
     * Parse JSON
     *
     * @param string $string
     *
     * @return array
     */
    public static function json($string)
    {
        return self::parse($string, new Json());
    }

    /**
     * Parse XML
     *
     * @param string $string
     *
     * @return array
     */
    public static function xml($string)
    {
        return self::parse($string, new Xml());
    }

    /**
     * Parse Query String
     *
     * @param string $string
     *
     * @return array
     */
    public static function queryString($string)
    {
        return self::parse($string, new QueryString());
    }

    /**
     * Parse Serialize
     *
     * @param string $string
     *
     * @return array
     */
    public static function serialize($string)
    {
        return self::parse($string, new Serialize());
    }

    /**
     * Parse Ini
     *
     * @param string $string
     *
     * @return array
     */
    public static function ini($string)
    {
        return self::parse($string, new Ini());
    }

    /**
     * Parse string with the specified formatting
     *
     * @param string          $string
     * @param FormatInterface $format
     *
     * @return array
     */
    protected static function parse($string, FormatInterface $format)
    {
        return $format->parse($string);
    }
}