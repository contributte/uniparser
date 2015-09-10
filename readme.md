# Uniparser

[![Build Status](https://travis-ci.org/minetro/uniparser.svg?branch=master)](https://travis-ci.org/minetro/uniparser)
[![Downloads total](https://img.shields.io/packagist/dt/minetro/uniparser.svg?style=flat)](https://packagist.org/packages/minetro/uniparser)
[![Latest stable](https://img.shields.io/packagist/v/minetro/uniparser.svg?style=flat)](https://packagist.org/packages/minetro/uniparser)
[![HHVM Status](https://img.shields.io/hhvm/minetro/uniparser.svg?style=flat)](http://hhvm.h4cc.de/package/minetro/uniparser)

Universal text parser for Nette & Latte.

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
use Minetro\Uniparser\ParseFactory;

$factory = new ParseFactory();

$adapter = $factory->create('parsedown');

echo $adapter->parse($text);
```

### Latte
        
```yaml
uniparser.factory: Minetro\Uniparser\ParseFactory

nette.latteFactory:
    setup:
        - addFilter(texy, [@uniparser.factory::create('texy'), parse])
        - addFilter(parsedown, [@uniparser.factory::create('parsedown'), parse])
        - addFilter(markdown, [@uniparser.factory::create('markdown'), parse])
```
