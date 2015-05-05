<?php

/**
 * Test: ParsedownAdapter
 */

use Minetro\Uniparser\Adapters\ParsedownAdapter;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

test(function() {
    $adapter = new ParsedownAdapter();

    $text = "
# Headline
## Headline2
    ";

    Assert::equal("<h1>Headline</h1>\n<h2>Headline2</h2>", $adapter->parse($text));
});
