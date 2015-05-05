<?php

/**
 * Test: MarkdownAdapter
 */

use Minetro\Uniparser\Adapters\MarkdownAdapter;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

test(function() {
    $adapter = new MarkdownAdapter();

    $text = "
# Headline
## Headline2
    ";

    Assert::equal("<h1>Headline</h1>\n\n<h2>Headline2</h2>", trim($adapter->parse($text)));
});
