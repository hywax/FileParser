<?php

namespace AXP\Parser\Formats;

use AXP\Parser\Exceptions\ParserException;
use AXP\Parser\Interfaces\FormatInterface;

class Serialize implements FormatInterface
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
                return unserialize(trim($string));
            } catch (\Exception $e) {
                throw new ParserException('Failed to parse serialized');
            }
        }

        return [];
    }
}