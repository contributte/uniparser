<?php

namespace Minetro\Uniparser;

use Minetro\Uniparser\Adapters\MarkdownAdapter;
use Minetro\Uniparser\Adapters\ParsedownAdapter;
use Minetro\Uniparser\Adapters\TexyAdapter;
use \InvalidArgumentException;

/**
 * Parser Factory
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
final class ParserFactory
{
    /**
     * @param string $parser
     * @return IAdapter
     * @throws InvalidArgumentException
     */
    public function create($parser)
    {
        switch ($parser) {
            case 'texy':
                return new TexyAdapter();
                break;
            case 'markdown':
                return new MarkdownAdapter();
                break;
            case 'parsedown':
                return new ParsedownAdapter();
                break;
            default:
                throw new InvalidArgumentException("$parser is not allowed");
        }
    }
}
