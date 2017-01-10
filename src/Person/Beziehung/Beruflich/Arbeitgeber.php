<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:32
 */
namespace Demv\Werte\Person\Beziehung\Beruflich;

class Arbeitgeber extends BeruflicheBeziehung
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Arbeitgeber');
    }

}