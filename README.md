# Parser #
Парсер для разбора json, xml, serialize, query string в php массив.

## Документация: ##
#### Json: ####
```php
$parser = new Parser();
$json   = '{"id": 1,"name": "A green door","price": 12.50,"tags": ["home", "green"]}';
$data   = $parser->json($json);

print_r($data);
```