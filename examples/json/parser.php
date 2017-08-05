<?php

use AXP\FileParser\FileParser;

include_once '../../vendor/autoload.php';

$file = file_get_contents('./file.json', FILE_USE_INCLUDE_PATH);
$data = FileParser::json($file);

print_r($data);