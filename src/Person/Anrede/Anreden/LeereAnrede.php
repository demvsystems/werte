<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.01.17
 * Time: 10:52
 */
namespace Demv\Werte\Person\Anrede\Anreden;

use Demv\Werte\Value;

class LeereAnrede extends Value
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, '');
    }

}