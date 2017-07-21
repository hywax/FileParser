<?php

namespace AXP\Parser\Formats;

use AXP\Parser\Exceptions\ParserException;
use AXP\Parser\Interfaces\FormatInterface;

class Xml implements FormatInterface
{

    /**
     * Парсим данные
     *
     * @param $string
     *
     * @return array
     * @throws ParserException
     */
    public function parse($string)
    {
        if ( $string ) {
            try {
                $xml = simplexml_load_string($string, 'SimpleXMLElement', (LIBXML_VERSION >= 20700) ? (LIBXML_PARSEHUGE | LIBXML_NOCDATA) : LIBXML_NOCDATA);

                return $xml;
            } catch (\Exception $e) {
                throw new ParserException('Failed to parse xml');
            }
        }

        return [];
    }
}