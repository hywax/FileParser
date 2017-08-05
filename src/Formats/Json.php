<?php

namespace AXP\FileParser\Formats;

use AXP\FileParser\Exceptions\FileParserException;
use AXP\FileParser\Interfaces\FormatInterface;

/**
 * Class Json
 *
 * @author  Alexander Pushkarev <axp-dev@yandex.com>
 * @link    https://github.com/axp-dev/FileParser
 * @package AXP\FileParser\Formats
 */
class Json implements FormatInterface
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
            $data = json_decode(trim($string), true);

            if ( !$data ) {
                throw new FileParserException('Failed to parse json');
            }

            return $data;
        }

        return [];
    }
}