<?php

namespace Minetro\Uniparser\Adapters;

use Minetro\Uniparser\IAdapter;
use Parsedown;

/**
 * Parsedown Adapter
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
class ParsedownAdapter implements IAdapter
{

    /** @var Parsedown */
    private $parsedown;

    /**
     * @param Parsedown $parsedown
     */
    public function __construct(Parsedown $parsedown = NULL)
    {
        if ($parsedown) {
            $this->parsedown = $parsedown;
        } else {
            $this->parsedown = new Parsedown();
        }
    }

    /**
     * @param string $text
     * @param array $args [optionally]
     * @param array $options [optionally]
     * @return mixed
     */
    public function parse($text, array $args = [], array $options = [])
    {
        return $this->parsedown->text($text);
    }

    /**
     * @param string $line
     * @param array $args [optionally]
     * @param array $options [optionally]
     * @return mixed
     */
    public function parseLine($line, array $args = [], array $options = [])
    {
        return $this->parsedown->line($line);
    }

}
