<?php

namespace AXP\FileParser\Formats;

use AXP\FileParser\Exceptions\FileParserException;
use AXP\FileParser\Interfaces\FormatInterface;

/**
 * Class Serialize
 *
 * @author  Alexander Pushkarev <axp-dev@yandex.com>
 * @link    https://github.com/axp-dev/FileParser
 * @package AXP\FileParser\Formats
 */
class Serialize implements FormatInterface
{
    /**
     * Parse Data
     *
     * @param string $string
     *
     * @return array
     * @throws FileParserException
     */
    public function parse($string)
    {
        if ( $string ) {
            try {
                return unserialize(trim($string));
            } catch (\Exception $e) {
                throw new FileParserException('Failed to parse serialized');
            }
        }

        return [];
    }
}