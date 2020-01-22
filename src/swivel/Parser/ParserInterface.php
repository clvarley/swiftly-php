<?php

namespace Parser;

/**
 * The interface that all parsers should implement
 */
Interface ParserInterface
{

    /**
     * Attempt to parse the given input
     *
     * @param string $input Input
     */
    public function parse( string $input );

    /**
     * Gives parser access to external data
     *
     * @param array $data Data
     */
    public function setData( array $data ) : void;

}