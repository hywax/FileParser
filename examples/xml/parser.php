<?php

use AXP\FileParser\FileParser;

include_once '../../vendor/autoload.php';

$file = file_get_contents('./file.xml', FILE_USE_INCLUDE_PATH);
$data = FileParser::xml($file);

print_r($data);