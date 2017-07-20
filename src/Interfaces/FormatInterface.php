<?php

namespace AXP\Parser\Interfaces;

interface FormatInterface
{

    /**
     * Парсим данные
     *
     * @param $string
     *
     * @return array
     */
    public function parse($string);
}