<?php

use AXP\FileParser\FileParser;

include_once '../../vendor/autoload.php';

$file = file_get_contents('./file.yaml', FILE_USE_INCLUDE_PATH);
$data = FileParser::yaml('latitude: 52.7157856867271
           longitude: -8.8741735070805
           zoom: 15');


print_r($data);