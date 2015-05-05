<?php

/**
 * Test: ParserFactory
 */

use Minetro\Uniparser\ParserFactory;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

test(function() {
    $factory = new ParserFactory();

    Assert::type('Minetro\Uniparser\IAdapter', $factory->create('texy'));
    Assert::type('Minetro\Uniparser\Adapters\TexyAdapter', $factory->create('texy'));

    Assert::type('Minetro\Uniparser\IAdapter', $factory->create('markdown'));
    Assert::type('Minetro\Uniparser\Adapters\MarkdownAdapter', $factory->create('markdown'));

    Assert::type('Minetro\Uniparser\IAdapter', $factory->create('parsedown'));
    Assert::type('Minetro\Uniparser\Adapters\ParsedownAdapter', $factory->create('parsedown'));
});

test(function() {
    $factory = new ParserFactory();

    Assert::throws(function() use ($factory) {
        $factory->create(NULL);
    }, 'InvalidArgumentException');
});
