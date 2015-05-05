<?php

/**
 * Test: TexyAdapter
 */

use Minetro\Uniparser\Adapters\TexyAdapter;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

test(function() {
    $adapter = new TexyAdapter();

    $text = "
Headline
********
Headline2
=========
    ";

    Assert::equal("<h1>Headline</h1>\n\n<h2>Headline2</h2>", trim($adapter->parse($text)));
});
