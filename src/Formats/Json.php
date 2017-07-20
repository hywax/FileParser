<?php

namespace AXP\Parser\Formats;

use AXP\Parser\Exceptions\ParserException;
use AXP\Parser\Interfaces\FormatInterface;

class Json implements FormatInterface
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
            $data = json_decode(trim($string), true);

            if ( !$data ) {
                throw new ParserException('Failed to parse json');
            }

            return $data;
        }

        return [];
    }
}