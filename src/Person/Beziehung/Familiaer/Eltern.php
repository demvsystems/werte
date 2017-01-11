<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:32
 */
namespace Demv\Werte\Person\Beziehung\Familiaer;

final class Eltern extends FamiliaereBeziehung
{
    const ID = 2;

    public function __construct()
    {
        parent::__construct(self::ID, 'Elternteil');
    }

}