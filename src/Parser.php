<?php

namespace AXP\Parser;

use AXP\Parser\Formats\Json;
use AXP\Parser\Formats\QueryString;
use AXP\Parser\Formats\Serialize;
use AXP\Parser\Formats\Xml;
use AXP\Parser\Interfaces\FormatInterface;

class Parser
{
    /**
     * Парсим строку с заданным форматированием
     *
     * @param                 $string
     * @param FormatInterface $format
     *
     * @return array
     */
    private function parse($string, FormatInterface $format)
    {
        return $format->parse($string);
    }

    /**
     * Парсим Json
     *
     * @param $string
     *
     * @return array
     */
    public function json($string)
    {
        return $this->parse($string, new Json());
    }

    /**
     * Парсим Xml
     *
     * @param $string
     *
     * @return array
     */
    public function xml($string)
    {
        return $this->parse($string, new Xml());
    }

    /**
     * Парсим Serialize
     *
     * @param $string
     *
     * @return array
     */
    public function serialize($string)
    {
        return $this->parse($string, new Serialize());
    }

    /**
     * Парсим Query String
     *
     * @param $string
     *
     * @return array
     */
    public function queryString($string)
    {
        return $this->parse($string, new QueryString());
    }
}