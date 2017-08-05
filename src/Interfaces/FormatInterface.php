<?php

namespace AXP\FileParser\Interfaces;

/**
 * Interface FormatInterface
 *
 * @author  Alexander Pushkarev <axp-dev@yandex.com>
 * @link    https://github.com/axp-dev/FileParser
 * @package AXP\FileParser\Interfaces
 */
interface FormatInterface
{
    /**
     * Parse Data
     *
     * @param string $string
     *
     * @return array
     */
    public function parse($string);
}