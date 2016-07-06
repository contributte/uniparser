# Uniparser

Universal text parser for Nette & Latte.

-----

[![Build Status](https://img.shields.io/travis/minetro/uniparser.svg?style=flat-square)](https://travis-ci.org/minetro/uniparser)
[![Downloads total](https://img.shields.io/packagist/dt/minetro/uniparser.svg?style=flat-square)](https://packagist.org/packages/minetro/uniparser)
[![Latest stable](https://img.shields.io/packagist/v/minetro/uniparser.svg?style=flat-square)](https://packagist.org/packages/minetro/uniparser)
[![HHVM Status](https://img.shields.io/hhvm/minetro/uniparser.svg?style=flat-square)](http://hhvm.h4cc.de/package/minetro/uniparser)

## Discussion / Help

[![Join the chat](https://img.shields.io/gitter/room/minetro/nette.svg?style=flat-square)](https://gitter.im/minetro/nette?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

## Install

```sh
$ composer require minetro/uniparser:~1.0.0
```

## Dependencies

### TexyAdapter
```json
"texy/texy": "~2.6.0"
```

### ParsedownAdapter
```json
"erusev/parsedown-extra": "~0.7.0"
```

### MarkdownAdapter
```json
"michelf/php-markdown": "~1.5.0"
```

## Usage

### Standalone

```php
use Minetro\Uniparser\ParserFactory;

$factory = new ParserFactory();

$adapter = $factory->create('parsedown');

echo $adapter->parse($text);
```

### Latte
        
```yaml
uniparser.factory: Minetro\Uniparser\ParserFactory

nette.latteFactory:
    setup:
        - addFilter(texy, [@uniparser.factory::create('texy'), parse])
        - addFilter(parsedown, [@uniparser.factory::create('parsedown'), parse])
        - addFilter(markdown, [@uniparser.factory::create('markdown'), parse])
```
