<?php

use AXP\FileParser\FileParser;

include_once '../../vendor/autoload.php';

$file = file_get_contents('./file.csv', FILE_USE_INCLUDE_PATH);
$data = FileParser::csv($file, ';');

print_r($data);
