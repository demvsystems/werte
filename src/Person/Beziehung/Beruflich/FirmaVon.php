<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:32
 */
namespace Demv\Werte\Person\Beziehung\Beruflich;

class FirmaVon extends BeruflicheBeziehung
{
    const ID = 7;

    public function __construct()
    {
        parent::__construct(self::ID, 'Firma von');
    }

}