<?php

namespace AXP\FileParser\Formats;

use AXP\FileParser\Interfaces\FormatInterface;

/**
 * Class QueryString
 *
 * @author  Alexander Pushkarev <axp-dev@yandex.com>
 * @link    https://github.com/axp-dev/FileParser
 * @package AXP\FileParser\Formats
 */
class QueryString implements FormatInterface
{
    /**
     * Parse Data
     *
     * @param string $string
     *
     * @return array
     */
    public function parse($string)
    {
        if ( $string ) {
            parse_str(trim($string), $data);

            return $data;
        }

        return [];
    }
}