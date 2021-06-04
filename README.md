![](https://heatbadger.now.sh/github/readme/contributte/uniparser/?deprecated=1)

<p align=center>
	<a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
	<a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
	<a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
	Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Disclaimer

| :warning: | This project is no longer being maintained. Please use [contributte/latte](https://github.com/contributte/latte).
|---|---|

| Composer | [`minetro/uniparser`](https://packagist.org/minetro/uniparser) |
|---| --- |
| Version | ![](https://badgen.net/packagist/v/minetro/uniparser) |
| PHP | ![](https://badgen.net/packagist/php/minetro/uniparser) |
| License | ![](https://badgen.net/github/license/minetro/uniparser) |

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

```neon
uniparser.factory: Minetro\Uniparser\ParserFactory

nette.latteFactory:
	setup:
		- addFilter(texy, [@uniparser.factory::create('texy'), parse])
		- addFilter(parsedown, [@uniparser.factory::create('parsedown'), parse])
		- addFilter(markdown, [@uniparser.factory::create('markdown'), parse])
```

## Development

This package was maintain by these authors.

<a href="https://github.com/f3l1x">
	<img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.org/partners.html) **contributte** development team.
Also thank you for being used this package.
