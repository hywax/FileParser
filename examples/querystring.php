<?php

use AXP\Parser\Parser;

require_once '../vendor/autoload.php';

$parser      = new Parser();
$queryString = 'first=value&arr[]=foo+bar&arr[]=baz';
$data        = $parser->queryString($queryString);

echo '<pre>';
print_r($data);
echo '</pre>';
