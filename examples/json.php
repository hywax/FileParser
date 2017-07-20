<?php

use AXP\Parser\Parser;

require_once '../vendor/autoload.php';

$parser = new Parser();
$json   = '["Math", "Language", "Science"]';
$data   = $parser->json($json);

echo '<pre>';
print_r($data);
echo '</pre>';
