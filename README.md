# File Parser
[![Latest Stable Version](https://poser.pugx.org/axp-dev/file-parser/v/stable)](https://packagist.org/packages/axp-dev/file-parser)
[![Latest Unstable Version](https://poser.pugx.org/axp-dev/file-parser/v/unstable)](https://packagist.org/packages/axp-dev/file-parser)
[![License](https://poser.pugx.org/axp-dev/file-parser/license)](https://packagist.org/packages/axp-dev/file-parser)

File Parser Library for PHP. List of formats: json, xml, query string, serialize.

## Contents
1. [Installation](#Installation)
    + [Composer](#Composer)
    + [Laravel](#Laravel)
    + [Lumen](#Lumen)
2. [Usage](#Usage)
    + [Json](#Json)
    + [XML](#XML)
    + [Query String](#Query-String)
    + [Serialize](#Serialize)
3. [Author](#Author)
4. [License](#License)

## Installation
#### Composer
```
$ composer require axp-dev/file-parser
```
#### Laravel
Add service provider within `app/config/app.php`:
```php
'providers' => [
    ...
    AXP\FileParser\FileParserServiceProvider::class
]
```
Add a facade alias:
```php
'aliases' => [
    ...
    'FileParser' => AXP\FileParser\Facades\FileParser::class
]
```
#### Lumen
Add service provider within `bootstrap/app.php`:
```php
$app->register('AXP\FileParser\FileParserServiceProvider');
```
Add a facade alias:
```php
class_alias('AXP\FileParser\Facades\FileParser', 'FileParser');
```

## Usage
### Json
```php
public static function json($string) : array
```

### XML
```php
public static function xml($string) : array
```

### Query String
```php
public static function queryString($string) : array
```

### Serialize
```php
public static function serialize($string) : array
```

## Author
[Alexander Pushkarev](https://github.com/axp-dev), e-mail: [axp-dev@yandex.com](mailto:axp-dev@yandex.com)

## License
Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)