<?php

namespace Minetro\Uniparser;

/**
 * Adapter Interface
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
interface IAdapter
{

    /**
     * @param string $text
     * @param array $args [optionally]
     * @param array $options [optionally]
     * @return mixed
     */
    function parse($text, array $args = [], array $options = []);

    /**
     * @param string $line
     * @param array $args [optionally]
     * @param array $options [optionally]
     * @return mixed
     */
    function parseLine($line, array $args = [], array $options = []);
}
