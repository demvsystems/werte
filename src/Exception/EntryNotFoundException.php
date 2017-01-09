<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 11:21
 */
namespace Demv\Werte\Exception;

use Exception;

class EntryNotFoundException extends Exception
{

    public function __construct($classname, $id)
    {
        parent::__construct(sprintf('Der %s-Eintrag für die ID %s existiert nich', $classname, $id), 404, null);
    }
}