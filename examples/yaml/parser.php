<?php

use AXP\FileParser\FileParser;

include_once '../../vendor/autoload.php';

$file = file_get_contents('./file.yaml', FILE_USE_INCLUDE_PATH);
$data = FileParser::yaml($file);


print_r($data);