<?php

namespace AXP\FileParser\Formats;

use AXP\FileParser\Exceptions\FileParserException;
use AXP\FileParser\Interfaces\FormatInterface;
use Symfony\Component\Yaml\Yaml as SFYaml;

/**
 * Class Yaml
 *
 * @author  Alexander Pushkarev <axp-dev@yandex.com>
 * @link    https://github.com/axp-dev/FileParser
 * @package AXP\FileParser\Formats
 */
class Yaml implements FormatInterface
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
                return SFYaml::parse(trim(preg_replace('/\t+/', '', $string)), true);
            } catch (\Exception $e) {
                throw new FileParserException('Failed to parse YAML');
            }
        }

        return [];
    }
}