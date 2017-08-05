# File Parser
File Parser Library for PHP. List of formats: json, xml, query string, serialize.

## Contents
1. [Installation](#Installation)
    + [Composer](#Composer)
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