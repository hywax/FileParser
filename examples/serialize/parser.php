<?php

use AXP\FileParser\FileParser;

include_once '../../vendor/autoload.php';

$string = 'a:3:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";}';
$data = FileParser::serialize($string);

print_r($data);