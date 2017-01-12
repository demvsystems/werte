<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.01.17
 * Time: 10:52
 */
namespace Demv\Werte\Person\Anrede\Anreden;

use Demv\Werte\Person\Anrede\AnredeInterface;
use Demv\Werte\Value;

final class Herr extends Value implements AnredeInterface
{
    const ID = 1;

    public function __construct()
    {
        parent::__construct(self::ID, 'Herr');
    }

}