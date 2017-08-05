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
                $result = [];

                return $this->normalizeSimpleXML($xml, $result);
            } catch (\Exception $e) {
                throw new FileParserException('Failed to parse xml');
            }
        }

        return [];
    }

    /**
     * Formatting XML
     *
     * @param \SimpleXMLElement $data
     * @param array $result
     *
     * @return array
     */
    protected function normalizeSimpleXML($data, &$result) {
        if (is_object($data)) {
            $data = get_object_vars($data);
        }

        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $res = null;
                $this->normalizeSimpleXML($value, $res);

                if (($key == '@attributes') && ($key)) {
                    $result = $res;
                } else {
                    $result[$key] = $res;
                }
            }
        } else {
            $result = $data;
        }

        return $result;
    }
}