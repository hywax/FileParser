# File Parser
[![Latest Stable Version](https://poser.pugx.org/axp-dev/file-parser/v/stable)](https://packagist.org/packages/axp-dev/file-parser)
[![Latest Unstable Version](https://poser.pugx.org/axp-dev/file-parser/v/unstable)](https://packagist.org/packages/axp-dev/file-parser)
[![License](https://poser.pugx.org/axp-dev/file-parser/license)](https://packagist.org/packages/axp-dev/file-parser)

File Parser Library for PHP. List of formats: json, xml, query string, serialize.

## Contents
1. [Installation](#installation)
    + [Composer](#composer)
    + [Laravel](#laravel)
    + [Lumen](#lumen)
2. [Usage](#usage)
    + [Json](#json)
    + [XML](#xml)
    + [Query String](#query-string)
    + [Serialize](#serialize)
3. [Author](#author)
4. [License](#license)

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
#### Example
```php
$string = '{"id":1,"name":"A green door","price":12.5,"tags":["home","green"]}';
$data   = FileParser::json($string);

print_r($data);
```

### XML
```php
public static function xml($string) : array
```
#### Example
```php
$string = '<?xml version="1.0" encoding="UTF-8" ?>
           <card>
                <id>1</id>
                <name>A green door</name>
                <price>12.5</price>
                <tags>home</tags>
                <tags>green</tags>
           </card>';
$data   = FileParser::xml($string);

print_r($data);
```

### Query String
```php
public static function queryString($string) : array
```
#### Example
```php
$string = 'id=1&name=A+green+door&price=12.5&tags%5B0%5D=home&tags%5B1%5D=green';
$data   = FileParser::queryString($string);

print_r($data);
```

### Serialize
```php
public static function serialize($string) : array
```
#### Example
```php
$string = 'a:4:{s:2:"id";s:1:"1";s:4:"name";s:12:"A green door";s:5:"price";s:4:"12.5";s:4:"tags";a:2:{i:0;s:4:"home";i:1;s:5:"green";}}';
$data   = FileParser::serialize($string);

print_r($data);
```

## Author
[Alexander Pushkarev](https://github.com/axp-dev), e-mail: [axp-dev@yandex.com](mailto:axp-dev@yandex.com)

## License
Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)