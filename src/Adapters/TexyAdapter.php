<?php

namespace Minetro\Uniparser\Adapters;

use Minetro\Uniparser\IAdapter;
use Texy;

/**
 * Texy Adapter
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
class TexyAdapter implements IAdapter
{

    /** @var Texy */
    private $texy;

    /**
     * @param Texy $texy
     */
    public function __construct(Texy $texy = NULL)
    {
        if ($texy) {
            $this->texy = $texy;
        } else {
            $this->texy = new Texy();
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
        return $this->texy->process($text);
    }

    /**
     * @param string $line
     * @param array $args [optionally]
     * @param array $options [optionally]
     * @return mixed
     */
    public function parseLine($line, array $args = [], array $options = [])
    {
        return $this->texy->processLine($line);
    }

}
