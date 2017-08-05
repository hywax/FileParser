<?php

use AXP\FileParser\FileParser;

include_once '../../vendor/autoload.php';

$string = 'user%5Bname%5D=Bob+Smith&user%5Bage%5D=47&user%5Bsex%5D=M&';
$data = FileParser::queryString($string);

print_r($data);