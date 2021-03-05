<?php

namespace Demv\Werte\Exception;

use Exception;

class EntryNotFoundException extends Exception
{
    /**
     * @param string|int $id
     */
    public function __construct(string $classname, $id)
    {
        parent::__construct(
            sprintf('Der %s-Eintrag für die ID %s existiert nicht', $classname, $id),
            404,
            null
        );
    }
}
