<?php
namespace Minetro\Uniparser;

/**
 * Parser Factory Interface
 *
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
interface IParserFactory
{
    /**
     * @param $parser
     * @return ParserFactory
     */
    function create($parser);
}
