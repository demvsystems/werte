<?php

namespace Demv\Werte\Exception;

use Exception;

/**
 * Class EntryNotFoundException
 * @package Demv\Werte\Exception
 */
class EntryNotFoundException extends Exception
{
    public function __construct($classname, $id)
    {
        parent::__construct(sprintf('Der %s-Eintrag für die ID %s existiert nich', $classname, $id), 404, null);
    }
}