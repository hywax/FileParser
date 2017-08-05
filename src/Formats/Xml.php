<?php

namespace AXP\FileParser\Formats;

use AXP\FileParser\Exceptions\FileParserException;
use AXP\FileParser\Interfaces\FormatInterface;

/**
 * Class Xml
 *
 * @author  Alexander Pushkarev <axp-dev@yandex.com>
 * @link    https://github.com/axp-dev/FileParser
 * @package AXP\FileParser\Formats
 */
class Xml implements FormatInterface
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
                $xml = simplexml_load_string($string, 'SimpleXMLElement', (LIBXML_VERSION >= 20700) ? (LIBXML_PARSEHUGE | LIBXML_NOCDATA) : LIBXML_NOCDATA);

                return $xml;
            } catch (\Exception $e) {
                throw new FileParserException('Failed to parse xml');
            }
        }

        return [];
    }
}