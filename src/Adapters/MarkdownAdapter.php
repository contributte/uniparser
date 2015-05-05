<?php

namespace Minetro\Uniparser\Adapters;

use Minetro\Uniparser\IAdapter;
use Michelf\Markdown;

/**
 * Markdown Adapter
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
class MarkdownAdapter implements IAdapter
{

    /** @var Markdown */
    private $markdown;

    /**
     * @param Markdown $markdown
     */
    public function __construct(Markdown $markdown = NULL)
    {
        if ($markdown) {
            $this->markdown = $markdown;
        } else {
            $this->markdown = new Markdown();
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
        return $this->markdown->transform($text);
    }

    /**
     * @param string $line
     * @param array $args [optionally]
     * @param array $options [optionally]
     * @return mixed
     */
    public function parseLine($line, array $args = [], array $options = [])
    {
        return $this->markdown->transform($line);
    }

}
