<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.01.17
 * Time: 16:32
 */
namespace Demv\Werte\Person\Beziehung\Beruflich;

/**
 * Class Arbeitnehmer
 * @package Demv\Werte\Person\Beziehung\Beruflich
 */
final class Arbeitnehmer extends BeruflicheBeziehung
{
    const ID = 4;

    public function __construct()
    {
        parent::__construct(self::ID, 'Arbeitnehmer');
    }

}