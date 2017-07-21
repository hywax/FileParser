<?php

use AXP\Parser\Parser;

require_once '../vendor/autoload.php';

$parser      = new Parser();
$xml         = '<?xml version="1.0" encoding="UTF-8"?>
                <note>
                  <to>Tove</to>
                  <from>Jani</from>
                  <heading>Reminder</heading>
                  <body>Don\'t forget me this weekend!</body>
                </note>';
$data        = $parser->xml($xml);

echo '<pre>';
print_r($data);
echo '</pre>';
