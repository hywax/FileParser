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

#### Serialize: ####
```php
$parser    = new Parser();
$serialize = 'a:3:{i:0;s:4:"Math";i:1;s:8:"Language";i:2;s:7:"Science";}';
$data      = $parser->serialize($serialize);

print_r($data);
```

#### Query String: ####
```php
$parser      = new Parser();
$queryString = 'first=value&arr[]=foo+bar&arr[]=baz';
$data        = $parser->queryString($queryString);

print_r($data);
```