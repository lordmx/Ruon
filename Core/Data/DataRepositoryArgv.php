<?php

namespace Ruon\Core\Data;

/**
 *
 * Аргументы консоли
 *
 * @author Goorus
 *
 */
class DataRepositoryArgv extends DataRepositoryArray
{

    public function __construct()
    {
        global $argv;
        $this->data = $argv;
    }

}
