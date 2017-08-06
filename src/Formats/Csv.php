<?php

namespace AXP\FileParser\Formats;

use AXP\FileParser\Exceptions\FileParserException;
use AXP\FileParser\Interfaces\FormatInterface;

/**
 * Class Ini
 *
 * @author  Alexander Pushkarev <axp-dev@yandex.com>
 * @link    https://github.com/axp-dev/FileParser
 * @package AXP\FileParser\Formats
 */
class Csv implements FormatInterface
{
    private $delimiter = ',';

    function __construct($delimiter)
    {
        $this->delimiter = $delimiter;
    }

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
                return $this->format($string, $this->delimiter);
            } catch (\Exception $e) {
                throw new FileParserException('Failed to parse csv file');
            }
        }

        return [];
    }

    /**
     * Format data
     *
     * @param string $string
     * @param string $delimiter
     *
     * @return array
     */
    protected function format($string, $delimiter)
    {
        $result = [];

        if ( $lines = explode(PHP_EOL, $string) ) {
            foreach ($lines as $line) {
                $result[] = str_getcsv($line, $delimiter);
            }
        }

        return $result;
    }
}