<?php

use AXP\Parser\Parser;

require_once '../vendor/autoload.php';

$parser    = new Parser();
$serialize = 'a:3:{i:0;s:4:"Math";i:1;s:8:"Language";i:2;s:7:"Science";}';
$data      = $parser->serialize($serialize);

echo '<pre>';
print_r($data);
echo '</pre>';


